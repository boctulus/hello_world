<?php

namespace boctulus\hello_world;

class Hello
{
    static function hi(bool $informal = true){
        return $informal ? "Hi" : "Hello";
    }
}

