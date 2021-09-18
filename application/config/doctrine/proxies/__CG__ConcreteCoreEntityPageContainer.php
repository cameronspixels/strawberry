<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Page;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Container extends \Concrete\Core\Entity\Page\Container implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'containerID', 'containerHandle', 'containerIcon', 'containerName', 'package'];
        }

        return ['__isInitialized__', 'containerID', 'containerHandle', 'containerIcon', 'containerName', 'package'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Container $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getContainerID(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getContainerID();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContainerID', []);

        return parent::getContainerID();
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerHandle(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContainerHandle', []);

        return parent::getContainerHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setContainerHandle(string $containerHandle): \Concrete\Core\Entity\Page\Container
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContainerHandle', [$containerHandle]);

        return parent::setContainerHandle($containerHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContainerName', []);

        return parent::getContainerName();
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerDisplayName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContainerDisplayName', []);

        return parent::getContainerDisplayName();
    }

    /**
     * {@inheritDoc}
     */
    public function setContainerName(string $containerName): \Concrete\Core\Entity\Page\Container
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContainerName', [$containerName]);

        return parent::setContainerName($containerName);
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerIcon(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContainerIcon', []);

        return parent::getContainerIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function setContainerIcon(string $containerIcon): \Concrete\Core\Entity\Page\Container
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContainerIcon', [$containerIcon]);

        return parent::setContainerIcon($containerIcon);
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerIconImage(bool $asTag = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContainerIconImage', [$asTag]);

        return parent::getContainerIconImage($asTag);
    }

    /**
     * {@inheritDoc}
     */
    public function export(\SimpleXMLElement $node): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'export', [$node]);

        parent::export($node);
    }

    /**
     * {@inheritDoc}
     */
    public function getPackage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackage', []);

        return parent::getPackage();
    }

    /**
     * {@inheritDoc}
     */
    public function setPackage($package)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPackage', [$package]);

        return parent::setPackage($package);
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageID', []);

        return parent::getPackageID();
    }

    /**
     * {@inheritDoc}
     */
    public function getPackageHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPackageHandle', []);

        return parent::getPackageHandle();
    }

}
