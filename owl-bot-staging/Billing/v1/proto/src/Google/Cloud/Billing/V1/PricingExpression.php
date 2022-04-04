<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_catalog.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Expresses a mathematical pricing formula. For Example:-
 * `usage_unit: GBy`
 * `tiered_rates:`
 *    `[start_usage_amount: 20, unit_price: $10]`
 *    `[start_usage_amount: 100, unit_price: $5]`
 * The above expresses a pricing formula where the first 20GB is free, the
 * next 80GB is priced at $10 per GB followed by $5 per GB for additional
 * usage.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.PricingExpression</code>
 */
class PricingExpression extends \Google\Protobuf\Internal\Message
{
    /**
     * The short hand for unit of usage this pricing is specified in.
     * Example: usage_unit of "GiBy" means that usage is specified in "Gibi Byte".
     *
     * Generated from protobuf field <code>string usage_unit = 1;</code>
     */
    protected $usage_unit = '';
    /**
     * The unit of usage in human readable form.
     * Example: "gibi byte".
     *
     * Generated from protobuf field <code>string usage_unit_description = 4;</code>
     */
    protected $usage_unit_description = '';
    /**
     * The base unit for the SKU which is the unit used in usage exports.
     * Example: "By"
     *
     * Generated from protobuf field <code>string base_unit = 5;</code>
     */
    protected $base_unit = '';
    /**
     * The base unit in human readable form.
     * Example: "byte".
     *
     * Generated from protobuf field <code>string base_unit_description = 6;</code>
     */
    protected $base_unit_description = '';
    /**
     * Conversion factor for converting from price per usage_unit to price per
     * base_unit, and start_usage_amount to start_usage_amount in base_unit.
     * unit_price / base_unit_conversion_factor = price per base_unit.
     * start_usage_amount * base_unit_conversion_factor = start_usage_amount in
     * base_unit.
     *
     * Generated from protobuf field <code>double base_unit_conversion_factor = 7;</code>
     */
    protected $base_unit_conversion_factor = 0.0;
    /**
     * The recommended quantity of units for displaying pricing info. When
     * displaying pricing info it is recommended to display:
     * (unit_price * display_quantity) per display_quantity usage_unit.
     * This field does not affect the pricing formula and is for display purposes
     * only.
     * Example: If the unit_price is "0.0001 USD", the usage_unit is "GB" and
     * the display_quantity is "1000" then the recommended way of displaying the
     * pricing info is "0.10 USD per 1000 GB"
     *
     * Generated from protobuf field <code>double display_quantity = 2;</code>
     */
    protected $display_quantity = 0.0;
    /**
     * The list of tiered rates for this pricing. The total cost is computed by
     * applying each of the tiered rates on usage. This repeated list is sorted
     * by ascending order of start_usage_amount.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.PricingExpression.TierRate tiered_rates = 3;</code>
     */
    private $tiered_rates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $usage_unit
     *           The short hand for unit of usage this pricing is specified in.
     *           Example: usage_unit of "GiBy" means that usage is specified in "Gibi Byte".
     *     @type string $usage_unit_description
     *           The unit of usage in human readable form.
     *           Example: "gibi byte".
     *     @type string $base_unit
     *           The base unit for the SKU which is the unit used in usage exports.
     *           Example: "By"
     *     @type string $base_unit_description
     *           The base unit in human readable form.
     *           Example: "byte".
     *     @type float $base_unit_conversion_factor
     *           Conversion factor for converting from price per usage_unit to price per
     *           base_unit, and start_usage_amount to start_usage_amount in base_unit.
     *           unit_price / base_unit_conversion_factor = price per base_unit.
     *           start_usage_amount * base_unit_conversion_factor = start_usage_amount in
     *           base_unit.
     *     @type float $display_quantity
     *           The recommended quantity of units for displaying pricing info. When
     *           displaying pricing info it is recommended to display:
     *           (unit_price * display_quantity) per display_quantity usage_unit.
     *           This field does not affect the pricing formula and is for display purposes
     *           only.
     *           Example: If the unit_price is "0.0001 USD", the usage_unit is "GB" and
     *           the display_quantity is "1000" then the recommended way of displaying the
     *           pricing info is "0.10 USD per 1000 GB"
     *     @type \Google\Cloud\Billing\V1\PricingExpression\TierRate[]|\Google\Protobuf\Internal\RepeatedField $tiered_rates
     *           The list of tiered rates for this pricing. The total cost is computed by
     *           applying each of the tiered rates on usage. This repeated list is sorted
     *           by ascending order of start_usage_amount.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudCatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The short hand for unit of usage this pricing is specified in.
     * Example: usage_unit of "GiBy" means that usage is specified in "Gibi Byte".
     *
     * Generated from protobuf field <code>string usage_unit = 1;</code>
     * @return string
     */
    public function getUsageUnit()
    {
        return $this->usage_unit;
    }

    /**
     * The short hand for unit of usage this pricing is specified in.
     * Example: usage_unit of "GiBy" means that usage is specified in "Gibi Byte".
     *
     * Generated from protobuf field <code>string usage_unit = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUsageUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->usage_unit = $var;

        return $this;
    }

    /**
     * The unit of usage in human readable form.
     * Example: "gibi byte".
     *
     * Generated from protobuf field <code>string usage_unit_description = 4;</code>
     * @return string
     */
    public function getUsageUnitDescription()
    {
        return $this->usage_unit_description;
    }

    /**
     * The unit of usage in human readable form.
     * Example: "gibi byte".
     *
     * Generated from protobuf field <code>string usage_unit_description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUsageUnitDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->usage_unit_description = $var;

        return $this;
    }

    /**
     * The base unit for the SKU which is the unit used in usage exports.
     * Example: "By"
     *
     * Generated from protobuf field <code>string base_unit = 5;</code>
     * @return string
     */
    public function getBaseUnit()
    {
        return $this->base_unit;
    }

    /**
     * The base unit for the SKU which is the unit used in usage exports.
     * Example: "By"
     *
     * Generated from protobuf field <code>string base_unit = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_unit = $var;

        return $this;
    }

    /**
     * The base unit in human readable form.
     * Example: "byte".
     *
     * Generated from protobuf field <code>string base_unit_description = 6;</code>
     * @return string
     */
    public function getBaseUnitDescription()
    {
        return $this->base_unit_description;
    }

    /**
     * The base unit in human readable form.
     * Example: "byte".
     *
     * Generated from protobuf field <code>string base_unit_description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUnitDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_unit_description = $var;

        return $this;
    }

    /**
     * Conversion factor for converting from price per usage_unit to price per
     * base_unit, and start_usage_amount to start_usage_amount in base_unit.
     * unit_price / base_unit_conversion_factor = price per base_unit.
     * start_usage_amount * base_unit_conversion_factor = start_usage_amount in
     * base_unit.
     *
     * Generated from protobuf field <code>double base_unit_conversion_factor = 7;</code>
     * @return float
     */
    public function getBaseUnitConversionFactor()
    {
        return $this->base_unit_conversion_factor;
    }

    /**
     * Conversion factor for converting from price per usage_unit to price per
     * base_unit, and start_usage_amount to start_usage_amount in base_unit.
     * unit_price / base_unit_conversion_factor = price per base_unit.
     * start_usage_amount * base_unit_conversion_factor = start_usage_amount in
     * base_unit.
     *
     * Generated from protobuf field <code>double base_unit_conversion_factor = 7;</code>
     * @param float $var
     * @return $this
     */
    public function setBaseUnitConversionFactor($var)
    {
        GPBUtil::checkDouble($var);
        $this->base_unit_conversion_factor = $var;

        return $this;
    }

    /**
     * The recommended quantity of units for displaying pricing info. When
     * displaying pricing info it is recommended to display:
     * (unit_price * display_quantity) per display_quantity usage_unit.
     * This field does not affect the pricing formula and is for display purposes
     * only.
     * Example: If the unit_price is "0.0001 USD", the usage_unit is "GB" and
     * the display_quantity is "1000" then the recommended way of displaying the
     * pricing info is "0.10 USD per 1000 GB"
     *
     * Generated from protobuf field <code>double display_quantity = 2;</code>
     * @return float
     */
    public function getDisplayQuantity()
    {
        return $this->display_quantity;
    }

    /**
     * The recommended quantity of units for displaying pricing info. When
     * displaying pricing info it is recommended to display:
     * (unit_price * display_quantity) per display_quantity usage_unit.
     * This field does not affect the pricing formula and is for display purposes
     * only.
     * Example: If the unit_price is "0.0001 USD", the usage_unit is "GB" and
     * the display_quantity is "1000" then the recommended way of displaying the
     * pricing info is "0.10 USD per 1000 GB"
     *
     * Generated from protobuf field <code>double display_quantity = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDisplayQuantity($var)
    {
        GPBUtil::checkDouble($var);
        $this->display_quantity = $var;

        return $this;
    }

    /**
     * The list of tiered rates for this pricing. The total cost is computed by
     * applying each of the tiered rates on usage. This repeated list is sorted
     * by ascending order of start_usage_amount.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.PricingExpression.TierRate tiered_rates = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTieredRates()
    {
        return $this->tiered_rates;
    }

    /**
     * The list of tiered rates for this pricing. The total cost is computed by
     * applying each of the tiered rates on usage. This repeated list is sorted
     * by ascending order of start_usage_amount.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.v1.PricingExpression.TierRate tiered_rates = 3;</code>
     * @param \Google\Cloud\Billing\V1\PricingExpression\TierRate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTieredRates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Billing\V1\PricingExpression\TierRate::class);
        $this->tiered_rates = $arr;

        return $this;
    }

}

