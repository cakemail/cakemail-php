<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\SenderApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class SenderApi
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
     * Operation confirm
     *
     * Confirm a sender
     *
     *
     * @param mixed[] $params
     *                      string <b>$brand_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\ConfirmSender <b>$confirm_sender</b> (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ConfirmSenderResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirm($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'brand_id' => ['value' => null, 'isOptional' => false],
                        'confirm_sender' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->confirmSenderWithHttpInfo($allParams['brand_id']['value'], $allParams['confirm_sender']['value']));
    }

    /**
     * Operation create
     *
     * Add a sender
     *
     *
     * @param mixed[] $params
     *                      string <b>$brand_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\CreateSender <b>$create_sender</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CreateSenderResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'brand_id' => ['value' => null, 'isOptional' => false],
                        'create_sender' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createSenderWithHttpInfo($allParams['brand_id']['value'], $allParams['create_sender']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a sender
     *
     *
     * @param mixed[] $params
     *                      string <b>$brand_id</b> (required)<br>
     *                      string <b>$sender_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeleteSenderResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'brand_id' => ['value' => null, 'isOptional' => false],
                        'sender_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteSenderWithHttpInfo($allParams['brand_id']['value'], $allParams['sender_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation get
     *
     * Show a sender details
     *
     *
     * @param mixed[] $params
     *                      string <b>$brand_id</b> (required)<br>
     *                      string <b>$sender_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\SenderResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'brand_id' => ['value' => null, 'isOptional' => false],
                        'sender_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getSenderWithHttpInfo($allParams['brand_id']['value'], $allParams['sender_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation list
     *
     * Show all senders
     *
     *
     * @param mixed[] $params
     *                      string <b>$brand_id</b> (required)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;email&#x60;   - &#x60;confirmed&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\SendersResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function list($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'brand_id' => ['value' => null, 'isOptional' => false],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listSendersWithHttpInfo($allParams['brand_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['account_id']['value'], $allParams['with_count']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation update
     *
     * Update a sender
     *
     *
     * @param mixed[] $params
     *                      string <b>$brand_id</b> (required)<br>
     *                      string <b>$sender_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\UpdateSender <b>$update_sender</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\PatchSenderResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function update($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'brand_id' => ['value' => null, 'isOptional' => false],
                        'sender_id' => ['value' => null, 'isOptional' => false],
                        'update_sender' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchSenderWithHttpInfo($allParams['brand_id']['value'], $allParams['sender_id']['value'], $allParams['update_sender']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation resendConfirmation
     *
     * Resend confirmation email
     *
     *
     * @param mixed[] $params
     *                      string <b>$brand_id</b> (required)<br>
     *                      string <b>$sender_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ResendConfirmationEmailResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function resendConfirmation($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'brand_id' => ['value' => null, 'isOptional' => false],
                        'sender_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->resendConfirmationEmailWithHttpInfo($allParams['brand_id']['value'], $allParams['sender_id']['value'], $allParams['account_id']['value']));
    }
}
