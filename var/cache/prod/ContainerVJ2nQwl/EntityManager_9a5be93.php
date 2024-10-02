<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9d061 = null;
    private $initializercdd4a = null;
    private static $publicPropertiesa4582 = [
        
    ];
    public function getConnection()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getConnection', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getMetadataFactory', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getExpressionBuilder', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'beginTransaction', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getCache', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getCache();
    }
    public function transactional($func)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'transactional', array('func' => $func), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'wrapInTransaction', array('func' => $func), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'commit', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->commit();
    }
    public function rollback()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'rollback', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getClassMetadata', array('className' => $className), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'createQuery', array('dql' => $dql), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'createNamedQuery', array('name' => $name), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'createQueryBuilder', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'flush', array('entity' => $entity), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'clear', array('entityName' => $entityName), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->clear($entityName);
    }
    public function close()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'close', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->close();
    }
    public function persist($entity)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'persist', array('entity' => $entity), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'remove', array('entity' => $entity), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'refresh', array('entity' => $entity), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'detach', array('entity' => $entity), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'merge', array('entity' => $entity), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getRepository', array('entityName' => $entityName), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'contains', array('entity' => $entity), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getEventManager', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getConfiguration', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'isOpen', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getUnitOfWork', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getProxyFactory', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'initializeObject', array('obj' => $obj), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'getFilters', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'isFiltersStateClean', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, 'hasFilters', array(), $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        return $this->valueHolder9d061->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercdd4a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9d061) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9d061 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9d061->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercdd4a && ($this->initializercdd4a->__invoke($valueHolder9d061, $this, '__get', ['name' => $name], $this->initializercdd4a) || 1) && $this->valueHolder9d061 = $valueHolder9d061;
        if (isset(self::$publicPropertiesa4582[$name])) {
            return $this->valueHolder9d061->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
