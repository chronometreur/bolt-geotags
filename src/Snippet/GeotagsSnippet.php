<?php

namespace Bolt\Extension\ChronoLabs\Geotags\Snippet;

use Bolt\Extension\ChronoLabs\Geotags\Config\Config;
use Symfony\Component\HttpFoundation\RequestStack;
use Twig_Environment;

/**
 * Class GeotagsSnippet
 * @package Bolt\Extension\ChronoLabs\Geotags\Snippet
 * Snippet class to insert geotags on every page
 */
class GeotagsSnippet
{
    /** @var Twig_Environment $view */
    protected $view;

    /** @var RequestStack $request */
    protected $request;

    /** @var Config $config */
    protected $config;

    public function __construct(
        Twig_Environment $view,
        RequestStack $request,
        Config $config
    )
    {
        $this->view = $view;
        $this->request = $request;
        $this->config = $config;
    }

    /**
     * @return string
     * Code snippet to display on every page geo tags
     */
    public function insertTag()
    {
        $data = [
            'countrycode' => $this->config->getCountrycode(),
            'latitude' => $this->config->getLatitude(),
            'longitude' => $this->config->getLongitude(),
            'ort' => $this->config->getOrt(),
            'regionalcode' => $this->config->getRegionalcode()
        ];

        return $this->view->render("geotags.twig", $data);
    }
}

