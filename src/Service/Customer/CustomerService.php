<?php

namespace Speicher210\Fastbill\Api\Service\Customer;

use Speicher210\Fastbill\Api\AbstractService;
use Speicher210\Fastbill\Api\Model\Customer;

/**
 * Service for customers.
 */
class CustomerService extends AbstractService
{
    /**
     * Get the customers.
     *
     * @param Get\RequestData|null $requestData The request data.
     * @return Get\ApiResponse
     */
    public function getCustomers(Get\RequestData $requestData = null)
    {
        $request = new Get\Request($requestData);

        $apiResponse = $this->sendRequest($request, Get\ApiResponse::class);

        /** @var Get\Response $response */
        $response = $apiResponse->getResponse();
        foreach ($response->getCustomers() as $customer) {
            if ($customer->getBirthday() instanceof \DateTime) {
                $customer->getBirthday()->setTime(0, 0, 0);
            }
        }

        return $apiResponse;
    }

    /**
     * Get one customer by ID.
     *
     * @param integer $customerId The customer ID.
     * @return Customer|null
     */
    public function getCustomer($customerId)
    {
        $requestData = new Get\RequestData();
        $requestData->setCustomerId($customerId);

        $customers = $this->getCustomers($requestData)->getResponse()->getCustomers();

        return isset($customers[0]) ? $customers[0] : null;
    }

    /**
     * Get once customer by the external ID.
     *
     * @param string $customerExternalUid The external customer ID.
     * @return Customer|null
     */
    public function getCustomerByExternalUid($customerExternalUid)
    {
        $requestData = new Get\RequestData();
        $requestData->setCustomerExternalUid($customerExternalUid);

        $customers = $this->getCustomers($requestData)->getResponse()->getCustomers();

        return isset($customers[0]) ? $customers[0] : null;
    }

    /**
     * Update a customer.
     *
     * @param Update\RequestData $requestData The data to send.
     * @return Update\ApiResponse
     */
    public function updateCustomer(Update\RequestData $requestData)
    {
        $request = new Update\Request($requestData);

        return $this->sendRequest($request, Update\ApiResponse::class);
    }

    /**
     * Create a customer.
     *
     * @param Customer $customer The customer data to send.
     * @return Create\ApiResponse
     */
    public function createCustomer(Customer $customer)
    {
        $request = new Create\Request($customer);

        return $this->sendRequest($request, Create\ApiResponse::class);
    }

    /**
     * Delete a customer.
     *
     * @param integer $customerId The customer ID to delete.
     * @return Delete\ApiResponse
     */
    public function deleteCustomer($customerId)
    {
        $requestData = new Delete\RequestData($customerId);
        $request = new Delete\Request($requestData);

        return $this->sendRequest($request, Delete\ApiResponse::class);
    }

    /**
     * Add credits to a customer.
     *
     * @param integer $customerId The customer ID.
     * @param float $amount The amount of credit to add.
     * @return AddCredits\ApiResponse
     */
    public function addCredits($customerId, $amount)
    {
        $requestData = new AddCredits\RequestData($customerId, $amount);
        $request = new AddCredits\Request($requestData);

        return $this->sendRequest($request, AddCredits\ApiResponse::class);
    }

    /**
     * Add credits to a customer.
     *
     * @param integer $customerId The customer ID.
     * @return CreateSecureLink\ApiResponse
     */
    public function createSecureLink($customerId)
    {
        $requestData = new CreateSecureLink\RequestData($customerId);
        $request = new CreateSecureLink\Request($requestData);

        return $this->sendRequest($request, CreateSecureLink\ApiResponse::class);
    }
}
