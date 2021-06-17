<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingRateInput>
 */
final class ShippingRateInputBuilder implements Builder
{
    public function build(): ShippingRateInput
    {
        return new ShippingRateInputModel(
        );
    }

    public static function of(): ShippingRateInputBuilder
    {
        return new self();
    }
}
