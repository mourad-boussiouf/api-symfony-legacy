<?php

namespace ContainerHgbJcQJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0b467 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf58a7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties78efd = [
        
    ];

    public function getConnection()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getConnection', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getMetadataFactory', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getExpressionBuilder', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'beginTransaction', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getCache', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'transactional', array('func' => $func), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'commit', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->commit();
    }

    public function rollback()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'rollback', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getClassMetadata', array('className' => $className), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'createQuery', array('dql' => $dql), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'createNamedQuery', array('name' => $name), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'createQueryBuilder', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'flush', array('entity' => $entity), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'clear', array('entityName' => $entityName), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->clear($entityName);
    }

    public function close()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'close', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->close();
    }

    public function persist($entity)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'persist', array('entity' => $entity), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'remove', array('entity' => $entity), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'refresh', array('entity' => $entity), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'detach', array('entity' => $entity), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'merge', array('entity' => $entity), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'contains', array('entity' => $entity), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getEventManager', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getConfiguration', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'isOpen', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getUnitOfWork', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getProxyFactory', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'initializeObject', array('obj' => $obj), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'getFilters', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'isFiltersStateClean', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'hasFilters', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return $this->valueHolder0b467->hasFilters();
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

        $instance->initializerf58a7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder0b467) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0b467 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0b467->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, '__get', ['name' => $name], $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        if (isset(self::$publicProperties78efd[$name])) {
            return $this->valueHolder0b467->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b467;

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

        $targetObject = $this->valueHolder0b467;
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
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b467;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0b467;
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
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, '__isset', array('name' => $name), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b467;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0b467;
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
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, '__unset', array('name' => $name), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0b467;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0b467;
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
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, '__clone', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        $this->valueHolder0b467 = clone $this->valueHolder0b467;
    }

    public function __sleep()
    {
        $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, '__sleep', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;

        return array('valueHolder0b467');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf58a7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf58a7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf58a7 && ($this->initializerf58a7->__invoke($valueHolder0b467, $this, 'initializeProxy', array(), $this->initializerf58a7) || 1) && $this->valueHolder0b467 = $valueHolder0b467;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0b467;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0b467;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
