<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\OrderRepository")
 */
class Order
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", name="idFlux")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, name="marketplace")
     */
    private $marketplace;

    /**
     * @ORM\Column(type="string", length=19, name="order_id")
     */
    private $orderId;

    /**
    -     * @ORM\Column(type="string", length=19, name="order_mrid")
    -     */
    private $orderMrid;

    /**
     * @ORM\Column(type="string", length=19, name="order_refid")
     */
    private $orderRefid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="order_external_id")
     */
    private $orderExternalId;

    /**
     * @ORM\Column(type="string", length=10, name="order_purchase_date")
     */
    private $orderPurchaseDate;

    /**
     * @ORM\Column(type="string", length=8, name="order_purchase_heure")
     */
    private $orderPurchaseHeure;

    /**
     * @ORM\Column(type="float", name="order_amount")
     */
    private $orderAmount;

    /**
     * @ORM\Column(type="integer", name="order_tax")
     */
    private $orderTax;

    /**
     * @ORM\Column(type="float", name="order_shipping")
     */
    private $orderShipping;

    /**
     * @ORM\Column(type="float", name="order_commission")
     */
    private $orderCommission;

    /**
     * @ORM\Column(type="integer", name="order_processing_fee")
     */
    private $orderProcessingFee;

    /**
     * @ORM\Column(type="string", length=255, name="order_currency_currency")
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

    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getOrderMrid(): ?string
    {
        return $this->order_mrid;
    }

    public function setOrderMrid(string $order_mrid): self
    {
        $this->order_mrid = $order_mrid;

        return $this;
    }

    public function getOrderRefid(): ?int
    {
        return $this->order_refid;
    }

    public function setOrderRefid(int $order_refid): self
    {
        $this->order_refid = $order_refid;

        return $this;
    }

    public function getOrderExternalId(): ?int
    {
        return $this->orderExternalId;
    }

    public function setOrderExternalId(?int $orderExternalId): self
    {
        $this->orderExternalId = $orderExternalId;

        return $this;
    }

    public function getOrderPurchaseDate(): ?string
    {
        return $this->order_purchase_date;
    }

    public function setOrderPurchaseDate(string $order_purchase_date): self
    {
        $this->order_purchase_date = $order_purchase_date;

        return $this;
    }

    public function getOrderPurchaseHeure(): ?string
    {
        return $this->order_purchase_heure;
    }

    public function setOrderPurchaseHeure(string $order_purchase_heure): self
    {
        $this->order_purchase_heure = $order_purchase_heure;

        return $this;
    }

    public function getOrderAmount(): ?float
    {
        return $this->order_amount;
    }

    public function setOrderAmount(float $order_amount): self
    {
        $this->order_amount = $order_amount;

        return $this;
    }

    public function getOrderTax(): ?float
    {
        return $this->order_tax;
    }

    public function setOrderTax(float $order_tax): self
    {
        $this->order_tax = $order_tax;

        return $this;
    }

    public function getOrderShipping(): ?float
    {
        return $this->order_shipping;
    }

    public function setOrderShipping(float $order_shipping): self
    {
        $this->order_shipping = $order_shipping;

        return $this;
    }

    public function getOrderCommission(): ?float
    {
        return $this->order_commission;
    }

    public function setOrderCommission(float $order_commission): self
    {
        $this->order_commission = $order_commission;

        return $this;
    }

    public function getOrderProcessingFee(): ?int
    {
        return $this->order_processing_fee;
    }

    public function setOrderProcessingFee(int $order_processing_fee): self
    {
        $this->order_processing_fee = $order_processing_fee;

        return $this;
    }

    public function getOrderCurrency(): ?string
    {
        return $this->order_currency;
    }

    public function setOrderCurrency(string $order_currency): self
    {
        $this->order_currency = $order_currency;

        return $this;
    }
}
