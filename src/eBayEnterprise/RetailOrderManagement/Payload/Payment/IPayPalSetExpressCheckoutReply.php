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

namespace eBayEnterprise\RetailOrderManagement\Payload\Payment;

interface IPayPalSetExpressCheckoutReply extends IPayPalSetExpressCheckout
{
    const ROOT_NODE = 'PayPalSetExpressCheckoutReply';

    /**
     * Response code like Success, Failure etc
     *
     * @return string
     */
    public function getResponseCode();

    /**
     * @param string
     * @return self
     */
    public function setResponseCode($code);

    /**
     * The timestamped token value that was returned by PayPalSetExpressCheckoutReply
     * and passed on PayPalGetExpressCheckoutRequest.
     * Character length and limitations: 20 single-byte characters
     *
     * @return string
     */
    public function getToken();

    /**
     * @param string
     * @return self
     */
    public function setToken($token);

    /**
     * The description of error like "10413:The totals of the cart item amounts do not match order amounts".
     *
     * @return string
     */
    public function getErrorMessage();

    /**
     * @param string
     * @return self
     */
    public function setErrorMessage($message);

    /**
     * Should downstream systems consider this reply a success?
     *
     * @return bool
     */
    public function isSuccess();
}
