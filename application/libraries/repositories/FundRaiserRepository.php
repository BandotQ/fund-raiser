<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/**
 * 
 */
class FundRaiserRepository
{
	public function __construct()
	{
		$this->ci =& get_instance();

		$this->ci->load->model('fundraiser_model');
		$this->fundraiser = new fundRaiser_model;

		$this->ci->load->library('services/EntityManageService');
		$this->entityManager = new EntityManageService();
		$this->emManager = $this->entityManager->createEntityManager();
	}

	/**
     * Insert fundraiser data
     * @param array
     * @return array
     */
	public function addFundRaiser($data)
	{
		$this->fundraiser->setTitle($data['title']); 
		$this->fundraiser->setAvatarId($data['avatarId']);
		$this->fundraiser->setCreatedBy($data['createdBy']);
		$this->fundraiser->setTargetAmount($data['targetAmount']);
		$this->fundraiser->setReference($data['reference']);
		$this->fundraiser->setFundraiserLink($data['fundraiserLink']);
		$this->fundraiser->setAllowPledge($data['allowPledge']);
		$this->fundraiser->setDescription($data['description']);
		$this->fundraiser->setDateDue($data['dateDue']);
		$this->fundraiser->setDateCreated(time());
		$this->fundraiser->setDateUpdated(time());

		$this->emManager->persist($this->fundraiser);
		$this->emManager->flush();
	}
}