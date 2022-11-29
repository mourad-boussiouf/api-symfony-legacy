<?php

namespace ContainerPWa3xkt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb03ee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5db93 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties50d0d = [
        
    ];

    public function getConnection()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getConnection', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getMetadataFactory', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getExpressionBuilder', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'beginTransaction', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getCache', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'transactional', array('func' => $func), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'commit', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->commit();
    }

    public function rollback()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'rollback', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getClassMetadata', array('className' => $className), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'createQuery', array('dql' => $dql), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'createNamedQuery', array('name' => $name), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'createQueryBuilder', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'flush', array('entity' => $entity), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'clear', array('entityName' => $entityName), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->clear($entityName);
    }

    public function close()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'close', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->close();
    }

    public function persist($entity)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'persist', array('entity' => $entity), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'remove', array('entity' => $entity), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'refresh', array('entity' => $entity), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'detach', array('entity' => $entity), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'merge', array('entity' => $entity), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'contains', array('entity' => $entity), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getEventManager', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getConfiguration', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'isOpen', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getUnitOfWork', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getProxyFactory', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'initializeObject', array('obj' => $obj), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'getFilters', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'isFiltersStateClean', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'hasFilters', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return $this->valueHolderb03ee->hasFilters();
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

        $instance->initializer5db93 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb03ee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb03ee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb03ee->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, '__get', ['name' => $name], $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        if (isset(self::$publicProperties50d0d[$name])) {
            return $this->valueHolderb03ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb03ee;

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

        $targetObject = $this->valueHolderb03ee;
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
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb03ee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb03ee;
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
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, '__isset', array('name' => $name), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb03ee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb03ee;
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
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, '__unset', array('name' => $name), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb03ee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb03ee;
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
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, '__clone', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        $this->valueHolderb03ee = clone $this->valueHolderb03ee;
    }

    public function __sleep()
    {
        $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, '__sleep', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;

        return array('valueHolderb03ee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5db93 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5db93;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5db93 && ($this->initializer5db93->__invoke($valueHolderb03ee, $this, 'initializeProxy', array(), $this->initializer5db93) || 1) && $this->valueHolderb03ee = $valueHolderb03ee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb03ee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb03ee;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
