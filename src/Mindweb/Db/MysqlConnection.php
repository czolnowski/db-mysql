<?php
namespace Mindweb\Db;

use Doctrine\DBAL;
use Mindweb\Db;
use Mindweb\Config;

class MysqlConnection extends Db\Connection
{
    public function __construct(Config\Configuration $configuration)
    {
        parent::__construct(
            'mysql',
            DBAL\DriverManager::getConnection(
                $configuration->get('db.mysql'),
                new DBAL\Configuration()
            )
        );
    }
} 