<?php

namespace Layouts\Todo\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'Ilch-Layout',
        'version' => '1.0',
        'author' => 'Ilch.de',
        'link' => 'http://ilch.de',
        'desc' => 'Ilch-Layout mit Startseite',
        'layouts' => [
            'start' => [
                ['module' => 'shoutbox'],
            ],
            'article' => [
                ['module' => 'article'],
            ],
            'forum' => [
                ['module' => 'forum'],
            ]//only for example
        ],
        //'modulekey' => 'Name of Module'
    ];

    public function getUpdate($installedVersion)
    {

    }
}
