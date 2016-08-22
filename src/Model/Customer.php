<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Customer model.
 */
class Customer
{
    use CustomerTrait;

    const CUSTOMER_SALUTATION_NONE = '';
    const CUSTOMER_SALUTATION_MR = 'mr';
    const CUSTOMER_SALUTATION_MRS = 'mrs';
    const CUSTOMER_SALUTATION_FAMILY = 'family';

    const CUSTOMER_PAYMENT_TYPE_TRANSFER = 1;
    const CUSTOMER_PAYMENT_TYPE_DIRECT_DEBIT = 2;
    const CUSTOMER_PAYMENT_TYPE_CASH = 3;
    const CUSTOMER_PAYMENT_TYPE_PAYPAL = 4;
    const CUSTOMER_PAYMENT_TYPE_ADVANCED_PAYMENT = 5;
    const CUSTOMER_PAYMENT_TYPE_CREDIT_CARD = 6;

    const CUSTOMER_TYPE_BUSINESS = 'business';
    const CUSTOMER_TYPE_CONSUMER = 'consumer';

    const INVOICE_DELIVERY_METHOD_NONE = 'none';
    const INVOICE_DELIVERY_METHOD_MAIL = 'mail';
    const INVOICE_DELIVERY_METHOD_POST = 'post';
    const INVOICE_DELIVERY_METHOD_BOTH = 'both';

    /**
     * Check if the user is a consumer.
     *
     * @return boolean
     */
    public function isConsumer()
    {
        return $this->customerType === self::CUSTOMER_TYPE_CONSUMER;
    }

    /**
     * Check if the user is a business.
     *
     * @return boolean
     */
    public function isBusiness()
    {
        return $this->customerType === self::CUSTOMER_TYPE_BUSINESS;
    }

    /**
     * Check if the invoice is delivered by email (only by email or also by email).
     *
     * @return boolean
     */
    public function invoiceDeliveredByEmail()
    {
        return $this->invoiceDeliveryMethod === self::INVOICE_DELIVERY_METHOD_MAIL || $this->invoiceDeliveryMethod === self::INVOICE_DELIVERY_METHOD_BOTH;
    }
}
