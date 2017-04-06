<?php

namespace Omega\AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Omega\AppBundle\Entity\Test;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $filename = $this->get('kernel')->getRootDir().'/../bin/csv/test2.csv';
        ini_set('auto_detect_line_endings',TRUE);

        $normalizer = new ObjectNormalizer();
        $em         = $this->getDoctrine()->getManager();
        $results   = $em->createQueryBuilder()
            ->select('t')
            ->from('AppBundle:Test', 't', 't.id')
            ->getQuery()
            ->getResult()
        ;

        $mapping    = $this->getParameter('omega.admin.import.test.mapping');

        $handle = fopen($filename,'r');

        while ( ($data = fgetcsv($handle) ) !== FALSE ) {
            $array = explode(';', $data[0]);

            if(!empty($array) && $array[0] != 'id') {

                $array = array_combine(array_keys($mapping), array_values($array));

                if (array_key_exists($id = $array['id'], $results)) {
                    $test   = $results[$id];
                    unset($results[$id]);
                } else {
                    $test = new Test();
                }

                $test = $normalizer->denormalize(
                    array_map(array($this, 'filtreData'), $array),
                    'Omega\AppBundle\Entity\Test',
                    null,
                    array('object_to_populate' => $test)
                );

                $em->persist($test);
            }
        }

        $em->flush();

        ini_set('auto_detect_line_endings',FALSE);
        die('piw');
    }

    public function filtreData($data) {
        return trim($data, '«»');
    }

}
