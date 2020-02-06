<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsMatchesCartGet
 *
 * @internal
 */
class ResourceByProjectKeyShippingMethodsMatchesCartTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsMatchesCartGet_withCartId' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchesCart()
                        ->get()
                        ->withCartId('cartId')
                    ;
                },
                'get',
                '{projectKey}/shipping-methods/matches-cart?cartId=cartId',
            ],
            'ByProjectKeyShippingMethodsMatchesCartGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchesCart()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/shipping-methods/matches-cart?expand=expand',
            ],
            'ByProjectKeyShippingMethodsMatchesCartGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchesCart()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/shipping-methods/matches-cart',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyShippingMethodsMatchesCartGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchesCart()
                        ->get()
                    ;
                },
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
