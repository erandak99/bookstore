<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.hydrator.simple' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/HydratorInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/ValueResolverAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/Hydrator/SimpleHydrator.php';

return $this->services['nelmio_alice.generator.hydrator.simple'] = new \Nelmio\Alice\Generator\Hydrator\SimpleHydrator(${($_ = isset($this->services['nelmio_alice.generator.hydrator.property.symfony_property_access']) ? $this->services['nelmio_alice.generator.hydrator.property.symfony_property_access'] : $this->load('getNelmioAlice_Generator_Hydrator_Property_SymfonyPropertyAccessService.php')) && false ?: '_'});
