<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/application/libraries/services/EntityManageService.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

	$emManager = new EntityManageService;
	$entityManager = $emManager->createEntityManager();

	return ConsoleRunner::createHelperSet($entityManager);
