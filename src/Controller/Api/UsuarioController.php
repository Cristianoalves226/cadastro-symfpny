<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/",name="web_usuario_")
 */
class UsuarioController
{
    /**
     *@Route("/lista",methods={"GET"},name="lista") 
     */
    public function lista(): JsonResponse
    {
        return new JsonResponse("Implementar lista na Api", 404);
    }

    /**
     *@Route("/cadastra",methods={"POST"},name="cadastra") 
     */
    public function cadastra(): JsonResponse
    {
        return new JsonResponse("Implementar cadastro  na Api", 404);
    }
}