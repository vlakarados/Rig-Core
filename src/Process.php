<?php

namespace Rig;

class Process
{
    protected $handler;

    public function __construct()
    {

    }

    public function setHandler(\Rig\Track\Handler $handler)
    {
        $this->handler = $handler;
    }

    public function execute()
    {

    }
}
