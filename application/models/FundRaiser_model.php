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
    protected $photoURL;

    /**
     * @Column(type="integer")
     * @var int
     */
    protected $creatyByUserId;

    /**
     * @Column(type="float")
     * @var float
     */
    protected $targetAmount;

    /**
     * @Column(type="string", length=300)
     * @var string
     */
    protected $fundRaiserLink;

    /**
     * @Column(type="boolean")
     * @var bool
     */
    protected $allowPledges;

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
    public function getPhotoURL()
    {
        return $this->photoURL;
    }

    /**
     * @param mixed $photoURL
     */
    public function setPhotoURL($photoURL)
    {
        $this->photoURL = $photoURL;
    }

    /**
     * @return int
     */
    public function getCreatyByUserId(): int
    {
        return $this->createdBy;
    }

    /**
     * @param int $createdBy
     */
    public function setCreatyByUserId(int $createdBy)
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
    public function getAllowPledges()
    {
        return $this->allowPledges;
    }

    /**
     * @param boolena $allowPledge
     */
    public function setAllowPledge($allowPledges)
    {
        $this->allowPledges = $allowPledges;
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
