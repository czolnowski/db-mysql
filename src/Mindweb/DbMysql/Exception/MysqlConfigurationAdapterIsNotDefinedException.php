<?php
namespace Mindweb\DbMysql\Exception;

use RuntimeException;

class MysqlConfigurationAdapterIsNotDefinedException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Mysql configuration adapter is not defined!');
    }
} 