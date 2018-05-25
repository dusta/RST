<?php

namespace Dusta\RST\HTML\Directives;

use Dusta\RST\Parser;
use Dusta\RST\Directive;

use Dusta\RST\Nodes\RawNode;

/**
 * Adds a stylesheet to a document, example:
 *
 * .. stylesheet:: style.css
 */
class Stylesheet extends Directive
{
    public function getName()
    {
        return 'stylesheet';
    }

    public function process(Parser $parser, $node, $variable, $data, array $options)
    {
        $document = $parser->getDocument();

        $document->addCss($data);

        if ($node) {
            $document->addNode($node);
        }
    }
}
