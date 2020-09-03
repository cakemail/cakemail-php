<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\SubAccountApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class SubAccountApi
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
     * Create a sub-account
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\CreateAccount <b>$create_account</b> create_account (required)<br>
     *                      int <b>$partner_account_id</b> partner_account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\CreateAccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'create_account' => ['value' => null, 'isOptional' => false],
                        'partner_account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createAccount($allParams['create_account']['value'], $allParams['partner_account_id']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a sub-account
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> account_id (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\DeleteAccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteAccount($allParams['account_id']['value']));
    }

    /**
     * Operation get
     *
     * Show a sub-account details
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> account_id (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\AccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getAccount($allParams['account_id']['value']));
    }

    /**
     * Operation list
     *
     * Show all sub-accounts
     *
     *
     * @param mixed[] $params
     *                      int <b>$partner_account_id</b> partner_account_id (optional)<br>
     *                      int <b>$page</b> page (optional, default to 1)<br>
     *                      int <b>$per_page</b> per_page (optional, default to 50)<br>
     *                      bool <b>$with_count</b> with_count (optional, default to false)<br>
     *                      bool <b>$recursive</b> recursive (optional, default to false)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;created_on&#x60; (optional)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;name&#x60;   - &#x60;status&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\AccountsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function list($params = [])
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'partner_account_id' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'recursive' => ['value' => "false", 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listAccounts($allParams['partner_account_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['recursive']['value'], $allParams['sort']['value'], $allParams['filter']['value']));
    }

    /**
     * Operation update
     *
     * Update a sub-account
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> account_id (required)<br>
     *                      \Cakemail\Lib\Model\PatchAccount <b>$patch_account</b> patch_account (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\AccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function update($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => false],
                        'patch_account' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchAccount($allParams['account_id']['value'], $allParams['patch_account']['value']));
    }

    /**
     * Operation suspend
     *
     * Suspend a sub-account
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> account_id (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\SuspendAccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function suspend($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->suspendAccount($allParams['account_id']['value']));
    }

    /**
     * Operation unsuspend
     *
     * Unsuspend a sub-account
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> account_id (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\UnsuspendAccountResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
     */
    public function unsuspend($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->unsuspendAccount($allParams['account_id']['value']));
    }
}
