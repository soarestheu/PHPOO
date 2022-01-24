<?php

namespace Source;

class Conn implements UserInterface, ProductInterface
{
    private $cdn;
    private $user;
    private $pass;

    public function __construct($cdn, $user, $pass)
    {
        $this->cdn = $cdn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        return new \PDO($this->cdn, $this->user, $this->pass);
    }
}
