<?php

namespace App\Model;

class FormGenerator extends BaseElement
{

    protected array $elements = [];

    public function addElement(InputElement $element): self
    {
        $this->elements[] = $element;
        return $this;
    }

    public function render(): string
    {
        $content = '';
        foreach ($this->elements as $object) {
            if ($object->validate()) {
                $content .= $object->render() . "<br>";
            }
        }
        return "<form style='margin: 20px ;max-width: 300px'> $content</form>";
    }
}