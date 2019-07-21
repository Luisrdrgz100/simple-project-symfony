<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Cliente;
use AppBundle\Forms\ClienteType;
use Symfony\Component\HttpFoundation\RedirectResponse;




/**
* @Route("/clientes")
*/

class ClienteController extends Controller
{
    /**
     * @Route("/new", name="new")
     */
    public function newClienteAction(Request $request)
    {
        $cliente = new Cliente();
       
        $form = $this-> createForm (ClienteType::class, $cliente);
        
        $form -> handleRequest ($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $cliente = $form->getData();
        
            $save = $this-> getDoctrine() -> getManager();
            $save -> persist($cliente);
            $save -> flush();

            return $this->redirectToRoute('clientes');
        }
        return $this->render('cliente/newCliente.html.twig', array ('form' => $form -> createView()));
    }
}