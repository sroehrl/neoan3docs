<?php

/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

/**
 * Class templating
 * @package Neoan3\Components
 */

class Templating extends Unicore{
    /**
     * Route: templating
     */
    function init(): void
    {
        $vars = [
            'headline' => '{{headline}}',
            'content' => '{{content}}'
        ];
        $this
            ->uni('Docs')
            ->hook('main', 'templating', $vars)
            ->output();
    }
}