<?php

namespace Dusta\RST\HTML\Directives;

use Dusta\RST\Parser;
use Dusta\RST\SubDirective;

use Dusta\RST\HTML\Nodes\ImageNode;
use Dusta\RST\HTML\Nodes\FigureNode;

/**
 * Renders an image, example :
 *
 * .. figure:: image.jpg
 *      :width: 100
 *      :title: An image
 *
 *      Here is an awesome caption
 *
 */
class Figure extends SubDirective
{
    public function getName()
    {
        return 'figure';
    }

    public function processSub(Parser $parser, $document, $variable, $data, array $options)
    {
        $environment = $parser->getEnvironment();
        $url = $environment->relativeUrl($data);

        return new FigureNode(new ImageNode($url, $options), $document);
    }
}
