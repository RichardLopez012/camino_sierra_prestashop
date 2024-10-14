<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder04f29 = null;
    private $initializerca233 = null;
    private static $publicProperties5fac3 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getList', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getInstalledModules', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getMustBeConfiguredModules', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getUpgradableModules', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'setActionUrls', array('collection' => $collection), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerca233 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder04f29) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder04f29 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder04f29->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, '__get', ['name' => $name], $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        if (isset(self::$publicProperties5fac3[$name])) {
            return $this->valueHolder04f29->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04f29;
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
        $targetObject = $this->valueHolder04f29;
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
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04f29;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder04f29;
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
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, '__isset', array('name' => $name), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04f29;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder04f29;
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
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, '__unset', array('name' => $name), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04f29;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder04f29;
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
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, '__clone', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        $this->valueHolder04f29 = clone $this->valueHolder04f29;
    }
    public function __sleep()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, '__sleep', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return array('valueHolder04f29');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerca233 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerca233;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'initializeProxy', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04f29;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04f29;
    }
}
