<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\ContactApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class ContactApi
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
     * Add a contact to a list
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\Contact <b>$contact</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      \Cakemail\Lib\Model\DoubleOptIn <b>$send_double_opt_in</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CreateContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function create($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'contact' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'send_double_opt_in' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createContactWithHttpInfo($allParams['list_id']['value'], $allParams['contact']['value'], $allParams['account_id']['value'], $allParams['send_double_opt_in']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a contact
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$contact_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\DeleteContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function delete($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'contact_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->deleteContactWithHttpInfo($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation get
     *
     * Show a contact details
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$contact_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'contact_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getContactWithHttpInfo($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation importContacts
     *
     * Import contacts
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\ImportContacts <b>$import_contacts</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      \Cakemail\Lib\Model\DoubleOptIn <b>$send_double_opt_in</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ImportContactsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function importContacts($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'import_contacts' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'send_double_opt_in' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->importContactsWithHttpInfo($allParams['list_id']['value'], $allParams['import_contacts']['value'], $allParams['account_id']['value'], $allParams['send_double_opt_in']['value']));
    }

    /**
     * Operation listContactsOfList
     *
     * Show all contacts in a list
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$query</b> SQL selection query (only use one of query, fiql and json) (optional)<br>
     *                      string <b>$fiql</b> FIQL selection expression (only use one of query, fiql and json) (optional)<br>
     *                      string <b>$json</b> JSON selection expression (only use one of query, fiql and json) (optional)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;id&#x60;   - &#x60;email&#x60;   - &#x60;status&#x60;   - &#x60;subscribed_on&#x60;   - &#x60;last_bounce_type&#x60;   - &#x60;bounces_count&#x60; (optional)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;status&#x60;   - &#x60;email&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ContactsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listContactsOfList($params)
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
                        'query' => ['value' => null, 'isOptional' => true],
                        'fiql' => ['value' => null, 'isOptional' => true],
                        'json' => ['value' => null, 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listContactsOfListWithHttpInfo($allParams['list_id']['value'], $allParams['account_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['query']['value'], $allParams['fiql']['value'], $allParams['json']['value'], $allParams['sort']['value'], $allParams['filter']['value']));
    }

    /**
     * Operation listContactsOfSegment
     *
     * Show all contacts in a segment
     *
     *
     * @param mixed[] $params
     *                      int <b>$segment_id</b> (required)<br>
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$query</b> SQL selection query (only use one of query, fiql and json) (optional)<br>
     *                      string <b>$fiql</b> FIQL selection expression (only use one of query, fiql and json) (optional)<br>
     *                      string <b>$json</b> JSON selection expression (only use one of query, fiql and json) (optional)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;id&#x60;   - &#x60;email&#x60;   - &#x60;status&#x60;   - &#x60;subscribed_on&#x60;   - &#x60;last_bounce_type&#x60;   - &#x60;bounces_count&#x60; (optional)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;status&#x60;   - &#x60;email&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\ContactsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function listContactsOfSegment($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'segment_id' => ['value' => null, 'isOptional' => false],
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'query' => ['value' => null, 'isOptional' => true],
                        'fiql' => ['value' => null, 'isOptional' => true],
                        'json' => ['value' => null, 'isOptional' => true],
                        'sort' => ['value' => null, 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listContactsOfSegmentWithHttpInfo($allParams['segment_id']['value'], $allParams['list_id']['value'], $allParams['account_id']['value'], $allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['query']['value'], $allParams['fiql']['value'], $allParams['json']['value'], $allParams['sort']['value'], $allParams['filter']['value']));
    }

    /**
     * Operation update
     *
     * Update a contact
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$contact_id</b> (required)<br>
     *                      \Cakemail\Lib\Model\PatchContact <b>$patch_contact</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\PatchContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function update($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'contact_id' => ['value' => null, 'isOptional' => false],
                        'patch_contact' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->patchContactWithHttpInfo($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['patch_contact']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation unsubscribe
     *
     * Unsubscribe a contact from a list
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> (required)<br>
     *                      int <b>$contact_id</b> (required)<br>
     *                      int <b>$account_id</b> (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\UnsubscribeContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function unsubscribe($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'list_id' => ['value' => null, 'isOptional' => false],
                        'contact_id' => ['value' => null, 'isOptional' => false],
                        'account_id' => ['value' => null, 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->unsubscribeContactWithHttpInfo($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['account_id']['value']));
    }
}
