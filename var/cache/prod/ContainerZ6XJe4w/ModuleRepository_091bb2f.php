<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere75d8 = null;
    private $initializer4c321 = null;
    private static $publicPropertiesc74e9 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'getList', array(), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'getInstalledModules', array(), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'getMustBeConfiguredModules', array(), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'getUpgradableModules', array(), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'setActionUrls', array('collection' => $collection), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return $this->valueHoldere75d8->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer4c321 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldere75d8) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldere75d8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldere75d8->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, '__get', ['name' => $name], $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        if (isset(self::$publicPropertiesc74e9[$name])) {
            return $this->valueHoldere75d8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere75d8;
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
        $targetObject = $this->valueHoldere75d8;
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
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere75d8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldere75d8;
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
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, '__isset', array('name' => $name), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere75d8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldere75d8;
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
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, '__unset', array('name' => $name), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere75d8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldere75d8;
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
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, '__clone', array(), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        $this->valueHoldere75d8 = clone $this->valueHoldere75d8;
    }
    public function __sleep()
    {
        $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, '__sleep', array(), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
        return array('valueHoldere75d8');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4c321 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4c321;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4c321 && ($this->initializer4c321->__invoke($valueHoldere75d8, $this, 'initializeProxy', array(), $this->initializer4c321) || 1) && $this->valueHoldere75d8 = $valueHoldere75d8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere75d8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere75d8;
    }
}
