<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/ValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/Resolver/Value/ChainableValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/Resolver/Value/Chainable/EvaluatedValueResolver.php';

return $this->services['nelmio_alice.generator.resolver.value.chainable.evaluated_value_resolver'] = new \Nelmio\Alice\Generator\Resolver\Value\Chainable\EvaluatedValueResolver();
