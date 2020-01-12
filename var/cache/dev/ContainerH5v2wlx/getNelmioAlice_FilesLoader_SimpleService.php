<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'nelmio_alice.files_loader.simple' shared service.

include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/FilesLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/Loader/SimpleFilesLoader.php';

return $this->services['nelmio_alice.files_loader.simple'] = new \Nelmio\Alice\Loader\SimpleFilesLoader(${($_ = isset($this->services['nelmio_alice.file_parser.runtime_cache']) ? $this->services['nelmio_alice.file_parser.runtime_cache'] : $this->load('getNelmioAlice_FileParser_RuntimeCacheService.php')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_alice.data_loader.simple']) ? $this->services['nelmio_alice.data_loader.simple'] : $this->load('getNelmioAlice_DataLoader_SimpleService.php')) && false ?: '_'});
