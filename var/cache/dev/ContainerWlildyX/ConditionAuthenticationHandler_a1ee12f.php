<?php

namespace ContainerWlildyX;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/ConditionAuthenticationHandler.php';

class ConditionAuthenticationHandler_a1ee12f extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler|null wrapped object, if the proxy is initialized
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

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        return $this->valueHolder787d7->beginTwoFactorAuthentication($context);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($instance);

        $instance->initializer8c834 = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TwoFactorConditionInterface $condition)
    {
        static $reflection;

        if (! $this->valueHolder787d7) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');
            $this->valueHolder787d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($this);

        }

        $this->valueHolder787d7->__construct($authenticationHandler, $condition);
    }

    public function & __get($name)
    {
        $this->initializer8c834 && ($this->initializer8c834->__invoke($valueHolder787d7, $this, '__get', ['name' => $name], $this->initializer8c834) || 1) && $this->valueHolder787d7 = $valueHolder787d7;

        if (isset(self::$publicPropertiese3e28[$name])) {
            return $this->valueHolder787d7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($this);
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

if (!\class_exists('ConditionAuthenticationHandler_a1ee12f', false)) {
    \class_alias(__NAMESPACE__.'\\ConditionAuthenticationHandler_a1ee12f', 'ConditionAuthenticationHandler_a1ee12f', false);
}
