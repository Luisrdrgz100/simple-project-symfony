<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Factura;
use AppBundle\Forms\FacturaType;
use Symfony\Component\HttpFoundation\RedirectResponse;




/**
* @Route("/facturas")
*/

class FacturaController extends Controller
{
    /**
     * @Route("/new", name="new")
     */
    public function newFacturaAction(Request $request)
    {
        $factura = new Factura();
       
        $form = $this-> createForm (FacturaType::class, $factura);
        
        $form -> handleRequest ($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $factura = $form->getData();
        
            $save = $this-> getDoctrine() -> getManager();
            $save -> persist($factura);
            $save -> flush();

            return $this->redirectToRoute('facturas');
        }
        return $this->render('factura/newFactura.html.twig', array ('form' => $form -> createView()));
    }
}