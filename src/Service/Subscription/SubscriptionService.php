<?php

namespace Speicher210\Fastbill\Api\Service\Subscription;

use Speicher210\Fastbill\Api\AbstractService;
use Speicher210\Fastbill\Api\Model\Feature;
use Speicher210\Fastbill\Api\Model\Subscription;

/**
 * Service for subscriptions.
 */
class SubscriptionService extends AbstractService
{
    /**
     * Get one subscription by using the Fastbill subscription ID.
     *
     * @param integer $subscriptionId The Fastbill subscription ID.
     * @return Subscription|null
     */
    public function getSubscriptionById($subscriptionId)
    {
        $subscriptions = $this
            ->getSubscriptions(null, null, null, $subscriptionId)
            ->getResponse()
            ->getSubscriptions();

        return count($subscriptions) ? reset($subscriptions) : null;
    }

    /**
     * Get the subscriptions.
     *
     * @param integer $customerId The customer ID.
     * @param string $externalCustomerId The external customer ID.
     * @param string $subscriptionExternalId The external subscription ID.
     * @param integer $subscriptionId The subscription ID.
     * @return Get\ApiResponse
     */
    public function getSubscriptions(
        $customerId = null,
        $externalCustomerId = null,
        $subscriptionExternalId = null,
        $subscriptionId = null
    ) {
        $requestData = new Get\RequestData();
        $requestData->setCustomerId($customerId);
        $requestData->setExternalCustomerId($externalCustomerId);
        $requestData->setSubscriptionExternalId($subscriptionExternalId);
        $requestData->setSubscriptionId($subscriptionId);

        $request = new Get\Request($requestData);

        return $this->sendRequest($request, Get\ApiResponse::class);
    }

    /**
     * Create a subscription.
     *
     * @param Create\RequestData $requestData The request data.
     * @return Create\ApiResponse
     */
    public function createSubscription(Create\RequestData $requestData)
    {
        $request = new Create\Request($requestData);

        return $this->sendRequest($request, Create\ApiResponse::class);
    }

    /**
     * Update a subscription.
     *
     * @param integer $subscriptionId The subscription ID.
     * @param \DateTime $nextEvent The next event date and time.
     * @param string $subscriptionExternalId The external subscription ID.
     * @param string $status The subscription status.
     * @param array $xAttributes The subscription x attributes.
     * @param Feature[] $features The features.
     * @return Update\ApiResponse
     */
    public function updateSubscription(
        $subscriptionId,
        $nextEvent = null,
        $subscriptionExternalId = null,
        $status = null,
        array $xAttributes = array(),
        array $features = array()
    ) {
        $requestData = new Update\RequestData($subscriptionId);

        $requestData->setSubscriptionId($subscriptionId);
        $requestData->setNextEvent($nextEvent);
        $requestData->setSubscriptionExternalId($subscriptionExternalId);
        $requestData->setStatus($status);
        $requestData->setXAttributes($xAttributes);
        $requestData->setFeatures($features);

        $request = new Update\Request($requestData);

        return $this->sendRequest($request, Update\ApiResponse::class);
    }

    /**
     * Change article of a subscription.
     *
     * @param ChangeArticle\RequestData $requestData The request data.
     * @return ChangeArticle\ApiResponse
     */
    public function changeSubscriptionArticle(ChangeArticle\RequestData $requestData)
    {
        $request = new ChangeArticle\Request($requestData);

        return $this->sendRequest($request, ChangeArticle\ApiResponse::class);
    }

    /**
     * Set the addon for a subscription.
     *
     * @param SetAddon\RequestData $requestData The request data.
     * @return SetAddon\ApiResponse
     */
    public function setSubscriptionAddon(SetAddon\RequestData $requestData)
    {
        $request = new SetAddon\Request($requestData);

        return $this->sendRequest($request, SetAddon\ApiResponse::class);
    }

    /**
     * Set the usage data of a subscription.
     *
     * @param SetUsageData\RequestData $requestData The request data.
     * @return SetUsageData\ApiResponse
     */
    public function setSubscriptionUsageData(SetUsageData\RequestData $requestData)
    {
        $request = new SetUsageData\Request($requestData);

        return $this->sendRequest($request, SetUsageData\ApiResponse::class);
    }

    /**
     * Get the usage data of a subscription.
     *
     * @param integer $subscriptionId The subscription ID.
     * @param \DateTime $subscriptionStart The subscription start.
     * @param \DateTime $subscriptionEnd The subscription end.
     * @return GetUsageData\ApiResponse
     */
    public function getSubscriptionUsageData(
        $subscriptionId,
        \DateTime $subscriptionStart = null,
        \DateTime $subscriptionEnd = null
    ) {
        $requestData = new GetUsageData\RequestData($subscriptionId);

        $requestData->setSubscriptionId($subscriptionId);
        $requestData->setSubscriptionStart($subscriptionStart);
        $requestData->setSubscriptionEnd($subscriptionEnd);

        $request = new GetUsageData\Request($requestData);

        return $this->sendRequest($request, GetUsageData\ApiResponse::class);
    }

    /**
     * Get the usage data of a subscription.
     *
     * @param string $usageDataId The usage data ID.
     * @return DeleteUsageData\ApiResponse
     */
    public function deleteSubscriptionUsageData($usageDataId)
    {
        $requestData = new DeleteUsageData\RequestData($usageDataId);
        $request = new DeleteUsageData\Request($requestData);

        return $this->sendRequest($request, DeleteUsageData\ApiResponse::class);
    }

    /**
     * Get the upcoming amount.
     *
     * @param GetUpcomingAmount\RequestData $requestData The request data filter.
     * @return GetUpcomingAmount\ApiResponse
     */
    public function getUpcomingAmount(GetUpcomingAmount\RequestData $requestData = null)
    {
        if ($requestData === null) {
            $requestData = new GetUpcomingAmount\RequestData();
        }

        $request = new GetUpcomingAmount\Request($requestData);

        return $this->sendRequest($request, GetUpcomingAmount\ApiResponse::class);
    }

    /**
     * Postpone a subscription shipping.
     *
     * @param integer $subscriptionId
     * @param integer $month The month to postpone.
     * @return Postpone\ApiResponse
     */
    public function postponeSubscription($subscriptionId, $month)
    {
        $requestData = new Postpone\RequestData($subscriptionId, $month);
        $request = new Postpone\Request($requestData);

        return $this->sendRequest($request, Postpone\ApiResponse::class);
    }

    /**
     * Renew a subscription.
     *
     * @param integer $subscriptionId The subscription ID to renew.
     * @return Renew\ApiResponse
     */
    public function renewSubscription($subscriptionId)
    {
        $requestData = new Renew\RequestData($subscriptionId);
        $request = new Renew\Request($requestData);

        return $this->sendRequest($request, Renew\ApiResponse::class);
    }

    /**
     * Create a secure link for a subscription.
     *
     * @param integer $subscriptionId The subscription ID for which to create the secure link.
     * @return CreateSecureLink\ApiResponse
     */
    public function createSecureLink($subscriptionId)
    {
        $requestData = new CreateSecureLink\RequestData($subscriptionId);
        $request = new CreateSecureLink\Request($requestData);

        return $this->sendRequest($request, CreateSecureLink\ApiResponse::class);
    }

    /**
     * Cancel a subscription.
     *
     * @param integer $subscriptionId The subscription ID.
     * @param \DateTime $cancellationDate The cancellation date and time.
     * @param string $cancellationNote The cancellation note.
     * @return Cancel\ApiResponse
     */
    public function cancelSubscription($subscriptionId, \DateTime $cancellationDate = null, $cancellationNote = null)
    {
        $requestData = new Cancel\RequestData($subscriptionId);
        $requestData->setCancellationDate($cancellationDate);
        $requestData->setCancellationNote($cancellationNote);

        $request = new Cancel\Request($requestData);

        return $this->sendRequest($request, Cancel\ApiResponse::class);
    }

    /**
     * Reactivate a subscription.
     *
     * @param integer $subscriptionId The subscription ID to reactivate.
     * @return Reactivate\ApiResponse
     */
    public function reactivateSubscription($subscriptionId)
    {
        $requestData = new Reactivate\RequestData($subscriptionId);
        $request = new Reactivate\Request($requestData);

        return $this->sendRequest($request, Reactivate\ApiResponse::class);
    }
}
