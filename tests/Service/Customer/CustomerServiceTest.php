<?php

namespace Speicher210\Fastbill\Test\Api\Service\Customer;

use Speicher210\Fastbill\Api\Model\Customer;
use Speicher210\Fastbill\Api\Model\CustomerTrait;
use Speicher210\Fastbill\Api\Service\Customer\AddCredits\ApiResponse as AddCreditsApiResponse;
use Speicher210\Fastbill\Api\Service\Customer\AddCredits\Response as AddCreditsResponse;
use Speicher210\Fastbill\Api\Service\Customer\Create\ApiResponse as CreateApiResponse;
use Speicher210\Fastbill\Api\Service\Customer\Create\Response as CreateResponse;
use Speicher210\Fastbill\Api\Service\Customer\CreateSecureLink\ApiResponse as CreateSecureLinkApiResponse;
use Speicher210\Fastbill\Api\Service\Customer\CreateSecureLink\Response as CreateSecureLinkResponse;
use Speicher210\Fastbill\Api\Service\Customer\CustomerService;
use Speicher210\Fastbill\Api\Service\Customer\Delete\ApiResponse as DeleteApiResponse;
use Speicher210\Fastbill\Api\Service\Customer\Delete\Response as DeleteResponse;
use Speicher210\Fastbill\Api\Service\Customer\Get\ApiResponse as GetApiResponse;
use Speicher210\Fastbill\Api\Service\Customer\Get\RequestData as GetRequestData;
use Speicher210\Fastbill\Api\Service\Customer\Get\Response as GetResponse;
use Speicher210\Fastbill\Api\Service\Customer\Update\ApiResponse as UpdateApiResponse;
use Speicher210\Fastbill\Api\Service\Customer\Update\RequestData as UpdateRequestData;
use Speicher210\Fastbill\Api\Service\Customer\Update\Response as UpdateResponse;
use Speicher210\Fastbill\Test\Api\Service\AbstractServiceTest;

/**
 * Test for the customer service.
 */
class CustomerServiceTest extends AbstractServiceTest
{

    public function testGetCustomers()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        $data = new GetRequestData();
        $apiResponse = $customerService->getCustomers($data);

        $this->assertInstanceOf(GetApiResponse::class, $apiResponse);
        /** @var GetResponse $response */
        $response = $apiResponse->getResponse();

        $expectedCustomer1 = new Customer();
        $expectedCustomer1 = $this->getCustomerForTesting($expectedCustomer1, 1);
        $expectedCustomer2 = new Customer();
        $expectedCustomer2 = $this->getCustomerForTesting($expectedCustomer2, 2);
        $this->assertEquals(array($expectedCustomer1, $expectedCustomer2), $response->getCustomers());
    }

    public function testGetCustomer()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        $actualCustomer = $customerService->getCustomer(1);

        $expectedCustomer = new Customer();
        $expectedCustomer = $this->getCustomerForTesting($expectedCustomer, 1);
        $this->assertEquals($expectedCustomer, $actualCustomer);
    }

    public function testGetCustomerByExternalUid()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        $actualCustomer = $customerService->getCustomerByExternalUid('e1');

        $expectedCustomer = new Customer();
        $expectedCustomer = $this->getCustomerForTesting($expectedCustomer, 1);
        $this->assertEquals($expectedCustomer, $actualCustomer);
    }

    public function testGetCustomerWithDateFieldsEmptyString()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        $actualCustomer = $customerService->getCustomer(1);

        $expectedCustomer = new Customer();
        $expectedCustomer->setCustomerId(1);
        $this->assertEquals($expectedCustomer, $actualCustomer);
    }

    public function testCreateCustomer()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        /** @var Customer $data */
        $data = new Customer();
        $data = $this->getCustomerForTesting($data, 1);
        $data->setChangeDataUrl(null);
        $data->setDashboardUrl(null);
        $apiResponse = $customerService->createCustomer($data);

        $this->assertInstanceOf(CreateApiResponse::class, $apiResponse);
        /** @var CreateResponse $response */
        $response = $apiResponse->getResponse();

        $expectedCreateResponse = new CreateResponse();
        $expectedCreateResponse->setStatus('success');
        $expectedCreateResponse->setCustomerId(998898);
        $expectedCreateResponse->setHash('a88a4e7e2024e308cbecbee931b1d40a');
        $expectedCreateResponse->setDashboardUrl('https://test.com/dashboard/1');
        $expectedCreateResponse->setChangeDataUrl('https://test.com/change-data/1');
        $this->assertEquals($expectedCreateResponse, $response);
    }

    public function testUpdateCustomer()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        /** @var UpdateRequestData $data */
        $object = new UpdateRequestData(1);
        $data = $this->getCustomerForTesting($object, 1);
        $data->setChangeDataUrl(null);
        $data->setDashboardUrl(null);
        $apiResponse = $customerService->updateCustomer($data);

        $this->assertInstanceOf(UpdateApiResponse::class, $apiResponse);
        /** @var UpdateResponse $response */
        $response = $apiResponse->getResponse();

        $expectedUpdateResponse = new UpdateResponse();
        $expectedUpdateResponse->setStatus('success');
        $expectedUpdateResponse->setCustomerId(998898);
        $this->assertEquals($expectedUpdateResponse, $response);
    }

    public function testDeleteCustomer()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        $apiResponse = $customerService->deleteCustomer('996423');
        $this->assertInstanceOf(DeleteApiResponse::class, $apiResponse);

        /** @var DeleteResponse $response */
        $response = $apiResponse->getResponse();

        $expectedDeleteResponse = new DeleteResponse();
        $expectedDeleteResponse->setStatus(DeleteResponse::STATUS_SUCCESS);
        $this->assertEquals($expectedDeleteResponse, $response);
    }

    public function testAddCredits()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        $apiResponse = $customerService->addCredits(995434, 1.5);
        $this->assertInstanceOf(AddCreditsApiResponse::class, $apiResponse);

        /** @var AddCreditsResponse $response */
        $response = $apiResponse->getResponse();
        // There is no response from the Fastbill API.
        $this->assertNull($response);
    }

    public function testCreateSecureLink()
    {
        /** @var CustomerService $customerService */
        $customerService = $this->getServiceToTest();

        $apiResponse = $customerService->createSecureLink('996423');
        $this->assertInstanceOf(CreateSecureLinkApiResponse::class, $apiResponse);

        /** @var CreateSecureLinkResponse $response */
        $response = $apiResponse->getResponse();

        $expectedCreateSecureLinkResponse = new CreateSecureLinkResponse();
        $expectedCreateSecureLinkResponse
            ->setDashboardUrl('https://create-secure-link.test.com/dashboard')
            ->setAccountDataUrl('https://create-secure-link.test.com/account');
        $this->assertEquals($expectedCreateSecureLinkResponse, $response);
    }

    /**
     * Get a customer model with data for testing.
     *
     * @param mixed $customer The class of the object to instantiate.
     * @param integer $identifier Unique identifier for the fake data.
     * @return object
     */
    private function getCustomerForTesting($customer, $identifier)
    {
        /** @var CustomerTrait $customer */
        $customer->setCustomerId($identifier)
            ->setCustomerNumber('cn_' . $identifier)
            ->setDaysForPayment($identifier)
            ->setCustomerExternalUid('e' . $identifier)
            ->setCreated(new \DateTime(sprintf('2015-10-23 10:17:%02d', $identifier)))
            ->setLastUpdate(new \DateTime(sprintf('2015-10-24 11:18:%02d', $identifier)))
            ->setFirstName('Testing' . $identifier)
            ->setLastName('Tester' . $identifier)
            ->setTitleAcademic('Prof.' . $identifier)
            ->setSalutation('Salut' . $identifier)
            ->setBirthday(new \DateTime('1983-04-27'))
            ->setCustomerType(Customer::CUSTOMER_TYPE_BUSINESS)
            ->setOrganization('Organization' . $identifier)
            ->setPaymentType(Customer::CUSTOMER_PAYMENT_TYPE_TRANSFER)
            ->setAffiliate('together' . $identifier)
            ->setBankAccountMandateReferenceDate(new \DateTime('2015-11-05 23:15:00'))
            ->setTaxId('tax_id' . $identifier)
            ->setVatId('vat_id' . $identifier)
            ->setBankName('Banky' . $identifier)
            ->setBankCode('BKY' . $identifier)
            ->setBankIBAN('WBKY123456' . $identifier)
            ->setBankBIC('WBKY' . $identifier)
            ->setBankAccountOwnerAddress('Bank owner address' . $identifier)
            ->setBankAccountOwnerCity('Bank owner city' . $identifier)
            ->setBankAccountOwnerZipCode('Bank owner zip' . $identifier)
            ->setBankAccountOwnerEmail('Bank owner email' . $identifier)
            ->setBankAccountMandateReference('man_ref' . $identifier)
            ->setShowPaymentNotice(false)
            ->setPaymentMailAddress('pay address' . $identifier)
            ->setAddress('Spaldingstrasse 210' . $identifier)
            ->setAddress2('Et.' . $identifier)
            ->setSecondaryAddress('Second address' . $identifier)
            ->setCountryCode('DE')
            ->setZipCode($identifier)
            ->setState('State' . $identifier)
            ->setCity('Hamburg' . $identifier)
            ->setPhone('phone' . $identifier)
            ->setFax('fax' . $identifier)
            ->setNewsletterOptIn(false)
            ->setHash('hash' . $identifier)
            ->setBankAccountOwner('World' . $identifier)
            ->setBankAccountNumber('123456' . $identifier)
            ->setCurrencyCode('EUR')
            ->setLanguageCode('de')
            ->setEmail('test' . $identifier . '@test.com')
            ->setEmailCC('test_cc' . $identifier . '@test.com')
            ->setCreditBalance('1,00')
            ->setInvoiceDeliveryMethod(Customer::INVOICE_DELIVERY_METHOD_MAIL)
            ->setComment('are you talking to me?' . $identifier)
            ->setTags(array('tag1' . $identifier, 'tag2' . $identifier))
            ->setChangeDataUrl('https://test.com/change-data/' . $identifier)
            ->setDashboardUrl('https://test.com/dashboard/' . $identifier);

        return $customer;
    }

    /**
     * {@inheritdoc}
     */
    protected function getClassUnderTest()
    {
        return CustomerService::class;
    }
}
