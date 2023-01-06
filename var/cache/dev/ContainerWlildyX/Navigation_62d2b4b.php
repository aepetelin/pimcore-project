<?php

namespace ContainerWlildyX;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
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

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'build', array('params' => $params), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'getRenderer', array('alias' => $alias), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'setCharset', array('charset' => $charset), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'getCharset', array(), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->getCharset();
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

        unset($instance->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);

        $instance->initializer8c834 = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder787d7) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder787d7 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder787d7->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__get', ['name' => $name], $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        if (isset(self::$publicPropertiese3e28[$name])) {
            return $this->valueHolder787d7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
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
}

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
