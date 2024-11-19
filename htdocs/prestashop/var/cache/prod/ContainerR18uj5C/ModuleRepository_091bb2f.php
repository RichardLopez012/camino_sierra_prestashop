<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfee0c = null;
    private $initializer218fd = null;
    private static $publicPropertiesba2df = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getList', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getInstalledModules', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getMustBeConfiguredModules', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getUpgradableModules', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'setActionUrls', array('collection' => $collection), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer218fd = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderfee0c) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderfee0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderfee0c->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, '__get', ['name' => $name], $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        if (isset(self::$publicPropertiesba2df[$name])) {
            return $this->valueHolderfee0c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfee0c;
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
        $targetObject = $this->valueHolderfee0c;
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
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfee0c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderfee0c;
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
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, '__isset', array('name' => $name), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfee0c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderfee0c;
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
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, '__unset', array('name' => $name), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfee0c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderfee0c;
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
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, '__clone', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        $this->valueHolderfee0c = clone $this->valueHolderfee0c;
    }
    public function __sleep()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, '__sleep', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return array('valueHolderfee0c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer218fd = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer218fd;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'initializeProxy', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfee0c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfee0c;
    }
}
