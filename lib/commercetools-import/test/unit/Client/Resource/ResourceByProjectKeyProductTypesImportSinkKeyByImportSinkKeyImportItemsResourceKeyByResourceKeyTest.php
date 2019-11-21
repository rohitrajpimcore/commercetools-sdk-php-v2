<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Import\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Import\Client\ImportRoot;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductTypesImportSinkKeyByImportSinkKeyImportItemsResourceKeyByResourceKeyGet' => [
                function(ImportRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productTypes()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importItems()
                        ->resourceKeyWithResourceKeyValue("resourceKey")
                        ->get();
                },
                'get',
                '{projectKey}/product-types/importSinkKey={importSinkKey}/import-items/resourceKey={resourceKey}',
            ]
        ];
    }
    
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}