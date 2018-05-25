<?php

namespace Dusta\RST\HTML\Directives;

use Dusta\RST\Parser;
use Dusta\RST\Directive;

use Dusta\RST\Nodes\RawNode;

/**
 * Add a meta title to the document
 *
 * .. title:: Page title
 */
class Title extends Directive
{
    public function getName()
    {
        return 'title';
    }

    public function process(Parser $parser, $node, $variable, $data, array $options)
    {
        $document = $parser->getDocument();

        $document->addHeaderNode(new RawNode('<title>'.htmlspecialchars($data).'</title>'));

        if ($node) {
            $document->addNode($node);
        }
    }
}
