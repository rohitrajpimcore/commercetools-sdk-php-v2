<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<OrderShippingRateInputSetMessage>
 * @method OrderShippingRateInputSetMessage current()
 * @method OrderShippingRateInputSetMessage end()
 * @method OrderShippingRateInputSetMessage at($offset)
 */
class OrderShippingRateInputSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert OrderShippingRateInputSetMessage $value
     * @psalm-param OrderShippingRateInputSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderShippingRateInputSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderShippingRateInputSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderShippingRateInputSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderShippingRateInputSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderShippingRateInputSetMessage $data */
                $data = OrderShippingRateInputSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
