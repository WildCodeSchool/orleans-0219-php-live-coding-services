<?php

namespace App\Controller;

use App\Service\BinaryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BinaryController extends AbstractController
{
    /**
     * @Route("/", name="binary")
     */
    public function index(Request $request, BinaryService $binaryService)
    {

        $form = $this->createFormBuilder()->add('binary')->getForm();
        $form->handleRequest($request);

        $binary = "";
        $decimal = 0;

        if ($form->isSubmitted() && $form->isValid()) {
            $binary = $form->getData()['binary'];

            $decimal = $binaryService->converterBinary($binary);
        }

        return $this->render('binary/index.html.twig', [
            'controller_name' => 'BinaryController',
            'form' => $form->createView(),
            'binary' => $binary,
            'decimal' => $decimal
        ]);
    }
}
