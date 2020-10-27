<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\AccountApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class AccountApi
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
     * Operation getSelf
     *
     * Show my account details
     *
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\AccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSelf()
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        return new Response($this->openApiObj->getSelfAccountWithHttpInfo());
    }

    /**
     * Operation updateSelf
     *
     * Update my account
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\PatchSelfAccount <b>$patch_self_account</b> (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\PatchAccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateSelf($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'patch_self_account' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchSelfAccountWithHttpInfo($allParams['patch_self_account']['value']));
    }
}
