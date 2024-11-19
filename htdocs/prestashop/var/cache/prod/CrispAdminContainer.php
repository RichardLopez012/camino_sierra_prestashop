<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class CrispAdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'crisp.context' => 'getCrisp_ContextService',
            'crisp.module' => 'getCrisp_ModuleService',
            'crisp.ps_accounts_facade' => 'getCrisp_PsAccountsFacadeService',
            'crisp.ps_accounts_installer' => 'getCrisp_PsAccountsInstallerService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'crisp.context' shared service.
     *
     * @return \Context
     */
    protected function getCrisp_ContextService()
    {
        return $this->services['crisp.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'crisp.module' shared service.
     *
     * @return \crisp
     */
    protected function getCrisp_ModuleService()
    {
        return $this->services['crisp.module'] = \Module::getInstanceByName('crisp');
    }

    /**
     * Gets the public 'crisp.ps_accounts_facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getCrisp_PsAccountsFacadeService()
    {
        return $this->services['crisp.ps_accounts_facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['crisp.ps_accounts_installer'] ?? ($this->services['crisp.ps_accounts_installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0'))));
    }

    /**
     * Gets the public 'crisp.ps_accounts_installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getCrisp_PsAccountsInstallerService()
    {
        return $this->services['crisp.ps_accounts_installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0');
    }
}
