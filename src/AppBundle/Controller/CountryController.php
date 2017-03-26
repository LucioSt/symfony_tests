<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;



/**
 * Country controller.
 *
 * @Route("country")
 */
class CountryController extends Controller
{
    /**
     * Lists all country entities.
     *
     * @Route("/{letra}", name="country_index")
     * @Method("GET")
     */
    public function indexAction($letra)
    {
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Country');

        // createQueryBuilder() automatically selects FROM AppBundle:Product
        // and aliases it to "p"
        $query = $repository->createQueryBuilder('p')
            ->where('p.name LIKE :name')
            ->setParameter('name', $letra.'%')
            ->orderBy('p.name', 'ASC')
            ->getQuery();

        $listcountrys = $query->getResult();

        // object to Json
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $json = $serializer->serialize($listcountrys, 'json');

       return new Response($json, 200);
    }


}
