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
     *                      string <b>$username</b> username (required)<br>
     *                      string <b>$password</b> password (required)<br>
     *                      string <b>$grant_type</b> grant_type (optional, default to 'password')<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\TokenResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPUnauthorizedError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'username' => ['value' => null, 'isOptional' => false],
                        'password' => ['value' => null, 'isOptional' => false],
                        'grant_type' => ['value' => "'password'", 'isOptional' => true],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createToken($allParams['username']['value'], $allParams['password']['value'], $allParams['grant_type']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation refresh
     *
     * Refresh a token
     *
     *
     * @param mixed[] $params
     *                      string <b>$refresh_token</b> refresh_token (required)<br>
     *                      string <b>$grant_type</b> grant_type (optional, default to 'refresh_token')<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\TokenResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPUnauthorizedError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function refresh($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'refresh_token' => ['value' => null, 'isOptional' => false],
                        'grant_type' => ['value' => "'refresh_token'", 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->refreshToken($allParams['refresh_token']['value'], $allParams['grant_type']['value']));
    }
}
