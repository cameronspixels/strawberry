<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Express;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Entity extends \Concrete\Core\Entity\Express\Entity implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'name', 'handle', 'plural_handle', 'label_mask', 'supports_custom_display_order', 'description', 'result_column_set', 'include_in_public_list', 'entity_results_node_id', 'use_separate_site_result_buckets', 'items_per_page', 'attributes', 'associations', 'forms', 'default_view_form', 'default_edit_form', 'entries', 'created_date', 'package'];
        }

        return ['__isInitialized__', 'id', 'name', 'handle', 'plural_handle', 'label_mask', 'supports_custom_display_order', 'description', 'result_column_set', 'include_in_public_list', 'entity_results_node_id', 'use_separate_site_result_buckets', 'items_per_page', 'attributes', 'associations', 'forms', 'default_view_form', 'default_edit_form', 'entries', 'created_date', 'package'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Entity $proxy) {
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
    public function getEntries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntries', []);

        return parent::getEntries();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntries($entries)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntries', [$entries]);

        return parent::setEntries($entries);
    }

    /**
     * {@inheritDoc}
     */
    public function getHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandle', []);

        return parent::getHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setHandle($handle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandle', [$handle]);

        return parent::setHandle($handle);
    }

    /**
     * {@inheritDoc}
     */
    public function getPluralHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPluralHandle', []);

        return parent::getPluralHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setPluralHandle($plural_handle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPluralHandle', [$plural_handle]);

        return parent::setPluralHandle($plural_handle);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsCustomDisplayOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'supportsCustomDisplayOrder', []);

        return parent::supportsCustomDisplayOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupportsCustomDisplayOrder($supports_custom_display_order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupportsCustomDisplayOrder', [$supports_custom_display_order]);

        return parent::setSupportsCustomDisplayOrder($supports_custom_display_order);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsEntrySpecificPermissions(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'supportsEntrySpecificPermissions', []);

        return parent::supportsEntrySpecificPermissions();
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnedBy', []);

        return parent::getOwnedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getIncludeInPublicList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIncludeInPublicList', []);

        return parent::getIncludeInPublicList();
    }

    /**
     * {@inheritDoc}
     */
    public function setIncludeInPublicList($include_in_public_list)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIncludeInPublicList', [$include_in_public_list]);

        return parent::setIncludeInPublicList($include_in_public_list);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabelMask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabelMask', []);

        return parent::getLabelMask();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabelMask($label_mask)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabelMask', [$label_mask]);

        return parent::setLabelMask($label_mask);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityDisplayDescription($format = 'html')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityDisplayDescription', [$format]);

        return parent::getEntityDisplayDescription($format);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedDate', []);

        return parent::getCreatedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedDate($created_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedDate', [$created_date]);

        return parent::setCreatedDate($created_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getResultColumnSet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResultColumnSet', []);

        return parent::getResultColumnSet();
    }

    /**
     * {@inheritDoc}
     */
    public function setResultColumnSet($result_column_set)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResultColumnSet', [$result_column_set]);

        return parent::setResultColumnSet($result_column_set);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultViewForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultViewForm', []);

        return parent::getDefaultViewForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultViewForm($default_view_form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultViewForm', [$default_view_form]);

        return parent::setDefaultViewForm($default_view_form);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultEditForm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultEditForm', []);

        return parent::getDefaultEditForm();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultEditForm($default_edit_form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultEditForm', [$default_edit_form]);

        return parent::setDefaultEditForm($default_edit_form);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemsPerPage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemsPerPage', []);

        return parent::getItemsPerPage();
    }

    /**
     * {@inheritDoc}
     */
    public function setItemsPerPage($items_per_page)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setItemsPerPage', [$items_per_page]);

        return parent::setItemsPerPage($items_per_page);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityDisplayName($format = 'html')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityDisplayName', [$format]);

        return parent::getEntityDisplayName($format);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributes', []);

        return parent::getAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributes($attributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributes', [$attributes]);

        return parent::setAttributes($attributes);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociations', []);

        return parent::getAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssociations($associations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssociations', [$associations]);

        return parent::setAssociations($associations);
    }

    /**
     * {@inheritDoc}
     */
    public function getForms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForms', []);

        return parent::getForms();
    }

    /**
     * {@inheritDoc}
     */
    public function setForms($forms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setForms', [$forms]);

        return parent::setForms($forms);
    }

    /**
     * {@inheritDoc}
     */
    public function getForm($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForm', [$name]);

        return parent::getForm($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityResultsNodeId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityResultsNodeId', []);

        return parent::getEntityResultsNodeId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityResultsNodeObject(\Concrete\Core\Entity\Site\Site $site = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityResultsNodeObject', [$site]);

        return parent::getEntityResultsNodeObject($site);
    }

    /**
     * {@inheritDoc}
     */
    public function setEntityResultsNodeId($entity_results_node_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntityResultsNodeId', [$entity_results_node_id]);

        return parent::setEntityResultsNodeId($entity_results_node_id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeKeyCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeKeyCategory', []);

        return parent::getAttributeKeyCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectIdentifier', []);

        return parent::getPermissionObjectIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionResponseClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionResponseClassName', []);

        return parent::getPermissionResponseClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociation($handle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociation', [$handle]);

        return parent::getAssociation($handle);
    }

    /**
     * {@inheritDoc}
     */
    public function usesSeparateSiteResultsBuckets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'usesSeparateSiteResultsBuckets', []);

        return parent::usesSeparateSiteResultsBuckets();
    }

    /**
     * {@inheritDoc}
     */
    public function setUseSeparateSiteResultBuckets($use_separate_site_result_buckets)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseSeparateSiteResultBuckets', [$use_separate_site_result_buckets]);

        return parent::setUseSeparateSiteResultBuckets($use_separate_site_result_buckets);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionAssignmentClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionAssignmentClassName', []);

        return parent::getPermissionAssignmentClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectKeyCategoryHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectKeyCategoryHandle', []);

        return parent::getPermissionObjectKeyCategoryHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getExporter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExporter', []);

        return parent::getExporter();
    }

    /**
     * {@inheritDoc}
     */
    public function getController()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getController', []);

        return parent::getController();
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
