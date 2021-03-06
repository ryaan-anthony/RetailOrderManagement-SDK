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

/**
 * Wrap include in a function to allow variables while protecting scope.
 * @return array mapping of config keys to message payload types for bidirectional api operations
 */
return call_user_func(function () {
    $map = [];
    $map['address/validate'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Address\ValidationRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Address\ValidationReply',
    ];
    $map['orders/create'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Order\OrderCreateRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Order\OrderCreateReply',
    ];
    $map['payments/creditcard/auth'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\CreditCardAuthRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\CreditCardAuthReply',
    ];
    $map['payments/storedvalue/balance'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\StoredValueBalanceRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\StoredValueBalanceReply',
    ];
    $map['payments/storedvalue/redeem'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\StoredValueRedeemRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\StoredValueRedeemReply',
    ];
    $map['payments/storedvalue/redeemvoid'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\StoredValueRedeemVoidRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\StoredValueRedeemVoidReply',
    ];
    $map['payments/paypal/setExpress'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalSetExpressCheckoutRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalSetExpressCheckoutReply',
    ];
    $map['payments/paypal/getExpress'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalGetExpressCheckoutRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalGetExpressCheckoutReply',
    ];
    $map['payments/paypal/doExpress'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalDoExpressCheckoutRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalDoExpressCheckoutReply',
    ];
    $map['payments/paypal/doAuth'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalDoAuthorizationRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalDoAuthorizationReply',
    ];
    $map['payments/paypal/void'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalDoVoidRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PayPalDoVoidReply',
    ];
    $map['taxes/quote'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\TaxDutyFee\TaxDutyFeeQuoteRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\TaxDutyFee\TaxDutyFeeQuoteReply',
    ];
    $map['orders/cancel'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Order\OrderCancelRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Order\OrderCancelResponse',
    ];
    $map['customers/orders/get'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Customer\OrderSummaryRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Customer\OrderSummaryResponse',
    ];
    $map['inventory/quantity/get'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\QuantityRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\QuantityReply',
    ];
    $map['inventory/details/get'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\InventoryDetailsRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\InventoryDetailsReply',
    ];
    $map['orders/get'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Order\Detail\OrderDetailRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Order\Detail\OrderDetailResponse',
    ];
    $map['inventory/allocations/create'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\AllocationRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\AllocationReply',
    ];
    $map['inventory/allocations/delete'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\AllocationRollbackRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Inventory\AllocationRollbackReply',
    ];
    $map['payments/tendertype/lookup'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\TenderType\LookupRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\TenderType\LookupReply',
    ];
    $map['payments/pan/protect'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\ProtectPanRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\ProtectPanReply',
    ];
    $map['payments/settlement/create'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PaymentSettlementRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PaymentSettlementReply',
    ];
    $map['payments/auth/cancel'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PaymentAuthCancelRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\PaymentAuthCancelReply',
    ];
    $map['payments/funds/confirm'] = [
        'request' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\ConfirmFundsRequest',
        'reply' => '\eBayEnterprise\RetailOrderManagement\Payload\Payment\ConfirmFundsReply',
    ];
    return $map;
});
