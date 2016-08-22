<?php

namespace Speicher210\Fastbill\Api\Service\Invoice;

use Speicher210\Fastbill\Api\AbstractService;

/**
 * Service for invoices.
 */
class InvoiceService extends AbstractService
{
    /**
     * Get the invoices.
     *
     * @param Get\RequestData $requestData The request data.
     * @return Get\ApiResponse
     */
    public function getInvoices(Get\RequestData $requestData)
    {
        $request = new Get\Request($requestData);

        $apiResponse = $this->sendRequest($request, Get\ApiResponse::class);
        /** @var Get\Response $response */
        $response = $apiResponse->getResponse();
        foreach ($response->getInvoices() as $invoice) {
            $invoiceDate = $invoice->getInvoiceDate();
            if ($invoiceDate !== null) {
                $invoiceDate->setTime(0, 0, 0);
            }

            // We need to convert the due date to DateTime because of inconsistencies in the Fastbill API response.
            $dueDate = $invoice->getDueDate();
            if ($dueDate !== null) {
                $dueDate = new \DateTime($dueDate);
                $dueDate->setTime(0, 0, 0);
                $invoice->setDueDate($dueDate);
            }
        }

        return $apiResponse;
    }
}
