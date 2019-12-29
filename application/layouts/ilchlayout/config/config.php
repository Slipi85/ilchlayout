<?php

namespace Layouts\Ilchlayout\Config;

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
            'forum' => [
                ['module' => 'forum'],
            ],
            'article' => [
                ['module' => 'article'],
            ]//only for example
        ],
        //'modulekey' => 'Name of Module'
    ];

    public function getUpdate($installedVersion)
    {

    }
}
