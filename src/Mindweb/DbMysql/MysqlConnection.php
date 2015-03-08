<?php
namespace Mindweb\DbMysql;

use Doctrine\DBAL;
use Mindweb\Db;
use Mindweb\Config;

class MysqlConnection extends Db\Connection
{
    /**
     * @var Config\Configuration
     */
    private $configuration;

    /**
     * @var string
     */
    private $configurationKey;

    public function __construct(Config\Configuration $configuration, $configurationKey)
    {
        if (!$configurationKey) {
            throw new Exception\MysqlConfigurationAdapterIsNotDefinedException();
        }

        $this->configuration = $configuration;
        $this->configurationKey = $configurationKey;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'mysql';
    }

    protected function initialize()
    {
        return DBAL\DriverManager::getConnection(
            $this->configuration->get($this->configurationKey),
            new DBAL\Configuration()
        );
    }
}