<?php

namespace Dusta\RST\HTML\Directives;

use Dusta\RST\Parser;
use Dusta\RST\SubDirective;
use Dusta\RST\Nodes\WrapperNode;

/**
 * Divs a sub document in a div with a given class
 */
class Div extends SubDirective
{
    public function getName()
    {
        return 'div';
    }

    public function processSub(Parser $parser, $document, $variable, $data, array $options)
    {
        return new WrapperNode($document, '<div class="' . $data . '">', '</div>');
    }
}
