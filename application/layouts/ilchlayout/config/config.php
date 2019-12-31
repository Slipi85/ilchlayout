<?php

namespace Layouts\Ilchlayout\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'Ilch-Layout',
        'version' => '1.2.1',
        'author' => 'Slipi',
        'link' => 'http://ilch.de',
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
            ]//only for example
        ],
        //'modulekey' => 'Name of Module'
    ];

    public function getUpdate($installedVersion)
    {

    }
}
