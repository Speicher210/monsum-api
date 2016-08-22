<?php

namespace Speicher210\Fastbill\Test\Api\Service\Invoice;

use Speicher210\Fastbill\Api\Model\Invoice;
use Speicher210\Fastbill\Api\Model\InvoiceItem;
use Speicher210\Fastbill\Api\Model\InvoiceVatItem;
use Speicher210\Fastbill\Api\Service\Invoice\Get\ApiResponse as GetApiResponse;
use Speicher210\Fastbill\Api\Service\Invoice\Get\RequestData as GetRequestData;
use Speicher210\Fastbill\Api\Service\Invoice\Get\Response as GetResponse;
use Speicher210\Fastbill\Api\Service\Invoice\InvoiceService;
use Speicher210\Fastbill\Test\Api\Service\AbstractServiceTest;

/**
 * Test for the invoice service.
 */
class InvoiceServiceTest extends AbstractServiceTest
{

    public function testGetInvoices()
    {
        /** @var InvoiceService $invoiceService */
        $invoiceService = $this->getServiceToTest();

        $data = new GetRequestData();
        $apiResponse = $invoiceService->getInvoices($data);

        $this->assertInstanceOf(GetApiResponse::class, $apiResponse);
        /** @var GetResponse $response */
        $response = $apiResponse->getResponse();

        $expectedInvoice = $this->getExpectedInvoice();

        $this->assertEquals(array($expectedInvoice), $response->getInvoices());
    }

    public function testGetInvoicesWithDueDateWithoutTime()
    {
        /** @var InvoiceService $invoiceService */
        $invoiceService = $this->getServiceToTest();

        $data = new GetRequestData();
        $apiResponse = $invoiceService->getInvoices($data);

        $this->assertInstanceOf(GetApiResponse::class, $apiResponse);
        /** @var GetResponse $response */
        $response = $apiResponse->getResponse();

        $expectedInvoice = $this->getExpectedInvoice();
        $expectedInvoice->setDueDate(new \DateTime('2015-11-04'));

        $this->assertEquals(array($expectedInvoice), $response->getInvoices());
    }

    /**
     * {@inheritdoc}
     */
    protected function getClassUnderTest()
    {
        return InvoiceService::class;
    }

    /**
     * Get the expected invoice.
     *
     * @return Invoice
     */
    private function getExpectedInvoice(){
        $expectedInvoice = new Invoice();
        $expectedInvoice->setInvoiceId(2345);
        $expectedInvoice->setInvoiceExternalId('');
        $expectedInvoice->setStatus("canceled");
        $expectedInvoice->setType(Invoice::INVOICE_TYPE_OUTGOING);
        $expectedInvoice->setCustomerId(995256);
        $expectedInvoice->setCustomerNumber(3);
        $expectedInvoice->setCustomerCostCenterId(0);
        $expectedInvoice->setOrganization('Tester 222');
        $expectedInvoice->setSalutation(Invoice::INVOICE_SALUTATION_NONE);
        $expectedInvoice->setFirstName('Michael');
        $expectedInvoice->setLastName('Wolf');
        $expectedInvoice->setAddress('Spaldingstrasse 210');
        $expectedInvoice->setAddress2('');
        $expectedInvoice->setZipCode('20097');
        $expectedInvoice->setCity('Hamburg');
        $expectedInvoice->setPaymentType(Invoice::INVOICE_PAYMENT_TYPE_TRANSFER);
        $expectedInvoice->setPaymentDays(14);
        $expectedInvoice->setCountryCode('DE');
        $expectedInvoice->setCurrencyCode('EUR');
        $expectedInvoice->setTemplateId(1234);
        $expectedInvoice->setSubscriptionId(333);
        $expectedInvoice->setSubscriptionInvoiceCounter(1);
        $expectedInvoice->setInvoiceNumber('1');
        $expectedInvoice->setOutstandingAmount('0,00');
        $expectedInvoice->setPaidDate(null);
        $expectedInvoice->setIsCanceled(1);
        $expectedInvoice->setInvoiceDate(new \DateTime('2015-10-22 00:00:00'));
        $expectedInvoice->setDueDate(new \DateTime('2015-11-04 00:00:00'));
        $expectedInvoice->setDeliveryDate('22.10.2015 - 01.11.2015');
        $expectedInvoice->setCashDiscountPercent('0.00');
        $expectedInvoice->setCashDiscountDays('0');
        $expectedInvoice->setSubTotal(8.1147541);
        $expectedInvoice->setVatTotal(1.541803279);
        $expectedInvoice->addVatItem(new InvoiceVatItem('19.00', 1.541803279, 8.1147541));
        $expectedInvoiceItem = new InvoiceItem();
        $expectedInvoiceItem->setInvoiceItemId('1506250');
        $expectedInvoiceItem->setArticleNumber('11');
        $expectedInvoiceItem->setDescription('Wingu Portal Zugang (6 Monate)<br>Hol Dir die 6 Monate Portalnutzung.');
        $expectedInvoiceItem->setQuantity('1.00');
        $expectedInvoiceItem->setUnitPrice('8.11475410');
        $expectedInvoiceItem->setVatPercent('19.00');
        $expectedInvoiceItem->setVatValue(1.541803279);
        $expectedInvoiceItem->setCompleteNet(8.1147541);
        $expectedInvoiceItem->setCompleteGross(9.656557379);
        $expectedInvoiceItem->setSortOrder(1);
        $expectedInvoice->addItem($expectedInvoiceItem);
        $expectedInvoice->setTotal(9.656557379);
        $expectedInvoice->setDocumentUrl('https://test.com/document');
        $expectedInvoice->setPayPalUrl('https://test.com/paypal');
        $expectedInvoice->setPaymentInfo('');
        $expectedInvoice->setIntroText('');
        $expectedInvoice->setInvoiceTitle('');
        $expectedInvoice->setVatId('');
        $expectedInvoice->setComment('');

        return $expectedInvoice;
    }
}
