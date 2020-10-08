<?php
declare(strict_types=1);

namespace App\Extend;

use ParsedownExtra;

class HeaderIdMarkdownParserExtension extends ParsedownExtra
{
    protected function element(array $Element)
    {
        if (in_array($Element['name'], ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])) {
            $Element['attributes']['id'] = str_replace(' ', '-', strtolower($Element['text']));
        }

        if (isset($Element['text'])) {
            $Element['text'] = str_replace("{{'@'}}", '@', $Element['text']);
        }

        if (isset($Element['attributes'])) {
            $Element['attributes'] = array_map(function ($attr) {
                return str_replace("{{'@'}}", '@', $attr);
            }, $Element['attributes']);
        }

        return parent::element($Element);
    }
}
