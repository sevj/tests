<?php

namespace App;

use App\resources\Apple;

class Advanced
{
    protected $apple;

    public function setApple($apple)
    {
        $this->apple = $apple;
    }

    public function catchApple()
    {
        return $this->apple->catchApple();
    }
}
