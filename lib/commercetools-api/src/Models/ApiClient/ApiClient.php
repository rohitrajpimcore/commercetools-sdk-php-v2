<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ApiClient extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_SECRET = 'secret';
    public const FIELD_LAST_USED_AT = 'lastUsedAt';
    public const FIELD_DELETE_AT = 'deleteAt';
    public const FIELD_CREATED_AT = 'createdAt';

    /**
     * <p>Unique ID of the API client.
     * This is the OAuth2 <code>client_id</code> that can be used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>Name of the API Client.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>Whitespace-separated list of <a href="/../api/scopes">OAuth scopes</a> that can be used when <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtaining an access token</a>.</p>
     *
     * @return null|string
     */
    public function getScope();

    /**
     * <p>Only shown once in the response of creating the API Client.
     * This is the OAuth2 <code>client_secret</code> that can be used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|string
     */
    public function getSecret();

    /**
     * <p>Date of the last day this API Client was used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastUsedAt();

    /**
     * <p>If set, the client will be deleted on (or shortly after) this point in time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getDeleteAt();

    /**
     * <p>Date and time (UTC) the API Client was initially created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void;

    /**
     * @param ?string $secret
     */
    public function setSecret(?string $secret): void;

    /**
     * @param ?DateTimeImmutable $lastUsedAt
     */
    public function setLastUsedAt(?DateTimeImmutable $lastUsedAt): void;

    /**
     * @param ?DateTimeImmutable $deleteAt
     */
    public function setDeleteAt(?DateTimeImmutable $deleteAt): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;
}
