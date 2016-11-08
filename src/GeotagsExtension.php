<?php

/**
 * Created by PhpStorm.
 * User: victor
 * Date: 6/11/16
 * Time: 06:20 PM
 */

namespace Bolt\Extension\ChronoLabs\Geotags;

use Bolt\Asset\Snippet\Snippet;
use Bolt\Asset\Target;
use Bolt\Controller\Zone;
use Bolt\Extension\ChronoLabs\Geotags\Provider\GeotagsProvider;
use Bolt\Extension\SimpleExtension;
use Bolt\Menu\MenuEntry;
use Bolt\Translation\Translator;

class GeotagsExtension extends SimpleExtension
{

    /**
     * @return array
     */
    protected function getDefaultConfig()
    {
        return [
            'countrycode' => 'MX',
            'latitude' => '00.0000',
            'longitude' => '00.0000',
            'ort' => 'City name',
            'regionalcode' => 'DIF'
        ];
    }

    /**
     * @return array
     */
    public function getServiceProviders()
    {
        return [
            $this,
            new GeotagsProvider($this->getConfig(), $this->getBaseDirectory())
        ];
    }

    /**
     * @return array
     */
    protected function registerAssets()
    {
        $app = $this->getContainer();
        $tagCode = (new Snippet())
            ->setZone(Zone::FRONTEND)
            ->setLocation(Target::END_OF_HEAD)
            ->setCallback([$app['gt.snippet.gt'], "insertTag"]);
        $assets = [ $tagCode ];
        return $assets;
    }

    /**
     * @return array
     */
    protected function registerTwigPaths()
    {
        return ['templates'];
    }
}
