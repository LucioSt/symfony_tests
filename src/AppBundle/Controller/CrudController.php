<?php
/**
 * Created by PhpStorm.
 * User: lucio
 * Date: 13/02/17
 * Time: 13:52
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CrudController extends Controller
{

    /**
     * @Route("/teste/{pageName}")
     *
     */
    public function showAction($pageName)
    {
        return $this->render('teste/show.html.twig',[
            'name' => $pageName
            ]);
    }



}