<?php

namespace App\Model;

abstract class BaseElement
{

    abstract public function render(): string;
}