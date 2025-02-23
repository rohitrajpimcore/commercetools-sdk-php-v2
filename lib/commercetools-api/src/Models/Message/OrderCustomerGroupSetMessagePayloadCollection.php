<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<OrderCustomerGroupSetMessagePayload>
 * @method OrderCustomerGroupSetMessagePayload current()
 * @method OrderCustomerGroupSetMessagePayload end()
 * @method OrderCustomerGroupSetMessagePayload at($offset)
 */
class OrderCustomerGroupSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert OrderCustomerGroupSetMessagePayload $value
     * @psalm-param OrderCustomerGroupSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderCustomerGroupSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderCustomerGroupSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderCustomerGroupSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderCustomerGroupSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderCustomerGroupSetMessagePayload $data */
                $data = OrderCustomerGroupSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
