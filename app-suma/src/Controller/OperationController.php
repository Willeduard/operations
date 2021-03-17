<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Operacion;
use Doctrine\ORM\EntityManagerInterface;
class OperationController extends AbstractController
{
    /**
     * @Route("/operation", name="operation")
     */
    public function index(): Response
    {
        return $this->render('operation/index.html.twig', [
            'controller_name' => 'OperationController',
        ]);
    }

    /**
     * @Route("/recibir",name="recibir")
     */
    public function recibir($request): Response
    {
        //var_dump($_GET);
        if($request->isXmlHttpRequest())
        {
            $number1 = $request->request->get('number1');
            $number2 = $request->request->get('number2');
            $result = intval($number1)+intval($number2);

            $db = $this->getDoctrine()->getManager();
            $entityManager = $this->getDoctrine()->getManager();
            $operation = new Operacion();
            $operation->setNumber1($number1);
            $operation->setNumber2($number2);
            $operation->setResult($result);

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($operation);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
            
            //retorno
            return new Response(json_encode(array("respuesta"=>$result, "mensaje"=>"operaciòn exitosa")));
        }
       
    }

}
