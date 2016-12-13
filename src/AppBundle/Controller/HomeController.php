<?php

namespace AppBundle\Controller;

use AppBundle\Repository\LessonRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/")
     */
    public function numberAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lessons = $em->getRepository('AppBundle:Lesson')->findAll();

        return $this->render('home/home.html.twig', array(
            'lessons' => $lessons,
        ));
    }
}