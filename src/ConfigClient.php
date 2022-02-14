<?php
/**
 * Contains EN\Portal\ConfigClient
 *
 * @package EN\Portal
 */

namespace EN\Portal;

use EN\PortalCore\Config\AbstractConfigClient;

/**
 * @package EN\Portal
 */
class ConfigClient extends AbstractConfigClient
{
    /**
     * {@inheritdoc}
     */
    public function __construct($rootPath, $manifestFile = '/opt/portal/manifest.json')
    {
        parent::__construct($rootPath, $manifestFile);

        $this['tjLessOverhaul'] = true;

        $this['frontend']['returnlogreg'] = '/';
        $this['frontend']['scripts']['css'][] = '/css/base.css';

        // Insert '/js/config.js' before '/bundles/frontend/js/config.php'
        array_splice(
            $this['frontend']['scripts']['js'],
            array_search('/bundles/frontend/js/config.php', $this['frontend']['scripts']['js']),
            0,
            '/js/config.js'
        );

        $this['frontend']['EnableInstantRewardUserInput'] = true;
    }

    /**
     * {@inheritdoc}
     */
    public static function getClientAlias()
    {
        return 'marchmania';
    }
}
