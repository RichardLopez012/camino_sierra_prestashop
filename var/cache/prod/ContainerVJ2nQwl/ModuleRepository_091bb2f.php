<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9d061 = null;
    private $initializercdd4a = null;
    private static $publicPropertiesa4582 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getList', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getInstalledModules', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getMustBeConfiguredModules', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getUpgradableModules', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getModule', array('moduleName' => $moduleName), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'setActionUrls', array('collection' => $collection), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializercdd4a = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder9d061) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder9d061 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder9d061->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, '__get', ['name' => $name], $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        if (isset(self::$publicPropertiesa4582[$name])) {
            return $this->valueHolder9d061->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d061;
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
        $targetObject = $this->valueHolder9d061;
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
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d061;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9d061;
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
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, '__isset', array('name' => $name), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d061;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9d061;
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
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, '__unset', array('name' => $name), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d061;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9d061;
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
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, '__clone', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        $this->valueHolder9d061 = clone $this->valueHolder9d061;
    }
    public function __sleep()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, '__sleep', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return array('valueHolder9d061');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercdd4a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercdd4a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'initializeProxy', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9d061;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9d061;
    }
}
