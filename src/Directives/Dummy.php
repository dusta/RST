<?php

namespace Dusta\RST\Directives;

use Dusta\RST\Directive;
use Dusta\RST\Parser;
use Dusta\RST\Nodes\DummyNode;

class Dummy extends Directive
{
    public function getName()
    {
        return 'dummy';
    }

    public function processNode(Parser $parser, $variable, $data, array $options)
    {
        return new DummyNode(array('data' => $data, 'options' => $options));
    }
}
