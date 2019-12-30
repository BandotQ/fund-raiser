<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/application/libraries/EntityManageLibrary.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;

	$emManager = new EntityManageLibrary;
	$entityManager = $emManager->createEntityManager();

	return ConsoleRunner::createHelperSet($entityManager);
