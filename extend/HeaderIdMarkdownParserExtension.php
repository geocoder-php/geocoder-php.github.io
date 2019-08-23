<?php

namespace App\Extend;

use ParsedownExtra;

class HeaderIdMarkdownParserExtension extends ParsedownExtra
{
    protected function element(array $Element)
    {
        if (in_array($Element['name'], ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'])) {
            $Element['attributes']['id'] = str_replace(' ', '-', strtolower($Element['text']));
        }

        return parent::element($Element);
    }
}
