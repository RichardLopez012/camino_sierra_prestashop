<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.modules.helper' shared service.

return $this->services['mbo.modules.helper'] = new \PrestaShop\Module\Mbo\Service\ModulesHelper(($this->services['mbo.modules.repository'] ?? $this->load('getMbo_Modules_RepositoryService.php')), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')));