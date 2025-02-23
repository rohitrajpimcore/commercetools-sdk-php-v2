<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderAddCustomLineItemActionModel extends JsonObjectModel implements StagedOrderAddCustomLineItemAction
{
    public const DISCRIMINATOR_VALUE = 'addCustomLineItem';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Money
     */
    protected $money;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?float
     */
    protected $quantity;

    /**
     * @var ?string
     */
    protected $slug;

    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $money = null,
        ?LocalizedString $name = null,
        ?float $quantity = null,
        ?string $slug = null,
        ?TaxCategoryResourceIdentifier $taxCategory = null,
        ?CustomFieldsDraft $custom = null,
        ?ExternalTaxRateDraft $externalTaxRate = null
    ) {
        $this->money = $money;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->slug = $slug;
        $this->taxCategory = $taxCategory;
        $this->custom = $custom;
        $this->externalTaxRate = $externalTaxRate;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|Money
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }

            $this->money = MoneyModel::of($data);
        }

        return $this->money;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|float
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (float) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|string
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }
            $this->slug = (string) $data;
        }

        return $this->slug;
    }

    /**
     * <p><a href="/../api/types#resourceidentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:TaxCategory">TaxCategory</a>.</p>
     *
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate()
    {
        if (is_null($this->externalTaxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->externalTaxRate;
    }


    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void
    {
        $this->money = $money;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
}
