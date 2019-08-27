<?php

use App\Extend\DocumentationImporter;
use App\Extend\GithubEmojiReplacer;
use App\Listeners\GenerateSitemap;
use GuzzleHttp\Client;
use Mni\FrontYAML\Markdown\MarkdownParser;
use TightenCo\Jigsaw\Jigsaw;
use TightenCo\Jigsaw\Parsers\ParsedownExtraParser;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->beforeBuild(DocumentationImporter::class);
$events->afterCollections(\App\Extend\UpdateProviderNavigation::class);

$events->afterBuild(GenerateSitemap::class);

$container->bind(MarkdownParser::class, \App\Extend\HeaderIdMarkdownParser::class);
