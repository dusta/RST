<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Nodes\SeparatorNode as Base;

class SeparatorNode extends Base
{
    public function render()
    {
        return '<hr />';
    }
}
