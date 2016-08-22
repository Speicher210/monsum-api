<?php

namespace Speicher210\Fastbill\Api\Service\Article;

use Speicher210\Fastbill\Api\AbstractService;
use Speicher210\Fastbill\Api\Model\Article;
use Speicher210\Fastbill\Api\Model\Customer;
use Speicher210\Fastbill\Api\Model\Subscription;

/**
 * Service for articles.
 */
class ArticleService extends AbstractService
{
    /**
     * Get the articles.
     *
     * @param string $articleNumber Article number to filter on.
     * @return Get\ApiResponse
     */
    public function getArticles($articleNumber = null)
    {
        $requestData = new Get\RequestData();
        $requestData->setArticleNumber($articleNumber);

        $request = new Get\Request($requestData);

        return $this->sendRequest($request, Get\ApiResponse::class);
    }

    /**
     * Get one article by article number.
     *
     * @param string $articleNumber Article number of the article to get.
     * @return Article|null
     */
    public function getArticle($articleNumber)
    {
        $requestData = new Get\RequestData();
        $requestData->setArticleNumber($articleNumber);

        $request = new Get\Request($requestData);
        $request->setLimit(1);

        /** @var Get\ApiResponse $apiResponse */
        $apiResponse = $this->sendRequest($request, Get\ApiResponse::class);
        $articles = $apiResponse->getResponse()->getArticles();

        return isset($articles[0]) ? $articles[0] : null;
    }

    /**
     * Get the article checkout URL.
     *
     * @param Article $article The article.
     * @param Customer|null $customer The customer.
     * @return string
     */
    public function getArticleCheckoutURL(Article $article, Customer $customer = null)
    {
        if ($customer === null) {
            return $article->getCheckoutUrl();
        }

        return $this->generateCheckoutURLForCustomer($customer->getCustomerId(), $article->getArticleNumber());
    }

    /**
     * Get the checkout URL for an article.
     *
     * @param string $articleNumber Article number of the article to get the checkout URL.
     * @param Customer $customer The customer for which the checkout URL should be created.
     * @return string
     */
    public function getArticleNumberCheckoutURL($articleNumber, Customer $customer = null)
    {
        $article = $this->getArticle($articleNumber);
        if ($article === null) {
            throw new \OutOfBoundsException('Article not found.');
        }

        return $this->getArticleCheckoutURL($article, $customer);
    }

    /**
     * Get the checkout URL for an article.
     *
     * @deprecated Use getArticleNumberCheckoutURL
     *
     * @param string $articleNumber Article number of the article to get the checkout URL.
     * @param Customer $customer The customer for which the checkout URL should be created.
     * @return string
     */
    public function getCheckoutURL($articleNumber, Customer $customer = null)
    {
        return $this->getArticleNumberCheckoutURL($articleNumber, $customer);
    }

    /**
     * Get the checkout URL of an article for a customer.
     *
     * @param string $customerId The customer ID.
     * @param string $articleNumber The article number.
     * @return string
     */
    protected function generateCheckoutURLForCustomer($customerId, $articleNumber)
    {
        return sprintf(
            'https://app.monsum.com/checkout/0/%s/%s/%s',
            $this->transport->getCredentials()->getAccountHash(),
            $customerId,
            $articleNumber
        );
    }

    /**
     * Get the checkout URL to change a product for a subscription.
     *
     * @param Subscription $subscription The subscription.
     * @param Article $article The new article.
     * @return string
     */
    public function getSubscriptionProductChangeURL(Subscription $subscription, Article $article)
    {
        return $this->generateSubscriptionProductChangeURL($subscription->getSubscriptionId(), $article->getArticleNumber());
    }

    /**
     * Get the checkout URL to change a product for a subscription.
     *
     * @param string $subscriptionId The subscription ID.
     * @param string $articleNumber The new article number.
     * @return string
     */
    protected function generateSubscriptionProductChangeURL($subscriptionId, $articleNumber)
    {
        return sprintf(
            'https://app.monsum.com/change/%s/%s/%s',
            $this->transport->getCredentials()->getAccountHash(),
            $subscriptionId,
            $articleNumber
        );
    }
}
