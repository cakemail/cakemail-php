<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\CustomAttributeApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class CustomAttributeApi
{

    private $openApiObj;

    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->openApiObj = new OpenAPI($client, $config, $selector);
    }

    private function fillParams($params, $allParams)
    {
        // fill in the provided values
        foreach ($params as $param => $value) {
            if (array_key_exists($param, $allParams)) {
                $allParams[$param]['value'] = $value;
            } else {
                // throw exception, parameter not found
                throw new ApiException('"' . $param . '" is not a valid parameter');
            }
        }

        return $allParams;
    }


    /**
     * Operation create
     *
     * Create a custom attribute
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\CreateCustomAttribute <b>$create_custom_attribute</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CreateAttributeResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'create_custom_attribute' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createCustomAttributeWithHttpInfo($allParams['list_id']['value'], $allParams['create_custom_attribute']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a custom attribute
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      string <b>$name</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeleteCustomAttributeResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'name' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteCustomAttributeWithHttpInfo($allParams['list_id']['value'], $allParams['name']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation get
     *
     * Show a custom attribute
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      string <b>$name</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CustomAttributeResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'name' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getCustomAttributeWithHttpInfo($allParams['list_id']['value'], $allParams['name']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation list
     *
     * Show all custom attributes
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CustomAttributesResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function list($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listCustomAttributesWithHttpInfo($allParams['list_id']['value'], $allParams['account_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value']));
    }
}
