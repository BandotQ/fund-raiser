<?php

/**
 * @Entity @Table(name="fundRaiser")
 */
class fundRaiser_model
{

    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string", length=50)
     * @var string
     */
    protected $title;

    /**
     * @Column(type="integer", nullable=true)
     * @var int
     */
    protected $avatarId;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $createdBy;

    /**
     * @Column(type="float")
     * @var float
     */
    protected $targetAmount;

    /**
     * @Column(type="float", options={"default" : 0})
     * @var float
     */
    protected $collectedAmount = 0;

    /**
     * @Column(type="string", length=50)
     * @var string
     */
    protected $reference;

    /**
     * @Column(type="string", length=300)
     * @var string
     */
    protected $fundraiserLink;

    /**
     * @Column(type="boolean")
     * @var bool
     */
    protected $allowPledge;

    /**
     * @Column(type="string", length=300)
     * @var string
     */
    protected $description;

    /**
     * @Column(type="string", length=10, options={"default" : "open"})
     * @var string
     */
    protected $status = 'open';

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $dateDue;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAvatarId()
    {
        return $this->avatarId;
    }

    /**
     * @param mixed $avatarId
     */
    public function setAvatarId($avatarId)
    {
        $this->avatarId = $avatarId;
    }

    /**
     * @return int
     */
    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }

    /**
     * @param int $createdBy
     */
    public function setCreatedBy(int $createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return float
     */
    public function getTargetAmount()
    {
        return $this->targetAmount;
    }

    /**
     * @param float $targetAmount
     */
    public function setTargetAmount($targetAmount)
    {
        $this->targetAmount = $targetAmount;
    }

    /**
     * @return float
     */
    public function getCollectedAmount()
    {
        return $this->collectedAmount;
    }

    /**
     * @param float $collectedAmount
     */
    public function setCollectedAmount($collectedAmount)
    {
        $this->collectedAmount = $collectedAmount;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getFundraiserLink()
    {
        return $this->fundraiserLink;
    }

    /**
     * @param string $fundraiserLink
     */
    public function setFundraiserLink($fundraiserLink)
    {
        $this->fundraiserLink = $fundraiserLink;
    }

    /**
     * @return boolean
     */
    public function getAllowPledge()
    {
        return $this->allowPledge;
    }

    /**
     * @param boolena $allowPledge
     */
    public function setAllowPledge($allowPledge)
    {
        $this->allowPledge = $allowPledge;
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
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * @param int $dateDue
     */
    public function setDateDue($dateDue)
    {
        $this->dateDue = $dateDue;
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
}
