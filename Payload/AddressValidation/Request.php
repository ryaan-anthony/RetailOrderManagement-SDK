<?php
/**
 * Copyright (c) 2013-2014 eBay Enterprise, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright   Copyright (c) 2013-2014 eBay Enterprise, Inc. (http://www.ebayenterprise.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace eBayEnterprise\RetailOrderManagement\AddressValidation;
use eBayEnterprise\RetailOrderManagement\Api as Api;
use Address;
use IResponse;

class Request
{
    /**
     * @var int $maxAddressSuggestions The maximum number of suggested addresses which should be returned in the response.
     */
    protected $maxAddressSuggestions;
    /** @var Address $address */
    protected $address;
    /** @var Api $api */
    protected $api;

    /**
     * @param Api $api
     * @param $maxAddressSuggestions
     * @param Address $address
     * @param IResponse $response
     */
    public function __construct(Api $api, $maxAddressSuggestions, Address $address, IResponse $response=null)
    {
        $this->api = $api;
        $this->maxAddressSuggestions = $maxAddressSuggestions;
        $this->address = $address;
        $this->response = $response;
    }

    public function send()
    {
        $this->api->send($this->toXml());
        return $this->response->fromXml($this->api->getXmlResponse());
    }
}