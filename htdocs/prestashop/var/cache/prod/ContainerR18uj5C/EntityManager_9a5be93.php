<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfee0c = null;
    private $initializer218fd = null;
    private static $publicPropertiesba2df = [
        
    ];
    public function getConnection()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getConnection', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getMetadataFactory', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getExpressionBuilder', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'beginTransaction', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getCache', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getCache();
    }
    public function transactional($func)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'transactional', array('func' => $func), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'commit', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->commit();
    }
    public function rollback()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'rollback', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getClassMetadata', array('className' => $className), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'createQuery', array('dql' => $dql), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'createNamedQuery', array('name' => $name), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'createQueryBuilder', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'flush', array('entity' => $entity), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'clear', array('entityName' => $entityName), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->clear($entityName);
    }
    public function close()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'close', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->close();
    }
    public function persist($entity)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'persist', array('entity' => $entity), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'remove', array('entity' => $entity), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'refresh', array('entity' => $entity), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'detach', array('entity' => $entity), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'merge', array('entity' => $entity), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'contains', array('entity' => $entity), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getEventManager', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getConfiguration', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'isOpen', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getUnitOfWork', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getProxyFactory', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'initializeObject', array('obj' => $obj), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'getFilters', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'isFiltersStateClean', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, 'hasFilters', array(), $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        return $this->valueHolderfee0c->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer218fd = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderfee0c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfee0c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderfee0c->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer218fd && ($this->initializer218fd->__invoke($valueHolderfee0c, $this, '__get', ['name' => $name], $this->initializer218fd) || 1) && $this->valueHolderfee0c = $valueHolderfee0c;
        if (isset(self::$publicPropertiesba2df[$name])) {
            return $this->valueHolderfee0c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
