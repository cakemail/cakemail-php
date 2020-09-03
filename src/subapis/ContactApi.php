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
     * Add a contact in a list
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> list_id (required)<br>
     *                      \Cakemail\Lib\Model\Contact <b>$contact</b> contact (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\CreateContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
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
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->createContact($allParams['list_id']['value'], $allParams['contact']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation delete
     *
     * Delete a contact
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> list_id (required)<br>
     *                      int <b>$contact_id</b> contact_id (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\DeleteContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
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

        return new Response($this->openApiObj->deleteContact($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation get
     *
     * Show a contact details
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> list_id (required)<br>
     *                      int <b>$contact_id</b> contact_id (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\ContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
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

        return new Response($this->openApiObj->getContact($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation importContacts
     *
     * Import contacts
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> list_id (required)<br>
     *                      \Cakemail\Lib\Model\ImportContacts <b>$import_contacts</b> import_contacts (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\ImportContactsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
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
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->importContacts($allParams['list_id']['value'], $allParams['import_contacts']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation update
     *
     * Update a contact
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> list_id (required)<br>
     *                      int <b>$contact_id</b> contact_id (required)<br>
     *                      \Cakemail\Lib\Model\PatchContact <b>$patch_contact</b> patch_contact (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\PatchContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
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

        return new Response($this->openApiObj->patchContact($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['patch_contact']['value'], $allParams['account_id']['value']));
    }

    /**
     * Operation unsubscribe
     *
     * Unsubscribe a contact from a list
     *
     *
     * @param mixed[] $params
     *                      int <b>$list_id</b> list_id (required)<br>
     *                      int <b>$contact_id</b> contact_id (required)<br>
     *                      int <b>$account_id</b> account_id (optional)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Cakemail\Lib\Model\UnsubscribeContactResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError
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

        return new Response($this->openApiObj->unsubscribeContact($allParams['list_id']['value'], $allParams['contact_id']['value'], $allParams['account_id']['value']));
    }
}
