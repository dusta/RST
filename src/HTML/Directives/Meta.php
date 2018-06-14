<?php

namespace Dusta\RST\HTML\Directives;

use Dusta\RST\Parser;
use Dusta\RST\Directive;

use Dusta\RST\HTML\Nodes\MetaNode;

/**
 * Add a meta information:
 *
 * .. meta:: type
 *      :key: value
 */
class Meta extends Directive
{
    public function getName()
    {
        return 'meta';
    }

    public function process(Parser $parser, $node, $variable, $type = 'name', array $options)
    {
        $document = $parser->getDocument();
        
        foreach ($options as $key => $value) {
            $meta = new MetaNode($type, $key, $value);
            $document->addHeaderNode($meta);
        }

        if ($node) {
            $document->addNode($node);
        }
    }
}
