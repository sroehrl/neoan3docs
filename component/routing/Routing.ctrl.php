<?php
/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

class Routing extends Unicore
{
    function init()
    {
        $this->uni('docs')->hook('main','routing')->output();
    }

}