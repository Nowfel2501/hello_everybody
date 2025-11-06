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
            echo "do something";
        }

        return new JsonResponse(['hello' => "world"]);
    }
}
