<?php
namespace Cakemail\Subapis;

use GuzzleHttp\ClientInterface;
use Cakemail\Response;
use Cakemail\Lib\Api\CampaignBlueprintApi as OpenAPI;
use Cakemail\Lib\Configuration;
use Cakemail\Lib\HeaderSelector;
use Cakemail\Lib\ApiException;

class CampaignBlueprintApi
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
     * Operation get
     *
     * Get a campaign blueprint
     *
     *
     * @param mixed[] $params
     *                      int <b>$blueprint_id</b> (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CampaignBlueprintResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function get($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'blueprint_id' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->getCampaignBlueprintWithHttpInfo($allParams['blueprint_id']['value']));
    }

    /**
     * Operation list
     *
     * Show all campaign blueprints
     *
     *
     * @param mixed[] $params
     *                      int <b>$page</b> (optional, default to 1)<br>
     *                      int <b>$per_page</b> (optional, default to 50)<br>
     *                      bool <b>$with_count</b> (optional, default to false)<br>
     *                      string <b>$filter</b> Valid Terms:   - &#x60;tag&#x60;   - &#x60;name&#x60;  Valid Operators:   - &#x60;&#x3D;&#x3D;&#x60;  Query separator:   - &#x60;;&#x60; (optional)<br>
     *                      string <b>$sort</b> Sort term and direction, using syntax &#x60;[-|+]term&#x60;.  Valid terms:   - &#x60;id&#x60;   - &#x60;created_on&#x60;   - &#x60;updated_on&#x60;   - &#x60;name&#x60; (optional, default to 'id')<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Cakemail\Lib\Model\CampaignBlueprintsResponse|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function list($params = [])
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'page' => ['value' => "1", 'isOptional' => true],
                        'per_page' => ['value' => "50", 'isOptional' => true],
                        'with_count' => ['value' => "false", 'isOptional' => true],
                        'filter' => ['value' => null, 'isOptional' => true],
                        'sort' => ['value' => "'id'", 'isOptional' => true],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->listCampaignBlueprintsWithHttpInfo($allParams['page']['value'], $allParams['per_page']['value'], $allParams['with_count']['value'], $allParams['filter']['value'], $allParams['sort']['value']));
    }

    /**
     * Operation render
     *
     * Render campaign blueprint
     *
     *
     * @param mixed[] $params
     *                      int <b>$blueprint_id</b> (required)<br>
     *
     * @throws \Cakemail\Lib\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string|\Cakemail\Lib\Model\HTTPBadRequestError|\Cakemail\Lib\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function render($params)
    {
        if (gettype($params) != 'array' && gettype($params) != 'NULL') {
            throw new ApiException('Parameter must be an array');
        }

        $allParams = [
                        'blueprint_id' => ['value' => null, 'isOptional' => false],
                    ];

        $allParams = $this->fillParams($params, $allParams);

        return new Response($this->openApiObj->renderCampaignBlueprintWithHttpInfo($allParams['blueprint_id']['value']));
    }
}
