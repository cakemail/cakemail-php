<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\TokenApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class TokenApi
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
     * Create a token
     *
     *
     * @param mixed[] $params
     *                      string <b>$username</b> (required)<br>
     *                      string <b>$version</b> (optional, default to 'v1')<br>
     *                      PasswordGrantType <b>$grant_type</b> (optional)<br>
     *                      string <b>$password</b> (optional)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      string <b>$scopes</b> (optional, default to 'user')<br>
     *                      int <b>$expiration_seconds</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\TokenResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPUnauthorizedError|\Cakemail\Lib\Model\HTTPForbiddenError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'username' => ['value' => null, 'isOptional' => false],
                        'version' => ['value' => "'v1'", 'isOptional' => true],
                        'grant_type' => ['value' => null, 'isOptional' => true],
                        'password' => ['value' => null, 'isOptional' => true],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'scopes' => ['value' => "'user'", 'isOptional' => true],
                        'expiration_seconds' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createTokenWithHttpInfo($allParams['username']['value'], $allParams['version']['value'], $allParams['grant_type']['value'], $allParams['password']['value'], $allParams['account_id']['value'], $allParams['scopes']['value'], $allParams['expiration_seconds']['value']));
    }

    /**
     * Operation refresh
     *
     * Refresh a token
     *
     *
     * @param mixed[] $params
     *                      string <b>$refresh_token</b> (required)<br>
     *                      string <b>$version</b> (optional, default to 'v1')<br>
     *                      RefreshGrantType <b>$grant_type</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\TokenResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPUnauthorizedError|\Cakemail\Lib\Model\HTTPForbiddenError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function refresh($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'refresh_token' => ['value' => null, 'isOptional' => false],
                        'version' => ['value' => "'v1'", 'isOptional' => true],
                        'grant_type' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->refreshTokenWithHttpInfo($allParams['refresh_token']['value'], $allParams['version']['value'], $allParams['grant_type']['value']));
    }
}
