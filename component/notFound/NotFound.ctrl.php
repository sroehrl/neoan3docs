<?php
/* Generated by neoan3-cli */

namespace Neoan3\Components;

use Neoan3\Core\Unicore;

class NotFound extends Unicore
{
    /**
     * Constructor
     */
    function init()
    {
        $this->uni('docs')->hook('main', 'notFound')->output();
    }


}
