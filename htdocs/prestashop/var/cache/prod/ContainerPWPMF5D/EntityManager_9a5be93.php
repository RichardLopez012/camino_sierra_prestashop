<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder04f29 = null;
    private $initializerca233 = null;
    private static $publicProperties5fac3 = [
        
    ];
    public function getConnection()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getConnection', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getMetadataFactory', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getExpressionBuilder', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'beginTransaction', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getCache', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getCache();
    }
    public function transactional($func)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'transactional', array('func' => $func), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'wrapInTransaction', array('func' => $func), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'commit', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->commit();
    }
    public function rollback()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'rollback', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getClassMetadata', array('className' => $className), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'createQuery', array('dql' => $dql), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'createNamedQuery', array('name' => $name), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'createQueryBuilder', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'flush', array('entity' => $entity), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'clear', array('entityName' => $entityName), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->clear($entityName);
    }
    public function close()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'close', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->close();
    }
    public function persist($entity)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'persist', array('entity' => $entity), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'remove', array('entity' => $entity), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'refresh', array('entity' => $entity), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'detach', array('entity' => $entity), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'merge', array('entity' => $entity), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getRepository', array('entityName' => $entityName), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'contains', array('entity' => $entity), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getEventManager', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getConfiguration', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'isOpen', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getUnitOfWork', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getProxyFactory', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'initializeObject', array('obj' => $obj), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'getFilters', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'isFiltersStateClean', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, 'hasFilters', array(), $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        return $this->valueHolder04f29->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerca233 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder04f29) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04f29 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder04f29->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerca233 && ($this->initializerca233->__invoke($valueHolder04f29, $this, '__get', ['name' => $name], $this->initializerca233) || 1) && $this->valueHolder04f29 = $valueHolder04f29;
        if (isset(self::$publicProperties5fac3[$name])) {
            return $this->valueHolder04f29->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
