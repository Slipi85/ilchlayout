<?php

namespace Layouts\Ilchlayout\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'Ilch-Layout',
        'version' => '1.3.0',
        'ilchCore' => '2.2.0',
        'author' => 'Slipi',
        'link' => 'https://ilch.de',
        'desc' => 'Ilch-Layout mit Startseite. Die Sidebar-Ausgabe im Forum wird unter Menü1 gesteuert. Die Sidebar-Ausgabe im Forum wird unter Menü2 gesteuert.
                  Die Navigations-ausgabe wird unter Menü3 gesteuert. Die Sidebar-Ausgabe in denn restlichen Modulen wird unter Menü4 gesteuert.
                  Die Footer-Ausgabe wird unter Menü5 gesteuert (es können nur 4 Berieche hinzugefühgt werden).',
        'layouts' => [
            'start' => [
                ['module' => 'shoutbox'],
            ],
            'forum' => [
                ['module' => 'forum'],
            ],
            'article' => [
                ['module' => 'article'],
            ]
        ],
    ];

    public function getUpdate($installedVersion)
    {

    }
}
