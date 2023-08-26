<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Annotation\Method;


class ApiController {       

    #[Route('/api/hello', name: 'api_hello')]
    #[Method('GET')]
    public function hello(): JsonResponse
    {
        return new JsonResponse(['message' => 'Hello from Symfony API!']);
    }
}

