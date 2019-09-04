<?php
/**
 * Craft Hash plugin for Craft CMS 3.x
 * @link      https://glue.be
 * @copyright Copyright (c) 2019 Glue Agency
 */

namespace gluecrafthash\crafthash;

use gluecrafthash\crafthash\twigextensions\CraftHashTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class CraftHash
 *
 * @author    Glue Agency
 * @package   CraftHash
 * @since     1.0.0
 *
 */
class CraftHash extends Plugin
{
    public static $plugin;
    public $schemaVersion = '1.0.0';

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new CraftHashTwigExtension());

        Craft::info(
            Craft::t(
                'craft-hash',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}
