<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Doctrine\DBAL\Driver\PDOConnection;

$console = new Application('My Silex Application', 'n/a');
$console->getDefinition()->addOption(new InputOption('--env', '-e', InputOption::VALUE_REQUIRED,
    'The Environment name.', 'dev'));
$console->setDispatcher($app['dispatcher']);
$console
    ->register('schema:prepare')
    ->setDefinition([

    ])
    ->setDescription('prepare chema')
    ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
        /** @var PDOConnection $db */
        $db = $app['db'];
        $db->exec('
            CREATE TABLE news (
                id INT NOT NULL AUTO_INCREMENT,
                title VARCHAR(255) NOT NULL,
                content TEXT NULL,
                status SMALLINT NOT NULL DEFAULT 0,
                PRIMARY KEY (id))
                ENGINE = InnoDB
                DEFAULT CHARACTER SET = utf8'
        );

        $db->exec('
            CREATE TABLE category (
                id INT NOT NULL AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                PRIMARY KEY (id))
                ENGINE = InnoDB
                DEFAULT CHARACTER SET = utf8'
        );

        $db->exec('
            CREATE TABLE nens_cat_map (
                newsId INT NOT NULL,
                categoryId INT NOT NULL,
                PRIMARY KEY (newsId, categoryId))
                ENGINE = InnoDB
                DEFAULT CHARACTER SET = utf8'
        );
    });

return $console;
