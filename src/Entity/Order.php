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
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marketplace;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $order_id;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $order_mrid;

    /**
     * @ORM\Column(type="string", length=19)
     */
    private $order_refid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $order_external_id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $order_purchase_date;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $order_purchase_heure;

    /**
     * @ORM\Column(type="float")
     */
    private $order_amount;

    /**
     * @ORM\Column(type="integer")
     */
    private $order_tax;

    /**
     * @ORM\Column(type="float")
     */
    private $order_shipping;

    /**
     * @ORM\Column(type="float")
     */
    private $order_commission;

    /**
     * @ORM\Column(type="integer")
     */
    private $order_processing_fee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $order_currency;

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
        return $this->order_id;
    }

    public function setOrderId(int $order_id): self
    {
        $this->order_id = $order_id;

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
        return $this->order_external_id;
    }

    public function setOrderExternalId(?int $order_external_id): self
    {
        $this->order_external_id = $order_external_id;

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
