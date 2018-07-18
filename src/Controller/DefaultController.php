<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19.07.2018
 * Time: 0:44
 */

namespace Controller;

use Doctrine\DBAL\Connection;
use Entity\News;

class DefaultController
{
    private $db;

    private $twig;

    public function __construct(Connection $db, \Twig_Environment $twig)
    {
        $this->db   = $db;
        $this->twig = $twig;
    }

    public function mainAction()
    {
        /** @var Connection $db */
        $newsList = $this->db
            ->executeQuery(
                'SELECT * FROM news WHERE status IN (:statuses)',
                ['statuses' => News::STATUS_PUBLISHED]
            )
            ->fetchAll();
        if (!is_array($newsList)) {
            $newsList = [];
        }
       $newsList = [];
        try {
            return $this->twig->render('index.html.twig', ['newsList' => $newsList]);
        } catch (\Throwable $e) {
            var_dump($e->getMessage());
        }
    }

    public function showNewsAction($id)
    {
        var_dump($id);
    }
}