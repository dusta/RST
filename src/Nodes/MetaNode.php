<?php

namespace Dusta\RST\Nodes;

abstract class MetaNode extends Node
{
    protected $key;
    protected $value;

    public function __construct($type, $key, $value)
    {
        $this->type = $type ?? 'name';
        $this->key = $key;
        $this->value = $value;
    }
}
