<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'psshipping.ps_billings_context_wrapper' shared service.

return $this->services['psshipping.ps_billings_context_wrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(($this->services['ps_accounts.facade'] ?? $this->load('getPsAccounts_FacadeService.php')), ($this->services['psshipping.context'] ?? $this->load('getPsshipping_ContextService.php')), 0);