<?php

$finder = PhpCsFixer\Finder::create()
    ->in([
        __DIR__ . '/app',
        __DIR__ . '/config',
        __DIR__ . '/database',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ]);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => ['default' => 'align'],
        'blank_line_before_statement' => ['statements' => ['return']],
        'cast_spaces' => ['space' => 'single'],
        'class_attributes_separation' => ['elements' => ['method' => 'one']],
        'no_unused_imports' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'phpdoc_align' => ['align' => 'vertical'],
        'phpdoc_no_empty_return' => false,
        'phpdoc_scalar' => true,
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],
        'unary_operator_spaces' => true,
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true);
