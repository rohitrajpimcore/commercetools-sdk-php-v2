<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Inventories;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface InventoryImport extends ImportResource
{
    public const FIELD_SKU = 'sku';
    public const FIELD_QUANTITY_ON_STOCK = 'quantityOnStock';
    public const FIELD_RESTOCKABLE_IN_DAYS = 'restockableInDays';
    public const FIELD_EXPECTED_DELIVERY = 'expectedDelivery';
    public const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    public const FIELD_CUSTOM = 'custom';

    /**
     * @return null|string
     */
    public function getSku();

    /**
     * <p>Maps to <code>Inventory.quantityOnStock</code></p>
     *
     * @return null|float
     */
    public function getQuantityOnStock();

    /**
     * <p>Maps to <code>Inventory.restockableInDays</code></p>
     *
     * @return null|float
     */
    public function getRestockableInDays();

    /**
     * @return null|DateTimeImmutable
     */
    public function getExpectedDelivery();

    /**
     * <p>References a channel by key.</p>
     *
     * @return null|ChannelKeyReference
     */
    public function getSupplyChannel();

    /**
     * <p>Maps to <code>Inventory.custom</code>.</p>
     *
     * @return null|Custom
     */
    public function getCustom();

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void;

    /**
     * @param ?float $quantityOnStock
     */
    public function setQuantityOnStock(?float $quantityOnStock): void;

    /**
     * @param ?float $restockableInDays
     */
    public function setRestockableInDays(?float $restockableInDays): void;

    /**
     * @param ?DateTimeImmutable $expectedDelivery
     */
    public function setExpectedDelivery(?DateTimeImmutable $expectedDelivery): void;

    /**
     * @param ?ChannelKeyReference $supplyChannel
     */
    public function setSupplyChannel(?ChannelKeyReference $supplyChannel): void;

    /**
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
