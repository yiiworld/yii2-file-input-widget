<?php

use Symfony\CS;

return CS\Config\Config::create()
    ->level(CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        'array_element_no_space_before_comma',
        'array_element_white_space_after_comma',
        'duplicate_semicolon',
        'extra_empty_lines',
        'function_typehint_space',
        'include',
        'join_function',
        'list_commas',
        'method_argument_default_value',
        'multiline_array_trailing_comma',
        'namespace_no_leading_whitespace',
        'new_with_braces',
        'no_blank_lines_after_class_opening',
        'object_operator',
        'operators_spaces',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_empty_return',
        'phpdoc_no_package',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_short_description',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'print_to_echo',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
        'return',
        'short_bool_cast',
        'single_array_no_trailing_comma',
        'single_blank_line_before_namespace',
        'single_quote',
        'spaces_cast',
        'standardize_not_equal',
        'ternary_spaces',
        'trim_array_spaces',
        'unalign_double_arrow',
        'unalign_equals',
        'unary_operators_spaces',
        'unneeded_control_parentheses',
        'unused_use',
        'whitespacy_lines',
        'concat_with_spaces',
        'newline_after_open_tag',
        'ordered_use',
        'phpdoc_order',
        'short_array_syntax',
        'strict_param',
    ])
    ->finder(
        CS\Finder\DefaultFinder::create()
            ->in([__DIR__ . '/src', __DIR__ . '/tests'])
    );
