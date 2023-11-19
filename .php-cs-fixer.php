<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
  ->in(__DIR__)
  ->in('./resources/views')
  ->exclude('vendor')
  ->name('*.php')
  ->notPath('bootstrap/cache')
  ->notPath('storage');

$config = new Config();

return $config
  ->setRules([
    'indentation_type' => true,
    'binary_operator_spaces' => [
      'operators' => ['=>' => 'align_single_space_minimal', '=' => 'align'],
    ],
    'braces' => [
      'allow_single_line_closure' => true,
    ],
    'single_quote' => true,
    'whitespace_after_comma_in_array' => true,
    'array_indentation' => true,
  ])
  ->setIndent('  ')
  ->setFinder($finder);

// To Run: vendor/bin/php-cs-fixer fix 