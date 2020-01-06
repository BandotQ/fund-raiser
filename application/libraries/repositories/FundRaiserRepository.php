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

		$this->queryBuilder = $this->emManager->createQueryBuilder();
	}

	/**
     * Insert fundraiser data
     * @param array $data
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
		return $this->fundraiser->getId();
	}

	/**
     * Get fundraiser data
     * @param int $id
     * @return array
     */
	public function getFundRaiser($id)
	{
		$this->queryBuilder->select('fr')
			->from('fundRaiser_model', 'fr')
			->where('fr.id = :id')
			->setParameter('id', $id);

		$stm = $this->queryBuilder->getQuery();
		return $data = $stm->getResult();
	}

	/**
     * Update fundraiser data
     * @param array $data
     * @return array
     */
	public function updateFundRaiser($data, $id)
	{
		$this->queryBuilder->update('fundRaiser_model', 'fr')
			->set('fr.title', ':title')
			->set('fr.targetAmount', ':targetAmount')
			->set('fr.allowPledge', ':allowPledge')
			->set('fr.description', ':description')
			->set('fr.status', ':status')
			->set('fr.dateDue', ':dateDue')
			->set('fr.dateUpdated', ':dateUpdated')
			->where('fr.id = :id')
			->setParameter('title', $data['title'])
			->setParameter('targetAmount', $data['targetAmount'])
			->setParameter('allowPledge', $data['allowPledge'])
			->setParameter('description', $data['description'])
			->setParameter('status', $data['status'])
			->setParameter('dateDue', $data['dateDue'])
			->setParameter('dateUpdated', time())
			->setParameter('id', $id);

		$stm = $this->queryBuilder->getQuery();
		return $data = $stm->getResult();
	}
}