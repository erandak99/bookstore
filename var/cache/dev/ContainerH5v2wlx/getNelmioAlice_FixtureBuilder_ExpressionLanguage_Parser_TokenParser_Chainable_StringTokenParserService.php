<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParserInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/ChainableTokenParserInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/StringTokenParser.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Parser/TokenParser/Chainable/ArgumentEscaper.php';

return $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.string_token_parser'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\StringTokenParser(${($_ = isset($this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper']) ? $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] : $this->services['nelmio_alice.fixture_builder.expression_language.parser.token_parser.chainable.argument_escaper'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Parser\TokenParser\Chainable\ArgumentEscaper()) && false ?: '_'});
