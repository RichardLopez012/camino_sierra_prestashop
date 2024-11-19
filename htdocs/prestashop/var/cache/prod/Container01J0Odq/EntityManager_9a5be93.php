<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1f783 = null;
    private $initializerc4d96 = null;
    private static $publicPropertiese831f = [
        
    ];
    public function getConnection()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getConnection', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getMetadataFactory', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getExpressionBuilder', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'beginTransaction', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getCache', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'transactional', array('func' => $func), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'commit', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->commit();
    }
    public function rollback()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'rollback', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'createQuery', array('dql' => $dql), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'createQueryBuilder', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'flush', array('entity' => $entity), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'clear', array('entityName' => $entityName), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->clear($entityName);
    }
    public function close()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'close', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->close();
    }
    public function persist($entity)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'persist', array('entity' => $entity), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'remove', array('entity' => $entity), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'refresh', array('entity' => $entity), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'detach', array('entity' => $entity), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'merge', array('entity' => $entity), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'contains', array('entity' => $entity), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getEventManager', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getConfiguration', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'isOpen', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getUnitOfWork', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getProxyFactory', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'getFilters', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'isFiltersStateClean', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, 'hasFilters', array(), $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        return $this->valueHolder1f783->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc4d96 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder1f783) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1f783 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder1f783->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc4d96 && ($this->initializerc4d96->__invoke($valueHolder1f783, $this, '__get', ['name' => $name], $this->initializerc4d96) || 1) && $this->valueHolder1f783 = $valueHolder1f783;
        if (isset(self::$publicPropertiese831f[$name])) {
            return $this->valueHolder1f783->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
