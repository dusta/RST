<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Nodes\MetaNode as Base;

class MetaNode extends Base
{
    public function render()
    {
        return '<meta name="' . htmlspecialchars($this->key) . '" content="' . htmlspecialchars($this->value) . '" />';
    }
}
