<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.parser.simple_parser' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/ParserInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/SimpleParser.php';

return $this->services['nelmio_alice.fixture_builder.expression_language.parser.simple_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\SimpleParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer'] : $this->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_EmptyValueLexerService.php')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.registry'] : $this->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Parser_TokenParser_RegistryService.php')) && false ?: '_'});
