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
     * @Route("/clientes/{pag}", name="clientes")
     */
    public function clientesAction(Request $request, $pag = 1)
    {
        $clienteRepository = $this->getDoctrine()->getRepository(Cliente::class);
        //$clientes = $clienteRepository -> findAll();
        $query = $clienteRepository->createQueryBuilder('c')
            ->setFirstResult(10 * ($pag - 1))
            ->setMaxResults(10)
            ->getQuery();
        $clientes = $query->getResult();
        return $this->render('default/clientes.html.twig', array('clientes' => $clientes, 'pag' => $pag));
    }

    /**
     * @Route("/facturas/{pag}", name="facturas")
     */
    public function facturasAction(Request $request, $pag = 1)
    {
        $facturaRepository = $this->getDoctrine()->getRepository(Factura::class);
        // $facturas = $facturaRepository -> findAll();
        $query = $facturaRepository->createQueryBuilder('c')
            ->setFirstResult(10 * ($pag - 1))
            ->setMaxResults(10)
            ->getQuery();
        $facturas = $query->getResult();
        return $this->render('default/facturas.html.twig', array('facturas' => $facturas, 'pag' => $pag));
    }
}
