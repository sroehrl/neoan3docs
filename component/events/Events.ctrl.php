<?php

/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

/**
 * Class events
 * @package Neoan3\Components
 */

class Events extends Unicore{
    /**
     * Route: events
     */
    function init(): void
    {
        $this
            ->uni('Docs')
            ->hook('main', 'events')
            ->output();
    }
}