<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 * @ORM\Table(name="meero_orders.order")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marketplace;

    /**
     * @ORM\Column(type="string", length=19, nullable=true, name="order_id")
     */
    private $orderId;

    /**
     * @ORM\Column(type="string", length=10, nullable=true, name="order_purchase_date")
     */
    private $orderPurchaseDate;

    /**
     * @ORM\Column(type="string", length=8, nullable=true, name="order_purchase_heure")
     */
    private $orderPurchaseHeure;

    /**
     * @ORM\Column(type="float", nullable=true, name="order_amount")
     */
    private $orderAmount;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="order_currency")
     */
    private $orderCurrency;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarketplace(): ?string
    {
        return $this->marketplace;
    }

    public function setMarketplace(string $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderPurchaseDate(): ?string
    {
        return $this->orderPurchaseDate;
    }

    public function setOrderPurchaseDate(string $orderPurchaseDate): self
    {
        $this->orderPurchaseDate = $orderPurchaseDate;

        return $this;
    }

    public function getOrderPurchaseHeure(): ?string
    {
        return $this->orderPurchaseHeure;
    }

    public function setOrderPurchaseHeure(string $orderPurchaseHeure): self
    {
        $this->orderPurchaseHeure = $orderPurchaseHeure;

        return $this;
    }

    public function getOrderAmount(): ?float
    {
        return $this->orderAmount;
    }

    public function setOrderAmount(float $orderAmount): self
    {
        $this->orderAmount = $orderAmount;

        return $this;
    }

    public function getOrderCurrency(): ?string
    {
        return $this->orderCurrency;
    }

    public function setOrderCurrency(string $orderCurrency): self
    {
        $this->orderCurrency = $orderCurrency;

        return $this;
    }
}
