<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    /**
     * @var OrderRepository
     */
    private $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * @Route("/orders", name="order")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        $orders = $this->orderRepository->findAll();

        return $this->render('order/index.html.twig', compact('orders'));
    }

    /**
     * @Route("/orders/search", name="order-search")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function search(Request $request)
    {
        // We get the form parameters
        $query = $request->query->get('q');

        // We query the database with the given search parameters
        $orders = $this->orderRepository->search($query);

        return $this->render('order/search.html.twig', compact('orders', 'query'));
    }

    /**
     * @Route("/orders/{id}", name="order-show")
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show($id)
    {
        $order = $this->orderRepository->find($id);

        return $this->render('order/show.html.twig', compact('order'));
    }
}
