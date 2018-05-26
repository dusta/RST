<?php

include('../../autoload.php');

use Dusta\RST\Parser;
use Dusta\RST\LaTeX\Kernel;

$parser = new Parser(null, new Kernel);
$document = $parser->parse(file_get_contents('document.rst'));

echo $document->renderDocument();
