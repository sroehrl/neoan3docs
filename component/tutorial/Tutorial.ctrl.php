<?php

/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

/**
 * Class Tutorial
 * @package Neoan3\Components
 */

class Tutorial extends Unicore{
    private $values;
    /**
     * Route: tutorial
     */
    function init(): void
    {

        $this
            ->uni('Docs')
            ->callback($this, 'fetchContent')
            ->hook('main', 'tutorial', $this->values)
            ->output();
    }
    function fetchContent($uni)
    {
        $content = sub(1) ? sub(1) : null;
        $hashtags = [];
        $tutorials = [];
        $contents = [
            'installation' => [
                'video'=> '2Iqn_HxBn_o',
                'name' => 'neoan3 basics: Installation',
                'description' => 'If you find yourself having issues, it is usually related to either PATH variables (e.g. composer/bin is not within your PATH) or permission related constraints. ',
                'github' => false,
                'type' => 'tutorial'
            ],
            'credentials' => [
                'video'=> 'CM1uQ59xrBo',
                'name' => 'neoan3 basics: Credential / environment variable handling',
                'github' => false,
                'description' => '',
                'type' => 'tutorial'
            ],
            'models' => [
                'video'=> 'mUNqgZStXJY',
                'name' => 'neoan3 basics: Models and Database transactions',
                'github' => false,
                'description' => '',
                'type' => 'tutorial'
            ],
            'routes_auth' => [
                'video'=> '4h1JMpAx0cE',
                'name' => 'neoan3 basics: RESTful API routes, JWT and authorization',
                'github' => false,
                'description' => '',
                'type' => 'tutorial'
            ],
            'routing' => [
                'video'=> 'RfcxGPp6dWM',
                'name' => 'neoan3 routing',
                'github' => false,
                'description' => 'How routing works in neoan3',
                'type' => 'hashtag'
            ],
            'scraping' => [
                'video'=> '1JF5AVxnV_E',
                'name' => 'neoan3 SSR page with web-scraped content',
                'github' => false,
                'description' => 'Sometimes you don\'t have the luxury of an API. Let\'s play around with neoan3 3.1 and symfony\'s crawler to see what can be done about it.',
                'type' => 'tutorial'
            ]
        ];
        foreach ($contents as $route =>  $tutorial){
            switch ($tutorial['type']){
                case 'hashtag':
                    $hashtags[$route] = $tutorial;
                    break;
                default:
                    $tutorials[$route] = $tutorial;
            }
        }

        $reader = $contents[$content] ?? $contents[0];
        $reader['tutorials'] = $tutorials;
        $reader['hashtags'] = $hashtags;
        $this->values = $reader;
    }
}