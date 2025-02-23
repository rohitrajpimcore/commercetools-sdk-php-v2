<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\State\StateReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderStateTransitionMessagePayload extends MessagePayload
{
    public const FIELD_STATE = 'state';
    public const FIELD_OLD_STATE = 'oldState';
    public const FIELD_FORCE = 'force';

    /**
     * @return null|StateReference
     */
    public function getState();

    /**
     * @return null|StateReference
     */
    public function getOldState();

    /**
     * @return null|bool
     */
    public function getForce();

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?StateReference $oldState
     */
    public function setOldState(?StateReference $oldState): void;

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void;
}
