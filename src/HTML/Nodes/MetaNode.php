<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Nodes\MetaNode as Base;

class MetaNode extends Base
{
    public function render()
    {
        if(empty($this->type)) {
    	    $this->type = 'name';
        }
        
        return '<meta ' . htmlspecialchars($this->type) . '="' . htmlspecialchars($this->key) . '" content="' . htmlspecialchars($this->value) . '" />';
    }
}
