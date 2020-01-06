<?php

/**
 * @Entity @Table(name="fundRaiserCollections")
 */
class fundRaiserCollections_model
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
    protected $transactionId;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $fundraiserId;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $userId;

    /**
     * @Column(type="float")
     * @var float
     */
    protected $amount;

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
     * @Column(type="integer")
     * @var int
     */
    protected $dateCreated;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $dateUpdated;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $dateDeleted = 0;

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
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * @param int $transactionId
     */
    public function setTransactionId(int $transactionId)
    {
        $this->transactionId = $transactionId;
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
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * @return int
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param int $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return int
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * @param int $dateUpdated
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @return int
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    /**
     * @param int $dateDeleted
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted;
    }
}