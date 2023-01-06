<?php

namespace ContainerWlildyX;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
     */
    private $valueHolder787d7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8c834 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese3e28 = [
        
    ];

    public function commit() : bool
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'commit', array(), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'deleteItems', array('keys' => $keys), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'invalidateTags', array('tags' => $tags), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'hasItem', array('key' => $key), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'clear', array('prefix' => $prefix), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'deleteItem', array('key' => $key), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'getItem', array('key' => $key), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'getItems', array('keys' => $keys), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'save', array('item' => $item), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'saveDeferred', array('item' => $item), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'enableVersioning', array('enable' => $enable), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'reset', array(), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'setLogger', array('logger' => $logger), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'delete', array('key' => $key), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->delete($key);
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

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($instance);

        $instance->initializer8c834 = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder787d7) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder787d7 = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder787d7->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__get', ['name' => $name], $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        if (isset(self::$publicPropertiese3e28[$name])) {
            return $this->valueHolder787d7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder787d7;

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

        $targetObject = $this->valueHolder787d7;
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
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder787d7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder787d7;
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
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__isset', array('name' => $name), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder787d7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder787d7;
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
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__unset', array('name' => $name), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder787d7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder787d7;
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
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__clone', array(), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        $this->valueHolder787d7 = clone $this->valueHolder787d7;
    }

    public function __sleep()
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__sleep', array(), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return array('valueHolder787d7');
    }

    public function __wakeup()
    {
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8c834 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8c834;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'initializeProxy', array(), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder787d7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder787d7;
    }

    public function __destruct()
    {
        $this->initializer8c834 || $this->valueHolder787d7->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
