<?php

/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

/**
 * Class routing
 * @package Neoan3\Components
 */

class RoutingWeb extends Unicore{
    /**
     * Route: routing
     */
    function init(): void
    {
        $this
            ->uni('Docs')
            ->hook('main', 'routingWeb')
            ->output();
    }
}
