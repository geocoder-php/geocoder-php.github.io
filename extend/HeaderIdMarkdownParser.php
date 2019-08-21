<?php

namespace App\Extend;

use App\Extend\HeaderIdMarkdownParserExtension;
use Mni\FrontYAML\Markdown\MarkdownParser;
use ParsedownExtra;

class HeaderIdMarkdownParser implements MarkdownParser
{
    /** @var HeaderIdMarkdownParserExtension  */
    protected $parser;

    public function __construct(HeaderIdMarkdownParserExtension $parser = null)
    {
        $this->parser = $parser ?: new HeaderIdMarkdownParserExtension();
    }

    public function parse($markdown)
    {
        return $this->parser->parse($markdown);
    }
}
