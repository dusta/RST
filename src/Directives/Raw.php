<?php

namespace Dusta\RST\Directives;

use Dusta\RST\Parser;
use Dusta\RST\Directive;

use Dusta\RST\Nodes\WrapperNode;
use Dusta\RST\Nodes\CodeNode;

/**
 * Renders a raw block, example:
 *
 * .. raw::
 *
 *      <u>Undelined!</u>
 */
class Raw extends Directive
{
    public function getName()
    {
        return 'raw';
    }

    public function process(Parser $parser, $node, $variable, $data, array $options)
    {
        if ($node) {
            $kernel = $parser->getKernel();

            if ($node instanceof CodeNode) {
                $node->setRaw(true);
            }

            if ($variable) {
                $environment = $parser->getEnvironment();
                $environment->setVariable($variable, $node);
            } else {
                $document = $parser->getDocument();
                $document->addNode($node);
            }
        }
    }

    public function wantCode()
    {
        return true;
    }
}
