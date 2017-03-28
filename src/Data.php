<?php
namespace Hero\Core;

abstract class Data
{
    abstract function __call($name, $args);

    abstract function __get($name);

    abstract function __set($name, $value);
}