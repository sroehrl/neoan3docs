<?php
/* Generated by neoan3-cli */

namespace Neoan3\Frame;

use Neoan3\Apps\Ops;
use Neoan3\Core\Serve;


class Docs extends Serve
{
    private $forcePWA = false;
    function __construct()
    {
        parent::__construct();
        if($_SERVER['HTTP_HOST'] !== 'localhost' || $this->forcePWA){
            $this->includeJs(base . 'neoan3-pwa/register/neoan3-docs');
            $this->addHead('link', ['rel' => 'manifest', 'href' => base .'neoan3-pwa/manifest/neoan3-docs']);
        }
    }

    function output($params = [])
    {
        $this->addHead('title', preg_replace('/[A-Z]/', ' $0', ucfirst(current_endpoint)));
        $this->main = Ops::embraceFromFile('frame/docs/skeleton.html', [
            'content' => $this->main,
            'menu'    => Ops::embraceFromFile('component/menu/menu.view.html', ['base' => base]),
            'base'    => base
        ]);

        if($_SERVER['HTTP_HOST'] !== 'neoan3.rocks'){
            $this->header = file_get_contents(__DIR__ . '/warning.html');
        }
        $this->js .= 'hljs.initHighlightingOnLoad();';
        //        $this->main = preg_replace('/\n/','',$this->main);
        parent::output($params);
    }

    function constants()
    {
        return [
            'base'       => [base],
            'link'       => [
                [
                    'sizes' => '32x32',
                    'type'  => 'image/png',
                    'rel'   => 'icon',
                    'href'  => 'asset/neoan-favicon.png'
                ]
            ],
            'js'         => [
                ['src' => path . '/frame/docs/main.js', 'data' => ['base' => base]],
                ['src' => base . '/asset/highlightjs/highlight.pack.js'],
            ],
            'meta'       => [
                ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']
            ],
            'stylesheet' => [
                '' . base . 'frame/docs/index.css',
                '' . base . 'asset/highlightjs/styles/darcula.css',
            ]
        ];
    }
}
