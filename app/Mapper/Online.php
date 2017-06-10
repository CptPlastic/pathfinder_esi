<?php
/**
 * Created by PhpStorm.
 * User: exodu
 * Date: 10.06.2017
 * Time: 02:18
 */

namespace Exodus4D\ESI\Mapper;

use data\mapper;

class Online extends mapper\AbstractIterator {

    protected static $map = [
        'online' => 'online',
        'last_logout' => 'lastLogout',
        'logins' => 'logins'
    ];

    /**
     * map iterator
     * @return array
     */
    public function getData(){

        // "system trueSec" mapping -------------------------------------------
        self::$map['last_login'] = function($iterator){
            $trueSec = $iterator['last_login'] . ' jjj';
            return $trueSec;
        };

        return parent::getData();
    }
}