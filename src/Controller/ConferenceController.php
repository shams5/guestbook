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
     */
    public function index(Request $request): Response
    {
        // return $this->render('conference/index.html.twig', [
        //     'controller_name' => 'ConferenceController',
        // ]);
        
        // To generate a new response
        //     return new Response(
        //         // EOF => End of file
        //         <<<EOF
        //         <html>
        //             <body>
        //                 <img src="/img/construction.gif" style="display:block; margin:auto; margin-top: 15%"/>
        //             </body>
        //         </html>
        //     EOF
        // );

        // To demonstrate how a response can leverage information from the request
            $greet = '';
            if($name = $request->query->get('hello')){
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
