<?php
namespace Omega\AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Omega\AppBundle\Entity\Demande;
use Omega\AppBundle\Entity;
use Omega\AppBundle\Entity\ForfaitBudget;
use Omega\AppBundle\Entity\DemandeDansEtat;
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
        $dateNow = date('Y-m-d H:i:s');

        $resultId   = $em->createQueryBuilder()
            ->select('d.id')
            ->from('AppBundle:Demande', 'd')
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

        $resultIdDemandeDansEtat   = $em->createQueryBuilder()
            ->select('d.id')
            ->from('AppBundle:DemandeDansEtat', 'd')
            ->orderBy('d.id','DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;


        $mappingDemande    = $this->getParameter('omega.admin.import.demande.mapping');

        $mappingStatut = $this->getParameter('omega.admin.import.statut.mapping');

        $handle = fopen($filename,'r');

        $idDemande = $resultId['id'];
        $idStatut = $resultIdDemandeDansEtat['id'];

        while (($data = fgetcsv($handle) ) !== FALSE ) {

            $array = explode(';', $data[0]);

            if(!empty($array) && $array[0] != 'idClientDemande') {
                $statutMappingSplice = array_splice($array,4,-5);
                $statut = $mappingStatut[$this->filtreData($statutMappingSplice[0])];
                $finalArray = $this->formatData(array_map(array($this, 'filtreData'), array_combine(array_keys($mappingDemande), array_values($array))));

                $forfaitObject   = $resultCodeFB[$finalArray['application']];

               ++ $idDemande;
                ++ $idStatut;

                $demande = new Demande();
                $demande->setId($idDemande);

                $DemandeSeTrouveDansEtat = new Entity\DemandeDansEtat();
                $DemandeSeTrouveDansEtat->setId($idStatut);
                $DemandeSeTrouveDansEtat->setIdDemande($idDemande);
                $DemandeSeTrouveDansEtat->setStatut($statut);
                $DemandeSeTrouveDansEtat->setDateEntree($this->dateNow($dateNow));


                $demande = $normalizer->denormalize(
                    $finalArray,
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
        die('YATAA');
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

    public function dateNow($dateNow){
        return \DateTime::createFromFormat('Y-m-d H:i:s', $dateNow);;
    }
}