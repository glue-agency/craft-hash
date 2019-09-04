<?php
/**
 * Craft Hash plugin for Craft CMS 3.x
 * @link      https://glue.be
 * @copyright Copyright (c) 2019 Glue Agency
 */

namespace gluecrafthash\crafthash\twigextensions;

use gluecrafthash\crafthash\CraftHash;

use Craft;

/**
 * @author    Glue Agency
 * @package   CraftHash
 * @since     1.0.0
 */
class CraftHashTwigExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
          new \Twig_SimpleFunction('hash', [$this, 'hash']),
      ];
    }

    public function hash($text = null, $algo = "md5")
    {
        if ($text == null) {
            $text = random_int(0, getrandmax());
        }
        $result = hash($algo, $text);
        return $result;
    }
}
