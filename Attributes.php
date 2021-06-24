<?php


class Attributes{
    protected $attributes;

    public function __construct(array $attrs = []) {
        $this->setAll($attrs);
    }

    function setAll(array $attr){
        $this->attributes = $attr;
        return $this;
    }

    function getAll():array{
        return $this->attributes;
    }

    function set(string $key, $value = null){
        $old = $this->getAll();
        $old[$key] = $value;
        return $this->setAll($old);
    }

    function get(string $key){
        $attrs = $this->getAll();
        return $attrs[$key];
    }

    function append(string $key, $value){
        $old = $this->get($key);
        return $this->set($key, $old . $value);
    }

    function prepend(string $key, $value){
        $old = $this->get($key);
        return $this->set($key, $value . $old);
    }

    function __ToString(){
        $attrs = $this->getAll();
        $res='';

        foreach ($attrs as $key => $value){
            $res .= " {$key}";

            if(!empty($value))
                $res .= "=\"{$value}\"";
        }

        return $res;
    }

}