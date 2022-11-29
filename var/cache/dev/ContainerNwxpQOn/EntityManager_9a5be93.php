<?php

namespace ContainerNwxpQOn;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc91bc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraa3be = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa12e1 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getConnection', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getMetadataFactory', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getExpressionBuilder', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'beginTransaction', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getCache', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'transactional', array('func' => $func), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'commit', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->commit();
    }

    public function rollback()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'rollback', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getClassMetadata', array('className' => $className), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'createQuery', array('dql' => $dql), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'createNamedQuery', array('name' => $name), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'createQueryBuilder', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'flush', array('entity' => $entity), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'clear', array('entityName' => $entityName), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->clear($entityName);
    }

    public function close()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'close', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->close();
    }

    public function persist($entity)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'persist', array('entity' => $entity), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'remove', array('entity' => $entity), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'refresh', array('entity' => $entity), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'detach', array('entity' => $entity), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'merge', array('entity' => $entity), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'contains', array('entity' => $entity), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getEventManager', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getConfiguration', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'isOpen', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getUnitOfWork', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getProxyFactory', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'initializeObject', array('obj' => $obj), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'getFilters', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'isFiltersStateClean', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'hasFilters', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return $this->valueHolderc91bc->hasFilters();
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

        $instance->initializeraa3be = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderc91bc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc91bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc91bc->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, '__get', ['name' => $name], $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        if (isset(self::$publicPropertiesa12e1[$name])) {
            return $this->valueHolderc91bc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc91bc;

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

        $targetObject = $this->valueHolderc91bc;
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
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc91bc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc91bc;
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
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, '__isset', array('name' => $name), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc91bc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc91bc;
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
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, '__unset', array('name' => $name), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc91bc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc91bc;
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
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, '__clone', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        $this->valueHolderc91bc = clone $this->valueHolderc91bc;
    }

    public function __sleep()
    {
        $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, '__sleep', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;

        return array('valueHolderc91bc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraa3be = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraa3be;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraa3be && ($this->initializeraa3be->__invoke($valueHolderc91bc, $this, 'initializeProxy', array(), $this->initializeraa3be) || 1) && $this->valueHolderc91bc = $valueHolderc91bc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc91bc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc91bc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
