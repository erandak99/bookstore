<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.generator.object_generator.complete' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/ObjectGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Generator/ObjectGenerator/CompleteObjectGenerator.php';

return $this->services['nelmio_alice.generator.object_generator.complete'] = new \Nelmio\Alice\Generator\ObjectGenerator\CompleteObjectGenerator(${($_ = isset($this->services['nelmio_alice.generator.object_generator.simple']) ? $this->services['nelmio_alice.generator.object_generator.simple'] : $this->load('getNelmioAlice_Generator_ObjectGenerator_SimpleService.php')) && false ?: '_'});