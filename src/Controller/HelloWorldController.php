<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HelloWorldController extends AbstractController
{
    public function __invoke(Request $request)
    {
        if ($request->getMethod() === 'POST') {
            echo "say hello to everybody";
        } else {
            echo "dont wanna say hello". $_GET['surname'];
        }

        return new JsonResponse(['hello' => "world"]);
    }
}
