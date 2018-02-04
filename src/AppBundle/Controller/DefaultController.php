<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function showIndex()
    {
        $slogan = "Aktualna pogoda dla Warszawy";
        $second_slogan = "na dzień ";
        return $this->render("default/index.html.twig", [
            "main_slogan"=>$slogan,
            "second_slogan"=>$second_slogan
        ]);
    }


}