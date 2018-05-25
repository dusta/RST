<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Nodes\AnchorNode as Base;

class AnchorNode extends Base
{
    public function render()
    {
        return '<a id="'.$this->value.'"></a>';
    }
}
