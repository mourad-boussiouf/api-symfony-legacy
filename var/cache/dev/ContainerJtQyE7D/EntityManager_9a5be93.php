<?php

namespace ContainerJtQyE7D;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a64e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer446de = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf572c = [
        
    ];

    public function getConnection()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getConnection', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getMetadataFactory', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getExpressionBuilder', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'beginTransaction', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getCache', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'transactional', array('func' => $func), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'commit', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->commit();
    }

    public function rollback()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'rollback', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getClassMetadata', array('className' => $className), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'createQuery', array('dql' => $dql), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'createNamedQuery', array('name' => $name), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'createQueryBuilder', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'flush', array('entity' => $entity), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'clear', array('entityName' => $entityName), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->clear($entityName);
    }

    public function close()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'close', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->close();
    }

    public function persist($entity)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'persist', array('entity' => $entity), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'remove', array('entity' => $entity), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'refresh', array('entity' => $entity), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'detach', array('entity' => $entity), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'merge', array('entity' => $entity), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'contains', array('entity' => $entity), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getEventManager', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getConfiguration', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'isOpen', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getUnitOfWork', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getProxyFactory', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'initializeObject', array('obj' => $obj), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'getFilters', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'isFiltersStateClean', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'hasFilters', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return $this->valueHolder4a64e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer446de = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder4a64e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4a64e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4a64e->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, '__get', ['name' => $name], $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        if (isset(self::$publicPropertiesf572c[$name])) {
            return $this->valueHolder4a64e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a64e;

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

        $targetObject = $this->valueHolder4a64e;
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
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a64e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a64e;
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
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, '__isset', array('name' => $name), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a64e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a64e;
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
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, '__unset', array('name' => $name), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a64e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a64e;
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
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, '__clone', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        $this->valueHolder4a64e = clone $this->valueHolder4a64e;
    }

    public function __sleep()
    {
        $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, '__sleep', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;

        return array('valueHolder4a64e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer446de = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer446de;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer446de && ($this->initializer446de->__invoke($valueHolder4a64e, $this, 'initializeProxy', array(), $this->initializer446de) || 1) && $this->valueHolder4a64e = $valueHolder4a64e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a64e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a64e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
