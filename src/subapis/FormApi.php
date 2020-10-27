<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\FormApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class FormApi
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
     * Create a form
     *
     *
     * @param mixed[] $params
     *                      \Cakemail\Lib\Model\CreateForm <b>$create_form</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CreateFormResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'create_form' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createFormWithHttpInfo($allParams['create_form']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a form
     *
     *
     * @param mixed[] $params
     *                      string <b>$form_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeleteFormResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'form_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteFormWithHttpInfo($allParams['form_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation get
     *
     * Show a form details
     *
     *
     * @param mixed[] $params
     *                      string <b>$form_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\FormResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'form_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getFormWithHttpInfo($allParams['form_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation list
     *
     * Show all forms
     *
     *
     * @param mixed[] $params
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;name&#x60;   - &#x60;language&#x60;   - &#x60;created_on&#x60;   - &#x60;last_updated_on&#x60;   - &#x60;list_id&#x60;   - &#x60;status&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\FormsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function list($params = [])
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listFormsWithHttpInfo($allParams['account_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation update
     *
     * Update a form
     *
     *
     * @param mixed[] $params
     *                      string <b>$form_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\PatchForm <b>$patch_form</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\PatchFormResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function update($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'form_id' => ['value' => null, 'isOptional' => false],
                        'patch_form' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchFormWithHttpInfo($allParams['form_id']['value'], $allParams['patch_form']['value'], $allParams['account_id']['value']));
    }
}
