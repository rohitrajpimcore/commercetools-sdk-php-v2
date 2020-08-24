<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\ImageCollection;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceModel;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @internal
 */
final class LineItemProductVariantImportDraftModel extends JsonObjectModel implements LineItemProductVariantImportDraft
{
    /**
     * @var ?ProductKeyReference
     */
    protected $product;

    /**
     * @var ?string
     */
    protected $sku;

    /**
     * @var ?LineItemPriceCollection
     */
    protected $prices;

    /**
     * @var ?AttributeCollection
     */
    protected $attributes;

    /**
     * @var ?ImageCollection
     */
    protected $images;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductKeyReference $product = null,
        ?string $sku = null,
        ?LineItemPriceCollection $prices = null,
        ?AttributeCollection $attributes = null,
        ?ImageCollection $images = null
    ) {
        $this->product = $product;
        $this->sku = $sku;
        $this->prices = $prices;
        $this->attributes = $attributes;
        $this->images = $images;
    }

    /**
     * <p>Maps to <code>ProductVariant.product</code>.</p>
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductKeyReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.sku</code>.</p>
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.prices</code></p>
     *
     * @return null|LineItemPriceCollection
     */
    public function getPrices()
    {
        if (is_null($this->prices)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->prices = LineItemPriceCollection::fromArray($data);
        }

        return $this->prices;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.attributes</code></p>
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * <p>Maps to <code>ProductVariantImportDraft.images</code>.</p>
     *
     * @return null|ImageCollection
     */
    public function getImages()
    {
        if (is_null($this->images)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_IMAGES);
            if (is_null($data)) {
                return null;
            }
            $this->images = ImageCollection::fromArray($data);
        }

        return $this->images;
    }


    /**
     * @param ?ProductKeyReference $product
     */
    public function setProduct(?ProductKeyReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?LineItemPriceCollection $prices
     */
    public function setPrices(?LineItemPriceCollection $prices): void
    {
        $this->prices = $prices;
    }

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void
    {
        $this->images = $images;
    }
}
