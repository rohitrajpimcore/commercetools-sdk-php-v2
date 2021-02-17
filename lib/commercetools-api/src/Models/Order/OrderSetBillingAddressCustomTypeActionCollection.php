<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderSetBillingAddressCustomTypeAction>
 * @method OrderSetBillingAddressCustomTypeAction current()
 * @method OrderSetBillingAddressCustomTypeAction at($offset)
 */
class OrderSetBillingAddressCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderSetBillingAddressCustomTypeAction $value
     * @psalm-param OrderSetBillingAddressCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderSetBillingAddressCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderSetBillingAddressCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderSetBillingAddressCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderSetBillingAddressCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderSetBillingAddressCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
