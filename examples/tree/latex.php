<?php

include('../../autoload.php');

use Dusta\RST\Builder;
use Dusta\RST\LaTeX\Kernel;

try
{
    // Build the 'input' files to the 'output' directory
    $builder = new Builder(new Kernel);
    $builder->copy('css', 'css');
    $builder->build('input', 'output');
}
catch (\Exception $exception)
{
    echo "\n";
    echo "Error: ".$exception->getMessage()."\n";
}
