<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * OrderReturnTax Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class OrderReturnTax implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'uid' => 'string',
        'source_tax_uid' => 'string',
        'catalog_object_id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'percentage' => 'string',
        'applied_money' => '\SquareConnect\Model\Money',
        'scope' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'uid' => 'uid',
        'source_tax_uid' => 'source_tax_uid',
        'catalog_object_id' => 'catalog_object_id',
        'name' => 'name',
        'type' => 'type',
        'percentage' => 'percentage',
        'applied_money' => 'applied_money',
        'scope' => 'scope'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'uid' => 'setUid',
        'source_tax_uid' => 'setSourceTaxUid',
        'catalog_object_id' => 'setCatalogObjectId',
        'name' => 'setName',
        'type' => 'setType',
        'percentage' => 'setPercentage',
        'applied_money' => 'setAppliedMoney',
        'scope' => 'setScope'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'uid' => 'getUid',
        'source_tax_uid' => 'getSourceTaxUid',
        'catalog_object_id' => 'getCatalogObjectId',
        'name' => 'getName',
        'type' => 'getType',
        'percentage' => 'getPercentage',
        'applied_money' => 'getAppliedMoney',
        'scope' => 'getScope'
    );
  
    /**
      * $uid The return tax's Unique identifier, unique only within this order.
      * @var string
      */
    protected $uid;
    /**
      * $source_tax_uid `uid` of the Tax from the Order which contains the original charge of this tax.
      * @var string
      */
    protected $source_tax_uid;
    /**
      * $catalog_object_id The catalog object id referencing [CatalogTax](#type-catalogtax).
      * @var string
      */
    protected $catalog_object_id;
    /**
      * $name The tax's name.
      * @var string
      */
    protected $name;
    /**
      * $type Indicates the calculation method used to apply the tax. See [OrderLineItemTaxType](#type-orderlineitemtaxtype) for possible values
      * @var string
      */
    protected $type;
    /**
      * $percentage The percentage of the tax, as a string representation of a decimal number.  A value of `7.25` corresponds to a percentage of 7.25%.
      * @var string
      */
    protected $percentage;
    /**
      * $applied_money The amount of the money applied by the tax in an order.
      * @var \SquareConnect\Model\Money
      */
    protected $applied_money;
    /**
      * $scope Indicates the level at which the tax applies. This field is set by the server. If set in a CreateOrder request, it will be ignored on write. See [OrderLineItemTaxScope](#type-orderlineitemtaxscope) for possible values
      * @var string
      */
    protected $scope;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["uid"])) {
              $this->uid = $data["uid"];
            } else {
              $this->uid = null;
            }
            if (isset($data["source_tax_uid"])) {
              $this->source_tax_uid = $data["source_tax_uid"];
            } else {
              $this->source_tax_uid = null;
            }
            if (isset($data["catalog_object_id"])) {
              $this->catalog_object_id = $data["catalog_object_id"];
            } else {
              $this->catalog_object_id = null;
            }
            if (isset($data["name"])) {
              $this->name = $data["name"];
            } else {
              $this->name = null;
            }
            if (isset($data["type"])) {
              $this->type = $data["type"];
            } else {
              $this->type = null;
            }
            if (isset($data["percentage"])) {
              $this->percentage = $data["percentage"];
            } else {
              $this->percentage = null;
            }
            if (isset($data["applied_money"])) {
              $this->applied_money = $data["applied_money"];
            } else {
              $this->applied_money = null;
            }
            if (isset($data["scope"])) {
              $this->scope = $data["scope"];
            } else {
              $this->scope = null;
            }
        }
    }
    /**
     * Gets uid
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }
  
    /**
     * Sets uid
     * @param string $uid The return tax's Unique identifier, unique only within this order.
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }
    /**
     * Gets source_tax_uid
     * @return string
     */
    public function getSourceTaxUid()
    {
        return $this->source_tax_uid;
    }
  
    /**
     * Sets source_tax_uid
     * @param string $source_tax_uid `uid` of the Tax from the Order which contains the original charge of this tax.
     * @return $this
     */
    public function setSourceTaxUid($source_tax_uid)
    {
        $this->source_tax_uid = $source_tax_uid;
        return $this;
    }
    /**
     * Gets catalog_object_id
     * @return string
     */
    public function getCatalogObjectId()
    {
        return $this->catalog_object_id;
    }
  
    /**
     * Sets catalog_object_id
     * @param string $catalog_object_id The catalog object id referencing [CatalogTax](#type-catalogtax).
     * @return $this
     */
    public function setCatalogObjectId($catalog_object_id)
    {
        $this->catalog_object_id = $catalog_object_id;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The tax's name.
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Indicates the calculation method used to apply the tax. See [OrderLineItemTaxType](#type-orderlineitemtaxtype) for possible values
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Gets percentage
     * @return string
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
  
    /**
     * Sets percentage
     * @param string $percentage The percentage of the tax, as a string representation of a decimal number.  A value of `7.25` corresponds to a percentage of 7.25%.
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Gets applied_money
     * @return \SquareConnect\Model\Money
     */
    public function getAppliedMoney()
    {
        return $this->applied_money;
    }
  
    /**
     * Sets applied_money
     * @param \SquareConnect\Model\Money $applied_money The amount of the money applied by the tax in an order.
     * @return $this
     */
    public function setAppliedMoney($applied_money)
    {
        $this->applied_money = $applied_money;
        return $this;
    }
    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }
  
    /**
     * Sets scope
     * @param string $scope Indicates the level at which the tax applies. This field is set by the server. If set in a CreateOrder request, it will be ignored on write. See [OrderLineItemTaxScope](#type-orderlineitemtaxscope) for possible values
     * @return $this
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
