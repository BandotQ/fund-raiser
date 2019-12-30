<?php

// namespace Banq\Models;

/**
 * @Entity @Table(name="avatars")
 */
class avatar
{

    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     */
    protected $id;

    /**
     * @Column(type="text", nullable=true)
     * @var string
     */
    private $url;

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
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getDateCreated(): int
    {
        return $this->dateCreated;
    }

    /**
     * @param int $dateCreated
     */
    public function setDateCreated(int $dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return int
     */
    public function getDateUpdated(): int
    {
        return $this->dateUpdated;
    }

    /**
     * @param int $dateUpdated
     */
    public function setDateUpdated(int $dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @return int
     */
    public function getDateDeleted(): int
    {
        return $this->dateDeleted;
    }

    /**
     * @param int $dateDeleted
     */
    public function setDateDeleted(int $dateDeleted)
    {
        $this->dateDeleted = $dateDeleted;
    }
}
