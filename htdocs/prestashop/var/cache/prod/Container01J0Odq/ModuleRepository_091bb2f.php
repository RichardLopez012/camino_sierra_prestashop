<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1f783 = null;
    private $initializerc4d96 = null;
    private static $publicPropertiese831f = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getList', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getInstalledModules', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getMustBeConfiguredModules', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getUpgradableModules', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'setActionUrls', array('collection' => $collection), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerc4d96 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder1f783) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder1f783 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder1f783->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, '__get', ['name' => $name], $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        if (isset(self::$publicPropertiese831f[$name])) {
            return $this->valueHolder1f783->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f783;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1f783;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f783;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1f783;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, '__isset', array('name' => $name), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f783;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder1f783;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, '__unset', array('name' => $name), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1f783;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1f783;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, '__clone', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        $this->valueHolder1f783 = clone $this->valueHolder1f783;
    }
    public function __sleep()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, '__sleep', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return array('valueHolder1f783');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4d96 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4d96;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'initializeProxy', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1f783;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1f783;
    }
}
