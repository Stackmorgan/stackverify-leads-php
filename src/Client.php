<?php

namespace StackVerify;


use KyPHP\KyPHP;


class Client
{

    private KyPHP $ky;


    public function __construct()
    {
        $this->ky = new KyPHP();
    }


    public function http(): KyPHP
    {
        return $this->ky;
    }

}
