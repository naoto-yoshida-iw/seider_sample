<?php
namespace greeting3;

class Greeting3
{
    public $name;
    public $word;

    public function say()
    {
        return "$this->name くん $this->word\n";
    }
}
