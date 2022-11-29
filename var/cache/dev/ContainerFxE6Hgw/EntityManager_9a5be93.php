<?php

namespace ContainerFxE6Hgw;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8bca8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerad799 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd871 = [
        
    ];

    public function getConnection()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getConnection', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getMetadataFactory', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getExpressionBuilder', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'beginTransaction', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getCache', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getCache();
    }

    public function transactional($func)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'transactional', array('func' => $func), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'wrapInTransaction', array('func' => $func), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'commit', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->commit();
    }

    public function rollback()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'rollback', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getClassMetadata', array('className' => $className), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'createQuery', array('dql' => $dql), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'createNamedQuery', array('name' => $name), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'createQueryBuilder', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'flush', array('entity' => $entity), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'clear', array('entityName' => $entityName), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->clear($entityName);
    }

    public function close()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'close', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->close();
    }

    public function persist($entity)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'persist', array('entity' => $entity), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'remove', array('entity' => $entity), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'refresh', array('entity' => $entity), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'detach', array('entity' => $entity), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'merge', array('entity' => $entity), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getRepository', array('entityName' => $entityName), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'contains', array('entity' => $entity), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getEventManager', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getConfiguration', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'isOpen', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getUnitOfWork', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getProxyFactory', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'initializeObject', array('obj' => $obj), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'getFilters', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'isFiltersStateClean', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'hasFilters', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return $this->valueHolder8bca8->hasFilters();
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

        $instance->initializerad799 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8bca8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8bca8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8bca8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, '__get', ['name' => $name], $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        if (isset(self::$publicPropertiesdd871[$name])) {
            return $this->valueHolder8bca8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bca8;

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

        $targetObject = $this->valueHolder8bca8;
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
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bca8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8bca8;
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
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, '__isset', array('name' => $name), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bca8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8bca8;
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
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, '__unset', array('name' => $name), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bca8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8bca8;
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
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, '__clone', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        $this->valueHolder8bca8 = clone $this->valueHolder8bca8;
    }

    public function __sleep()
    {
        $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, '__sleep', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;

        return array('valueHolder8bca8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerad799 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerad799;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerad799 && ($this->initializerad799->__invoke($valueHolder8bca8, $this, 'initializeProxy', array(), $this->initializerad799) || 1) && $this->valueHolder8bca8 = $valueHolder8bca8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8bca8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8bca8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
