<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/ConstructorDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Constructor/LegacyConstructorDenormalizer.php';

return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.legacy_constructor_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Constructor\LegacyConstructorDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.constructor_denormalizer'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_ConstructorDenormalizerService.php')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.constructor.factory_denormalizer'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Constructor_FactoryDenormalizerService.php')) && false ?: '_'});