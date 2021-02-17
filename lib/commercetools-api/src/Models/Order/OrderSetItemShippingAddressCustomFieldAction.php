<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSetItemShippingAddressCustomFieldAction extends OrderUpdateAction
{
    public const FIELD_ADDRESS_KEY = 'addressKey';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getAddressKey();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
