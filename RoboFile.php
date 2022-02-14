<?php
/**
 * Contains RoboFile
 *
 * @package yaamava-mm
 */

/**
 * @author Joshua Copeland <josh@engagednation.com>
 * @author Matthew Kosolofski <matthew.kosolofski@engagednation.com>
 * @package yaamava-mm
 */
class RoboFile extends \Robo\Tasks
{
    // Include tasks.
    use \EN\PortalCore\Session\Robofile\Command\SessionPurge;
    use \EN\PortalCore\Database\Robofile\Command\MigrateDatabase;
    use \EN\PortalCore\Config\Robofile\InitConfig;
    use \EN\PortalCore\Assetic\Config\Robofile\Assetic;

    /**
     * RoboFile constructor.
     */
    public function __construct()
    {
        $this->initConfig(new \EN\Portal\ConfigClient(__DIR__));
    }

    /**
     * Empties temp and log directories.
     */
    public function clean()
    {
        $this->taskCleanDir([
            'www/logs/queries',
            'www/logs/system',
            'www/tmp'
        ])->run();
    }
}
