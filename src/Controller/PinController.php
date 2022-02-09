<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinController extends AbstractController
{
    /**
     * @Route("/pin", name="pin", methods="GET")
     */
    public function index(): Response
    {
        return $this->render("pins/index.html.twig",[]);
    }

     /**
     * @Route("/pin/create", name="pincreate", methods={"GET", "POST"})
     */
    public function Created(): Response
    {
        return $this->render("pins/create.html.twig",[]);
    }

     /**
     * @Route("/pin", name="pinupdate")
     */
    public function update(): Response
    {
        return $this->render("pins/index.html.twig",[]);
    }

     /**
     * @Route("/pin", name="pindelete")
     */
    public function delete(): Response
    {
        return $this->render("pins/index.html.twig",[]);
    }
}
