<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/LexerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/EmptyValueLexer.php';

return $this->services['nelmio_alice.fixture_builder.expression_language.lexer.empty_value_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\EmptyValueLexer(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer']) ? $this->services['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer'] : $this->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceEscaperLexerService.php')) && false ?: '_'});
