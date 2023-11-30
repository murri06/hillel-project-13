<?php

namespace App\Libraries\FormGenerator;

class TextField extends InputElement
{

    public function render(): string
    {
        $render = '';
        foreach ($this->arrayNames as $object) {
            $render .= "<label class='form-label'>$object : <input class='form-control' type='text' name='$object'></label>";
        }
        return $render;
    }
}