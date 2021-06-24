<?php
require_once __DIR__ . '/BaseTag.php';

class Tag extends BaseTag{
    static function make(string $name, array $attrs = []){ // типо Factory
        return new static($name,$attrs);
    }

    static function __callStatic(string $name, array $argument){
        return static::make($name, ...$argument);
    }
}