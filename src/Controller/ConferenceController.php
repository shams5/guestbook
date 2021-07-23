<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="conference")
     */
    public function index(): Response
    {
        // return $this->render('conference/index.html.twig', [
        //     'controller_name' => 'ConferenceController',
        // ]);
        
        return new Response(<<<EOF
            '<html>
                <body>
                    <img src="/img/construction.gif" style="display:block; margin:auto; margin-top: 15%"/>
                </body>
            </html>
        EOF);
    }
}
