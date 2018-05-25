<?php

namespace Dusta\RST\Directives;

use Dusta\RST\Parser;
use Dusta\RST\Directive;

use Dusta\RST\Nodes\DocumentNode;

/**
 * Tell that this is a document, in the case of LaTeX for instance,
 * this will mark the current document as one of the master document that
 * should be compiled
 */
class Document extends Directive
{
    public function getName()
    {
        return 'document';
    }

    public function processNode(Parser $parser, $variable, $data, array $options)
    {
        return new DocumentNode;
    }
}
