<?php

namespace Dusta\RST\Directives;

use Dusta\RST\Nodes\TitleNode;
use Dusta\RST\Span;
use Dusta\RST\Parser;
use Dusta\RST\Directive;

/**
 * This sets a new target for a following title, this can be used to change
 * its link
 */
class RedirectionTitle extends Directive
{
    public function getName()
    {
        return 'redirection-title';
    }

    public function process(Parser $parser, $node, $variable, $data, array $options)
    {
        $document = $parser->getDocument();

        if ($node) {
            if ($node instanceof TitleNode) {
                $node->setTarget($data);
            }
            $document->addNode($node);
        }
    }
}
