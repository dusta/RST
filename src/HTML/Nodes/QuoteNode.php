<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Nodes\QuoteNode as Base;

class QuoteNode extends Base
{
    public function render()
    {
        return "<blockquote>" . $this->value . "</blockquote>";
    }
}
