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
        $filename = $this->get('kernel')->getRootDir().'/../bin/csv/prototype.csv';
        ini_set('auto_detect_line_endings',TRUE);

        $normalizer = new ObjectNormalizer();
        $em         = $this->getDoctrine()->getManager();
        $results   = $em->createQueryBuilder()
            ->select('d')
            ->from('AppBundle:Demande', 'd', 'd.id')
            ->getQuery()
            ->getResult()
        ;
        $resultId   = $em->createQueryBuilder()
            ->select('d.id')
            ->from('AppBundle:Demande', 'd')
            ->orderBy('d.id','DESC')
            ->getQuery()
            ->getResult()
        ;
        $resultCodeFB   = $em->createQueryBuilder()
            ->select('f')
            ->from('AppBundle:ForfaitBudget', 'f')
            ->getQuery()
            ->getResult()
        ;

        $mapping    = $this->getParameter('omega.admin.import.demande.mapping');

        $handle = fopen($filename,'r');
        $idDemande = $resultId[0];

        while (($data = fgetcsv($handle) ) !== FALSE ) {

            $array = explode(';', $data[0]);
            if(!empty($array) && $array[0] != 'idClientDemande') {

                $array = $this->formatData(array_map(array($this, 'filtreData'), array_combine(array_keys($mapping), array_values($array))));

                if (array_key_exists($id = $array['idClientDemande'], $results)) {
                    $demande   = $results[$id];
                    unset($results[$id]);
                } else {
                    $resultCodeFB   = $em->createQueryBuilder()
                        ->select('f')
                        ->from('AppBundle:ForfaitBudget', 'f')
                        ->where('f.codeForfaitBudget LIKE :string')
                        ->setParameter('string', $array['application'])
                        ->getQuery()
                        ->getResult()
                    ;
                    //var_dump($array);die();
                    //var_dump($resultCodeFB[0]->getIDFORFAITBUDGET());die();
                    //$array['application'] = strval($resultCodeFB[0]->getIDFORFAITBUDGET());
                    ++ $idDemande['id'];
                    $demande = new Demande();
                    $demande->setId($idDemande['id']);


                }

                $demande = $normalizer->denormalize(
                    $array,
                    'Omega\AppBundle\Entity\Demande',
                    null,
                    array('object_to_populate' =>  $demande)
                );
                $demande->setApplication($resultCodeFB[0]->getIDFORFAITBUDGET());

                $em->persist($demande);
            }
        }

        $em->flush();

        ini_set('auto_detect_line_endings',FALSE);
        die('OK');
    }

    public function filtreData($data) {
        return trim($data, '«»');
    }

    public function formatData($object) {


        $object['priority'] = intval($object['priority']);
        $object['dateDebut'] = \DateTime::createFromFormat('Y-m-d H:i:s', $object['dateDebut']);
        $object['dateFin'] = \DateTime::createFromFormat('Y-m-d H:i:s', $object['dateFin']);
        $object['chargeTotal'] = floatval($object['chargeTotal']);
        //$object['application'] = intval($object['application']);
        return $object;

    }

}
