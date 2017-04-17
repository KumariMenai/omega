<?php

namespace Omega\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Omega\AppBundle\Entity\Demande;
use Omega\AppBundle\Entity;
use Omega\AppBundle\Entity\ForfaitBudget;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $dir = 'C:\Application\omega\bin\csv';
        $file = scandir($dir);
        $last_file = 0;
        foreach ($file as $f){
            if (filectime($dir.'\\'.$f)>$last_file){
                $last_file = filectime($dir.'\\'.$f);
            }
        }



        foreach ($file as $f){
            if (filectime($dir.'\\'.$f) == $last_file){
                $file_name = $f;

            }
        }

        $filename = $dir.'\\'.$file_name;


        ini_set('auto_detect_line_endings',TRUE);

        $normalizer = new ObjectNormalizer();
        $em         = $this->getDoctrine()->getManager();

        $dateNow = date('Y-m-d H:i:s');

        $resultId   = $em->createQueryBuilder()
            ->select('d.id')
            ->from('AppBundle:Demande', 'd')
            ->orderBy('d.id','DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
        $resultIdDemandeDansEtat   = $em->createQueryBuilder()
            ->select('d.id')
            ->from('AppBundle:DemandeSeTrouveDansEtat', 'd')
            ->orderBy('d.id','DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;

        $resultCodeFB   = $em->createQueryBuilder()
            ->select('f')
            ->from('AppBundle:ForfaitBudget', 'f', 'f.codeForfaitBudget')
            ->getQuery()
            ->getResult()
        ;

        $mappingDemande    = $this->getParameter('omega.admin.import.demande.mapping');
        $mappingStatus     = $this->getParameter('omega.admin.import.status.mapping');

        $handle = fopen($filename,'r');
        $idDemande = $resultId['id'];
        $idStatus = $resultIdDemandeDansEtat['id'];


        while (($data = fgetcsv($handle) ) !== FALSE ) {


            $array = explode(';', $data[0]);


            if(!empty($array) && $array[0] != 'idClientDemande') {

                $statusMappingSplice = array_splice($array,4,-5);


                $status = $mappingStatus[$this->filtreData($statusMappingSplice[0])];

                $array = $this->formatData(array_map(array($this, 'filtreData'), array_combine(array_keys($mappingDemande), array_values($array))));

                $forfaitObject   = $resultCodeFB[$array['application']];

                ++ $idDemande;
                ++ $idStatus;

                $demande = new Demande();
                $demande->setId($idDemande);

                $DemandeSeTrouveDansEtat = new Entity\DemandeSeTrouveDansEtat();
                $DemandeSeTrouveDansEtat->setId($idStatus);
                $DemandeSeTrouveDansEtat->setIdDemande($idDemande);
                $DemandeSeTrouveDansEtat->setCodeEtat($status);
                $DemandeSeTrouveDansEtat->setDateEntree($this->dateNow($dateNow));


                //var_dump($DemandeSeTrouveDansEtat);var_dump($demande);die();
                $demande = $normalizer->denormalize(
                    $array,
                    'Omega\AppBundle\Entity\Demande',
                    null,
                    array('object_to_populate' =>  $demande)
                );
                $demande->setApplication($forfaitObject->getIDFORFAITBUDGET());

                $em->persist($demande);
                $em->persist($DemandeSeTrouveDansEtat);
            }
        }

        $em->flush();

        ini_set('auto_detect_line_endings',FALSE);

        die('OK !');
    }

    public function filtreData($data) {
        return trim($data, '«»');
    }

    public function formatData($object) {


        $object['priority'] = intval($object['priority']);
        $object['dateDebut'] = \DateTime::createFromFormat('Y-m-d H:i:s', $object['dateDebut']);
        $object['dateFin'] = \DateTime::createFromFormat('Y-m-d H:i:s', $object['dateFin']);
        $object['chargeTotal'] = floatval($object['chargeTotal']);
        //$object['$dateEntree'] = \DateTime::createFromFormat('Y-m-d H:i:s', $object['$dateEntree']);
        //$object['application'] = intval($object['application']);
        return $object;

    }

    public function dateNow($dateNow){
        return \DateTime::createFromFormat('Y-m-d H:i:s', $dateNow);;
    }

}
