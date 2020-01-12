<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/FixtureDenormalizerRegistry.php';

return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.registry_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\FixtureDenormalizerRegistry(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.element']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.flag_parser.element'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_FlagParser_ElementService.php')) && false ?: '_'}, array(0 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_list'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleListService.php')) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.reference_range_name']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.reference_range_name'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_ReferenceRangeNameService.php')) && false ?: '_'}, 2 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple_range'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleRangeService.php')) && false ?: '_'}, 3 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.chainable.simple'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Chainable_SimpleService.php')) && false ?: '_'}));
