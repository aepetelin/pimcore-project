<?php

namespace ContainerWlildyX;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Targeting/Debug/OverrideHandler.php';

class OverrideHandler_fb58919 extends \Pimcore\Targeting\Debug\OverrideHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Targeting\Debug\OverrideHandler|null wrapped object, if the proxy is initialized
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

    public function getForm(\Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\Form\FormInterface
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'getForm', array('request' => $request), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->getForm($request);
    }

    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'handleRequest', array('request' => $request), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->handleRequest($request);
    }

    public function handleForm(\Symfony\Component\Form\FormInterface $form, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'handleForm', array('form' => $form, 'request' => $request), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->handleForm($form, $request);
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

        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $instance, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($instance);

        $instance->initializer8c834 = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, $overrideHandlers)
    {
        static $reflection;

        if (! $this->valueHolder787d7) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');
            $this->valueHolder787d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);

        }

        $this->valueHolder787d7->__construct($formFactory, $overrideHandlers);
    }

    public function & __get($name)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__get', ['name' => $name], $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        if (isset(self::$publicPropertiese3e28[$name])) {
            return $this->valueHolder787d7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Targeting\\Debug\\OverrideHandler');

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
        \Closure::bind(function (\Pimcore\Targeting\Debug\OverrideHandler $instance) {
            unset($instance->formFactory, $instance->overrideHandlers);
        }, $this, 'Pimcore\\Targeting\\Debug\\OverrideHandler')->__invoke($this);
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

if (!\class_exists('OverrideHandler_fb58919', false)) {
    \class_alias(__NAMESPACE__.'\\OverrideHandler_fb58919', 'OverrideHandler_fb58919', false);
}
