<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ConferenceController extends AbstractController
{
    // The main responsibility of a controller is to return an HTTP Response for the request.
    /**
     * @Route("/", name="homepage")
     * @Route("/hello/{name}", name="homepage")
     */
    public function index(string $name=''){
        // made the name part of the URL example: https://localhost:8000/hello/name
        $greet = '';
        if($name){
            $greet = sprintf('<h1> Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(
            <<<EOF
                <html>
                    <body>
                        $greet
                        <img src="/img/construction.gif" style="display:block; margin:auto; margin-top: 15%"/>
                    </body>
                </html>
            EOF
        );
    }
}
