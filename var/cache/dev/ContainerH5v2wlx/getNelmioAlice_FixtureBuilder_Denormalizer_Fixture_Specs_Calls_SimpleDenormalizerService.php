<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/CallsDenormalizerInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/CallsWithFlagsDenormalizer.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/MethodFlagHandler.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/MethodFlagHandler/ConfiguratorFlagHandler.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FixtureBuilder/Denormalizer/Fixture/SpecificationBagDenormalizer/Calls/MethodFlagHandler/OptionalFlagHandler.php';

return $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.simple_denormalizer'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\CallsWithFlagsDenormalizer(${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.function_denormalizer'] : $this->load('getNelmioAlice_FixtureBuilder_Denormalizer_Fixture_Specs_Calls_FunctionDenormalizerService.php')) && false ?: '_'}, array(0 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler'] : $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.configurator_flag_handler'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\ConfiguratorFlagHandler()) && false ?: '_'}, 1 => ${($_ = isset($this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler']) ? $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler'] : $this->services['nelmio_alice.fixture_builder.denormalizer.fixture.specs.calls.method_flag_handler.optional_flag_handler'] = new \Nelmio\Alice\FixtureBuilder\Denormalizer\Fixture\SpecificationBagDenormalizer\Calls\MethodFlagHandler\OptionalFlagHandler()) && false ?: '_'}));
