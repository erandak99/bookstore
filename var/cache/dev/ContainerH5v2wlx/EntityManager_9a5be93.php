<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderbf7c8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4db95 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties01e8d = [
        
    ];

    public function getConnection()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getConnection', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getMetadataFactory', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getExpressionBuilder', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'beginTransaction', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getCache', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'transactional', array('func' => $func), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->transactional($func);
    }

    public function commit()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'commit', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->commit();
    }

    public function rollback()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'rollback', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getClassMetadata', array('className' => $className), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'createQuery', array('dql' => $dql), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'createNamedQuery', array('name' => $name), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'createQueryBuilder', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'flush', array('entity' => $entity), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->flush($entity);
    }

    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->find($entityName, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'clear', array('entityName' => $entityName), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->clear($entityName);
    }

    public function close()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'close', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->close();
    }

    public function persist($entity)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'persist', array('entity' => $entity), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'remove', array('entity' => $entity), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'refresh', array('entity' => $entity), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'detach', array('entity' => $entity), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'merge', array('entity' => $entity), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'contains', array('entity' => $entity), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getEventManager', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getConfiguration', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'isOpen', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getUnitOfWork', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getProxyFactory', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'initializeObject', array('obj' => $obj), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'getFilters', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'isFiltersStateClean', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'hasFilters', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return $this->valueHolderbf7c8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4db95 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbf7c8) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbf7c8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbf7c8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, '__get', ['name' => $name], $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        if (isset(self::$publicProperties01e8d[$name])) {
            return $this->valueHolderbf7c8->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf7c8;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolderbf7c8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf7c8;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderbf7c8;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, '__isset', array('name' => $name), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf7c8;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbf7c8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, '__unset', array('name' => $name), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbf7c8;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbf7c8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, '__clone', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        $this->valueHolderbf7c8 = clone $this->valueHolderbf7c8;
    }

    public function __sleep()
    {
        $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, '__sleep', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;

        return array('valueHolderbf7c8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer4db95 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer4db95;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4db95 && ($this->initializer4db95->__invoke($valueHolderbf7c8, $this, 'initializeProxy', array(), $this->initializer4db95) || 1) && $this->valueHolderbf7c8 = $valueHolderbf7c8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbf7c8;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolderbf7c8;
    }


}
