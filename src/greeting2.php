<?php
namespace greeting2;

class Greeting2
{
    public $name;
    public $word;

    public function say()
    {
        return "$this->name くん $this->word\n";
    }
}
