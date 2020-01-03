<?php

/**
 * @Entity @Table(name="fundRaiserCollections")
 */
class fundRaiserCollections
{

    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @Column(type="integer", nullable=true)
     * @var int
     */
    protected $paymentId;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $fundraiserId;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $collectionFrom;

    /**
     * @Column(type="float")
     * @var float
     */
    protected $amountCollected;

    /**
     * @Column(type="string", length=10)
     * @var string
     */
    protected $status;

    /**
     * @Column(type="string", length=300)
     * @var string
     */
    protected $description;

    /**
     * @Column(type="datetimetz", columnDefinition="TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     * @var datetimetz
     */
    protected $dateCreated;

    /**
     * @Column(type="datetimetz", columnDefinition="TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP")
     * @var datetimetz
     */
    protected $dateUpdated;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPaymentId(): int
    {
        return $this->paymentId;
    }

    /**
     * @param int $paymentId
     */
    public function setPaymentId(int $paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return int
     */
    public function getFundraiserId(): int
    {
        return $this->fundraiserId;
    }

    /**
     * @param int $fundraiserId
     */
    public function setFundraiserId(int $fundraiserId)
    {
        $this->fundraiserId = $fundraiserId;
    }

    /**
     * @return int
     */
    public function getCollectionFrom(): int
    {
        return $this->collectionFrom;
    }

    /**
     * @param int $collectionFrom
     */
    public function setCollectionFrom(int $collectionFrom)
    {
        $this->collectionFrom = $collectionFrom;
    }

    /**
     * @return float
     */
    public function getAmountCollected()
    {
        return $this->amountCollected;
    }

    /**
     * @param float $amountCollected
     */
    public function setAmountCollected($amountCollected)
    {
        $this->amountCollected = $amountCollected;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return datetime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param datetime $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return datetime
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * @param datetime $dateUpdated
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }
}