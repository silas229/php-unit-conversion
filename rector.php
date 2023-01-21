<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    // register a single rule
    $rectorConfig->rule(Rector\Php81\Rector\Class_\MyCLabsClassToEnumRector::class);
    $rectorConfig->rule(Rector\Php81\Rector\MethodCall\MyCLabsMethodCallToEnumConstRector::class);
    $rectorConfig->rule(Rector\Php81\Rector\Class_\ConstantListClassToEnumRector::class);

    // define sets of rules
    //    $rectorConfig->sets([
    //        LevelSetList::UP_TO_PHP_56
    //    ]);
};
