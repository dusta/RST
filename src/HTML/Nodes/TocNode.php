<?php

namespace Dusta\RST\HTML\Nodes;

use Dusta\RST\Environment;
use Dusta\RST\Nodes\TocNode as Base;

class TocNode extends Base
{
    protected function renderLevel($url, $titles, $level = 1, $path = array())
    {
        if ($level > $this->depth) {
            return false;
        }

        $html = '';
        foreach ($titles as $k => $entry) {
            $path[$level - 1] = $k + 1;
            list($title, $childs) = $entry;

            $slug = $title;

            if (is_array($title)) {
                $slug = $title[1];
            }

            $anchor = Environment::slugify($slug);
            $target = $url . '#' . $anchor;

            if (is_array($title)) {
                list($title, $target) = $title;
                $info = $this->environment->resolve('doc', $target);
                $target = $this->environment->relativeUrl($info['url']);
            }

            $id = str_replace('../', '', $target);
            $id = str_replace(['#', '.', '/'], '-', $id);

            $html .= '<li id="' . $id . '" class="toc-item"><a href="' . $target . '">' . $title . '</a></li>';

            if ($childs) {
                $html .= '<ul>';
                $html .= $this->renderLevel($url, $childs, $level + 1, $path);
                $html .= '</ul>';
            }
        }

        return $html;
    }

    public function render()
    {
        if (isset($this->options['hidden'])) {
            return '';
        }

        $this->depth = isset($this->options['depth']) ? $this->options['depth'] : 2;

        $html = '<div class="toc"><ul>';
        foreach ($this->files as $file) {
            $reference = $this->environment->resolve('doc', $file);
            $reference['url'] = $this->environment->relativeUrl($reference['url']);
            $html .= $this->renderLevel($reference['url'], $reference['titles'] ?? []);
        }
        $html .= '</ul></div>';

        return $html;
    }
}
