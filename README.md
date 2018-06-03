# RST

[![Build status](https://travis-ci.org/dusta/RST.svg?branch=master)](https://travis-ci.org/Dusta/RST)

PHP library to parse reStructuredText document

## Usage

The parser can be used this way:

```php
<?php

$parser = new Dusta\RST\Parser;

// RST document
$rst = '
Hello world
===========

What is it?
----------
This is a **RST** document!

Where can I get it?
-------------------
You can get it on the `GitHub page <https://github.com/Gregwar/RST>`_';

// Parse it
$parser = $parser->parse($rst);
$head = array();
foreach ($parser->headerNodes as $node) {
    $head[] = $node->render();
}

$headers = $document; // array
$content = $parser->render(); // string

echo '<head>';
foreach ($headers as $value) {
    echo $value;
}
echo '</head>';
echo '<body>';
echo $content;
echo '</body>';

```

## Writing directives

### Step 1: Extends the Directive class

Write your own class that extends the `Dusta\RST\Directive` class, and define the
method `getName()` that return the directive name.

You can then redefine one of the following method:

* `processAction()` if your directive simply tweak the document without modifying the nodes
* `processNode()` if your directive is adding a node
* `process()` if your directive is tweaking the node that just follows it

See `Directive.php` for more information

### Step 2: Register your directive

You can register your directive by directly calling `registerDirective()` on your
`Parser` object.

Else, you will have to also create your own kernel by extending the `Kernel` class
and adding your own logic to define extra directives, see `Kernel.php` for more information.
Then, pass the kernel when constructing the `Parser` or the `Builder`

## License

This library is under MIT license
