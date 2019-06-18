<?php

namespace App\Command;

use App\Entity\Order;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;

class OrdersFetchOrdersCommand extends Command
{
    protected static $defaultName = 'orders:fetch-orders';

    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->container = $container;
    }

    protected function configure()
    {
        $this->setDescription('Fetch the list of commands and insert them in the database');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $path = $io->ask('Path of the XML file you want to import?');

        // If the user enters a path
        if ($path) {
            $io->success(sprintf('The location of the XML file that you want to import is: %s', $path));

            // We check if the file exists
            if (file_exists($path)) {
                $em = $this->container->get('doctrine')->getManager();

                // We load the xml file
                $orders_xml = simplexml_load_file($path);
                foreach($orders_xml->orders->order as $order) {
                    $orderEntity = $this->makeOrder($order);
                    $em->persist($orderEntity);
                }
                $em->flush();

                $amount = $orders_xml->orders_count->count_total;
                $io->success(sprintf('Process executed successfully! %s entries added to the database', $amount));
            } else {
                $io->error('The path of the XML file you are trying to import is invalid. Please try again.');
            }
        } else {
            $io->error('The path of the XML file you are trying to import is invalid. Please try again.');
            return;
        }
    }

    /**
     * @param \SimpleXMLElement $order
     *
     * @return Order
     */
    private function makeOrder(\SimpleXMLElement $order)
    {
        $orderEntity = new Order();
        $orderEntity->setMarketplace((string) $order->marketplace);
        $orderEntity->setOrderId((string) $order->order_id);
        $orderEntity->setOrderPurchaseDate((string) $order->order_purchase_date);
        $orderEntity->setOrderPurchaseHeure((string) $order->order_purchase_heure);
        $orderEntity->setOrderAmount((float) $order->order_amount);
        $orderEntity->setOrderCurrency((string) $order->order_currency);

        return $orderEntity;
    }
}
