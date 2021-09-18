<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Board;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class InstanceSlotRule extends \Concrete\Core\Entity\Board\InstanceSlotRule implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'boardInstanceSlotRuleID', 'instance', 'slot', 'batchIdentifier', 'bID', 'user', 'notes', 'timezone', 'isLocked', 'dateCreated', 'startDate', 'endDate', 'ruleType'];
        }

        return ['__isInitialized__', 'boardInstanceSlotRuleID', 'instance', 'slot', 'batchIdentifier', 'bID', 'user', 'notes', 'timezone', 'isLocked', 'dateCreated', 'startDate', 'endDate', 'ruleType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (InstanceSlotRule $proxy) {
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
    public function getBoardInstanceSlotRuleID()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getBoardInstanceSlotRuleID();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoardInstanceSlotRuleID', []);

        return parent::getBoardInstanceSlotRuleID();
    }

    /**
     * {@inheritDoc}
     */
    public function getInstance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstance', []);

        return parent::getInstance();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstance($instance): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstance', [$instance]);

        parent::setInstance($instance);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlot', []);

        return parent::getSlot();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlot($slot): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlot', [$slot]);

        parent::setSlot($slot);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($dateCreated): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', [$dateCreated]);

        parent::setDateCreated($dateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuleType', []);

        return parent::getRuleType();
    }

    /**
     * {@inheritDoc}
     */
    public function setRuleType($ruleType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRuleType', [$ruleType]);

        parent::setRuleType($ruleType);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockID', []);

        return parent::getBlockID();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockID($bID): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockID', [$bID]);

        parent::setBlockID($bID);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', []);

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($startDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', [$startDate]);

        parent::setStartDate($startDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDate', []);

        return parent::getEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndDate($endDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndDate', [$endDate]);

        parent::setEndDate($endDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimezone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimezone', []);

        return parent::getTimezone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimezone($timezone): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimezone', [$timezone]);

        parent::setTimezone($timezone);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function getRuleFormatter(): \Concrete\Core\Board\Instance\Slot\Rule\FormatterInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuleFormatter', []);

        return parent::getRuleFormatter();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes($notes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', [$notes]);

        parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function isLocked(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isLocked', []);

        return parent::isLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsLocked(bool $isLocked): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsLocked', [$isLocked]);

        parent::setIsLocked($isLocked);
    }

    /**
     * {@inheritDoc}
     */
    public function getBatchIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBatchIdentifier', []);

        return parent::getBatchIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setBatchIdentifier($batchIdentifier): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBatchIdentifier', [$batchIdentifier]);

        parent::setBatchIdentifier($batchIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

}
