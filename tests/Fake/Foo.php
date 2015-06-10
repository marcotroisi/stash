<?php

/*
* This file is part of the Stash package
*
* (c) Michal Wachowski <wachowski.michal@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Fake;

class Foo
{
    private $_id;
    private $int;
    private $str;
    private $bool;
    private $date;
    private $array;
    private $yadas;
    private $object;

    public function __construct($attr = [])
    {
        foreach ($attr as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}
