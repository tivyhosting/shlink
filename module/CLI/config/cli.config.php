<?php
declare(strict_types=1);

namespace Shlinkio\Shlink\CLI;

use function Shlinkio\Shlink\Common\env;

return [

    'cli' => [
        'locale' => env('CLI_LOCALE', 'en'),
        'commands' => [
            Command\ShortUrl\GenerateShortUrlCommand::NAME => Command\ShortUrl\GenerateShortUrlCommand::class,
            Command\ShortUrl\ResolveUrlCommand::NAME => Command\ShortUrl\ResolveUrlCommand::class,
            Command\ShortUrl\ListShortUrlsCommand::NAME => Command\ShortUrl\ListShortUrlsCommand::class,
            Command\ShortUrl\GetVisitsCommand::NAME => Command\ShortUrl\GetVisitsCommand::class,
            Command\ShortUrl\GeneratePreviewCommand::NAME => Command\ShortUrl\GeneratePreviewCommand::class,
            Command\ShortUrl\DeleteShortUrlCommand::NAME => Command\ShortUrl\DeleteShortUrlCommand::class,

            Command\Visit\ProcessVisitsCommand::NAME => Command\Visit\ProcessVisitsCommand::class,

            Command\Config\GenerateCharsetCommand::NAME => Command\Config\GenerateCharsetCommand::class,
            Command\Config\GenerateSecretCommand::NAME => Command\Config\GenerateSecretCommand::class,

            Command\Api\GenerateKeyCommand::NAME => Command\Api\GenerateKeyCommand::class,
            Command\Api\DisableKeyCommand::NAME => Command\Api\DisableKeyCommand::class,
            Command\Api\ListKeysCommand::NAME => Command\Api\ListKeysCommand::class,

            Command\Tag\ListTagsCommand::NAME => Command\Tag\ListTagsCommand::class,
            Command\Tag\CreateTagCommand::NAME => Command\Tag\CreateTagCommand::class,
            Command\Tag\RenameTagCommand::NAME => Command\Tag\RenameTagCommand::class,
            Command\Tag\DeleteTagsCommand::NAME => Command\Tag\DeleteTagsCommand::class,
        ],
    ],

];
