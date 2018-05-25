<?php

namespace Dusta\RST\Directives;

use Dusta\RST\Span;
use Dusta\RST\Parser;
use Dusta\RST\Directive;

/**
 * The Replace directive will set the variables for the spans
 *
 * .. |test| replace:: The Test String!
 */
class Replace extends Directive
{
    public function getName()
    {
        return 'replace';
    }

    public function processNode(Parser $parser, $variable, $data, array $options)
    {
        return $parser->createSpan($data);
    }
}
