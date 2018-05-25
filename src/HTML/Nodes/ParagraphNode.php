<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Nodes\ParagraphNode as Base;

class ParagraphNode extends Base
{
    public function render()
    {
        $text = $this->value;

        if (trim($text)) {
            return '<p>' . $text . '</p>';
        } else {
            return '';
        }
    }
}
