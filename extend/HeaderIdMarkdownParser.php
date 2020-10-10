<?php
declare(strict_types=1);

namespace App\Extend;

use Mni\FrontYAML\Markdown\MarkdownParser;

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
