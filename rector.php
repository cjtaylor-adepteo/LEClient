<?php

declare(strict_types=1);

// use Adepteo\Lib\Rector\DoctrineQueryRenameRector;
// use Adepteo\Lib\Rector\FetchArrayToFetchOneWithVoipSipAnnotationRector;
// use Adepteo\Lib\Rector\myRenameRector;
use Rector\CodeQuality\Rector\ClassMethod\ReturnTypeFromStrictScalarReturnExprRector;
use Rector\Config\RectorConfig;
// use Adepteo\Lib\Rector\DoctrineFetchArrayToFetchOneRector;
// use Adepteo\Lib\Rector\ReturnModelTypeFixerRector;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Naming\Rector\ClassMethod\RenameVariableToMatchNewTypeRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromReturnDirectArrayRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictBoolReturnExprRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictConstantReturnRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromReturnNewRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNewArrayRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedPropertyRector;
use Rector\TypeDeclaration\Rector\Class_\ReturnTypeFromStrictTernaryRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictTypedCallRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;
use Rector\TypeDeclaration\Rector\ClassMethod\ReturnTypeFromStrictNativeCallRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    $rectorConfig->rules([
        /* myRenameRector::class */
        /* FetchArrayToFetchOneWithVoipSipAnnotationRector::class */
        /* ReturnModelTypeFixerRector::class */

        /* ReturnTypeFromReturnDirectArrayRector::class, */
        /* DoctrineQueryRenameRector::class, */

        RenameVariableToMatchNewTypeRector::class,
        ReturnTypeFromReturnDirectArrayRector::class,
        ReturnTypeFromReturnNewRector::class,
        ReturnTypeFromStrictBoolReturnExprRector::class,
        ReturnTypeFromStrictConstantReturnRector::class,
        ReturnTypeFromStrictNativeCallRector::class,
        ReturnTypeFromStrictNewArrayRector::class,
        ReturnTypeFromStrictScalarReturnExprRector::class,
        ReturnTypeFromStrictTernaryRector::class,
        ReturnTypeFromStrictTypedCallRector::class,
        ReturnTypeFromStrictTypedPropertyRector::class,
        TypedPropertyFromStrictConstructorRector::class,
    ]);
    /**/
    /**/
    $rectorConfig->ruleWithConfiguration(AddVoidReturnTypeWhereNoReturnRector::class, [
        AddVoidReturnTypeWhereNoReturnRector::USE_PHPDOC => false,
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_82,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::NAMING,
        /* SetList::DEAD_CODE, */
    ]);
};



/* use Rector\Core\Configuration\Option; */
/* use Rector\Php74\Rector\Property\TypedPropertyRector; */
/* use Rector\Set\ValueObject\SetList; */
/* use Rector\Set\ValueObject\LevelSetList; */
/* use Rector\PSR4\Rector\FileWithoutNamespace\NormalizeNamespaceByPSR4ComposerAutoloadRector; */
/* use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator; */
/* use Rector\PostRector\Rector\UseAddingPostRector; */
/* use Rector\CodingStyle\Rector\Switch_\BinarySwitchToIfElseRector; */
/* use Rector\Core\ValueObject\PhpVersion; */
/**/
/* return static function (ContainerConfigurator $containerConfigurator): void { */
/*     // here we can define, what sets of rules will be applied */
/*     $parameters = $containerConfigurator->parameters(); */
/**/
/*     $containerConfigurator->import(LevelSetList::UP_TO_PHP_80); */
/**/
/*     $containerConfigurator->import(SetList::CODE_QUALITY); */
/*     $containerConfigurator->import(SetList::CODING_STYLE); */
/*     $containerConfigurator->import(SetList::NAMING); */
/*     $containerConfigurator->import(SetList::PSR_4); */
/*     $containerConfigurator->import(SetList::DEAD_CODE); */
/**/
/*     // register single rule */
/*     $services = $containerConfigurator->services(); */
/*     $services->set(TypedPropertyRector::class); */
/**/
/*     $services->set(NormalizeNamespaceByPSR4ComposerAutoloadRector::class); */
/*     $services->set(UseAddingPostRector::class); */
/**/
/*     $parameters->set(Option::PHP_VERSION_FEATURES, PhpVersion::PHP_80); */
/*     $parameters->set(Option::PHPSTAN_FOR_RECTOR_PATH, __DIR__ . '/phpstan.neon'); */
/**/
/*     // auto import fully qualified class names? [default: false] */
/*     $parameters->set(Option::AUTO_IMPORT_NAMES, true); */
/**/
/*     // skip root namespace classes, like \DateTime or \Exception [default: true] */
/*     $parameters->set(Option::IMPORT_SHORT_CLASSES, true); */
/**/
/*     $parameters->set(Option::SKIP, [ */
/*         BinarySwitchToIfElseRector::class, */
/*         RemoveFinalFromConstRector::class */
/*     ]); */
/* }; */
