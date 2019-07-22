<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Cliente;
use AppBundle\Entity\Factura;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }
    /**
     * @Route("/clientes", name="clientes")
     */
    public function clientesAction(Request $request)
    {
        $clienteRepository = $this-> getDoctrine()->getRepository(Cliente::class);
        $clientes = $clienteRepository -> findAll();
        return $this->render('default/clientes.html.twig', array('clientes' => $clientes));
    }
    
    /**
     * @Route("/facturas", name="facturas")
     */
    public function facturasAction(Request $request)
    {
        $facturaRepository = $this-> getDoctrine()->getRepository(Factura::class);
        $facturas = $facturaRepository -> findAll();
        var_dump($facturas);
        return $this->render('default/facturas.html.twig', array('facturas' => $facturas));
    }
}
