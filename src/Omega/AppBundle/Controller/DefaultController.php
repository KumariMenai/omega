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

<<<<<<< HEAD
        $results   = $em->createQueryBuilder()
            ->select('d')
            ->from('AppBundle:Demande', 'd', 'd.idClientDemande')
            ->getQuery()
            ->getResult()
        ;

        $forfaits   = $em->createQueryBuilder()
            ->select('f')
            ->from('AppBundle:ForfaitBudget', 'f', 'f.idForfaitBudget')
=======
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
>>>>>>> remotes/origin/develop
            ->getQuery()
            ->getResult()
        ;

        $mapping    = $this->getParameter('omega.admin.import.demande.mapping');

        $handle = fopen($filename,'r');
        $idDemande = $resultId['id'];

        while (($data = fgetcsv($handle) ) !== FALSE ) {

<<<<<<< HEAD
=======
            $array = explode(';', $data[0]);
>>>>>>> remotes/origin/develop
            if(!empty($array) && $array[0] != 'idClientDemande') {

                $array = $this->formatData(array_map(array($this, 'filtreData'), array_combine(array_keys($mapping), array_values($array))));

<<<<<<< HEAD
                if (array_key_exists($id = $array['idClientDemande'], $results)) {
=======
                $forfaitObject   = $resultCodeFB[$array['application']];
>>>>>>> remotes/origin/develop

                ++ $idDemande;

<<<<<<< HEAD
                    if (array_key_exists($idF = $array['application'], $forfaits)) {
                        $demande->setApplication($forfaits[$idF]);
                    }

                    unset($results[$id]);
                } else {
                    $demande = new Demande();
                }
=======
                $demande = new Demande();
                $demande->setId($idDemande);
>>>>>>> remotes/origin/develop

                $demande = $normalizer->denormalize(
                    $array,
                    'Omega\AppBundle\Entity\Demande',
                    null,
                    array('object_to_populate' =>  $demande)
                );
<<<<<<< HEAD

                $em->persist( $demande);
=======
                $demande->setApplication($forfaitObject->getIDFORFAITBUDGET());

                $em->persist($demande);
>>>>>>> remotes/origin/develop
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
<<<<<<< HEAD
        $object['application'] = intval($object['application']);
        $object['priority'] = intval($object['priority']);
=======

>>>>>>> remotes/origin/develop

        $object['priority'] = intval($object['priority']);
        $object['dateDebut'] = \DateTime::createFromFormat('Y-m-d H:i:s', $object['dateDebut']);
        $object['dateFin'] = \DateTime::createFromFormat('Y-m-d H:i:s', $object['dateFin']);
        $object['chargeTotal'] = floatval($object['chargeTotal']);
<<<<<<< HEAD



=======
        //$object['application'] = intval($object['application']);
>>>>>>> remotes/origin/develop
        return $object;

    }

}
