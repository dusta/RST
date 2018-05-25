<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Environment;
use Dusta\RST\Nodes\TitleNode as Base;

class TitleNode extends Base
{
    public function render()
    {
        $anchor = Environment::slugify($this->value);

        return '<a id="' . $anchor . '"></a><h' . $this->level . '>' . $this->value . '</h' . $this->level . ">";
    }
}
