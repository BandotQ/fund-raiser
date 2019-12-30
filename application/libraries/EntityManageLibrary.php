<?php

use GuzzleHttp\Client;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Dotenv\Dotenv;

/**
 * 
 */
class EntityManageLibrary
{
	
	function __construct()
	{
		$dotenv = new Dotenv();
		$dotenv->load('././.env');
	}

	/**
     * Get database configurations
     * @return array
     */
	public function getDbConfig()
	{
		return array(
		    'driver'   => 'pdo_mysql',
		    'user'     => $_ENV['DB_USER'],
		    'password' => $_ENV['DB_PASS'],
		    'dbname'   => $_ENV['DB_NAME']
		);
	}

	/**
     * Get environment
     * @return string
     */
	public function getEnv()
	{
		return ($_ENV['STAGE'] == 'production') ? false : true;
	}

	/**
     * Generate entity manager
     * @return object
     */
	public function createEntityManager()
	{		
		$paths = array("././application/models");
		$dbParams = $this->getDbConfig();
		$isDevMode = $this->getEnv();
		$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
		return EntityManager::create($dbParams, $config);
	}
}