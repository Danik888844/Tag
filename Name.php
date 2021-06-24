<?php


class Name {
    protected $name;

    public function __construct(string $name){
        $this->set($name);
    }

    function get():string{
        return $this->name;
    }

    public function set($name){
        $this->name = strtolower($name);
        return $this;
    }

    function isSelfClosing():bool{
        $tags = [
            'area','base','br','col','embed','hr',
            'img','input','link','meta','param','source',
            'track','wbr','command','keygen','menuitem'
        ];

        return in_array($this->get(),$tags);
    }

    function __toString():string{
        return $this->get();
    }

}