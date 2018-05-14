<?php

namespace Speicher210\Monsum\Test\Api\Service\Article;

use JMS\Serializer\SerializerInterface;
use Speicher210\Monsum\Api\ApiCredentials;
use Speicher210\Monsum\Api\Model\Article;
use Speicher210\Monsum\Api\Model\Customer;
use Speicher210\Monsum\Api\Model\CustomerQueryParams;
use Speicher210\Monsum\Api\Model\Feature;
use Speicher210\Monsum\Api\Model\Subscription;
use Speicher210\Monsum\Api\Model\Translation;
use Speicher210\Monsum\Api\Model\TranslationText;
use Speicher210\Monsum\Api\Service\Article\ArticleService;
use Speicher210\Monsum\Api\Service\Article\Get\ApiResponse as GetApiResponse;
use Speicher210\Monsum\Api\Service\Article\Get\Response as GetResponse;
use Speicher210\Monsum\Api\Transport\TransportInterface;
use Speicher210\Monsum\Test\Api\Service\AbstractServiceTest;

/**
 * Test for the article service.
 */
class ArticleServiceTest extends AbstractServiceTest
{
    public function testGetArticles()
    {
        /** @var ArticleService $articleService */
        $articleService = $this->getServiceToTest();
        $apiResponse = $articleService->getArticles(1);

        static::assertInstanceOf(GetApiResponse::class, $apiResponse);
        /** @var GetResponse $response */
        $response = $apiResponse->getResponse();

        static::assertEquals([$this->getExpectedArticle()], $response->getArticles());
    }

    public function testGetArticle()
    {
        /** @var ArticleService $articleService */
        $articleService = $this->getServiceToTest();

        $actualArticle = $articleService->getArticle(1);
        $expectedArticle = $this->getExpectedArticle();

        static::assertEquals($expectedArticle, $actualArticle);
    }

    public function testGetArticleCheckoutURLReturnsTheURLForACustomer()
    {
        $apiCredentials = new ApiCredentials('email@test.com', 'api-key', 'account-hash');

        /** @var ArticleService $articleService */
        $transportMock = $this->createMock(TransportInterface::class);
        $transportMock
            ->expects(static::any())
            ->method('getCredentials')
            ->willReturn($apiCredentials);
        $serializerMock = $this->createMock(SerializerInterface::class);
        $articleService = new ArticleService($transportMock, $serializerMock);

        $article = new Article();
        $article->setArticleNumber('1');
        $customer = new Customer();
        $customer->setHash('customer_hash');

        static::assertSame(
            'https://app.monsum.com/checkout/0/account-hash/customer_hash/1',
            $articleService->getArticleCheckoutURL($article, $customer)
        );
    }

    public function testGetArticleCheckoutURLReturnsTheURLWithCustomerQueryParams()
    {
        $apiCredentials = new ApiCredentials('email@test.com', 'api-key', 'account-hash');

        /** @var ArticleService $articleService */
        $transportMock = $this->createMock(TransportInterface::class);
        $transportMock
            ->expects(static::any())
            ->method('getCredentials')
            ->willReturn($apiCredentials);
        $serializerMock = $this->createMock(SerializerInterface::class);
        $articleService = new ArticleService($transportMock, $serializerMock);

        $article = new Article();
        $article->setCheckoutUrl('https://app.monsum.com/checkout/0/account-hash/1');

        // Test with all params present.
        $customerQueryParams = $this->getCustomerQueryParams(1);
        static::assertSame(
            'https://app.monsum.com/checkout/0/account-hash/1&address_line1=Spaldingstrasse+2101&affiliate=together1&city=Hamburg1&company=My+company+1&country=DE&customer_ext_uid=e1&email=test1%40test.com&first-name=Testing1&lang=de&last-name=Tester1&salutation=Salut1&title_academic=Prof.1&vatid=vat_id1&postal-code=1',
            $articleService->getArticleCheckoutUrlWithQueryParams($article, $customerQueryParams)
        );

        // Test with only one param present.
        $customerQueryParams = new CustomerQueryParams();
        $customerQueryParams->setAddress('my address');
        static::assertSame(
            'https://app.monsum.com/checkout/0/account-hash/1&address_line1=my+address',
            $articleService->getArticleCheckoutUrlWithQueryParams($article, $customerQueryParams)
        );

        // Test with no parameters.
        static::assertSame(
            'https://app.monsum.com/checkout/0/account-hash/1',
            $articleService->getArticleCheckoutUrlWithQueryParams($article, new CustomerQueryParams())
        );
    }

    public function testGetArticleNumberCheckoutURLThrowsExceptionIfArticleIsNotFound()
    {
        /** @var ArticleService $articleService */
        $articleService = $this->getServiceToTest();

        $this->setExpectedException('\OutOfBoundsException', 'Article not found.');

        $articleService->getArticleNumberCheckoutURL('NON-EXISTING');
    }

    public function testGetArticleNumberCheckoutURLReturnsTheURLIfNoCustomerPassed()
    {
        /** @var ArticleService $articleService */
        $articleService = $this->getServiceToTest();

        static::assertSame(
            'https://app.monsum.com/purchase/aa9122707e4baf2090e23babe7473a79/1',
            $articleService->getArticleNumberCheckoutURL(1)
        );
    }

    public function testGetArticleNumberCheckoutURLReturnsTheURLForACustomer()
    {
        /** @var ArticleService $articleService */
        $articleService = $this->getServiceToTest();

        $customer = new Customer();
        $customer->setHash('customer_hash');

        static::assertSame(
            'https://app.monsum.com/checkout/0/account-hash/customer_hash/1',
            $articleService->getArticleNumberCheckoutURL('1', $customer)
        );
    }

    public function testGetSubscriptionProductChangeURL()
    {
        /** @var ArticleService $articleService */
        $apiCredentials = new ApiCredentials('email@test.com', 'api-key', 'account-hash');

        /** @var ArticleService $articleService */
        $transportMock = $this->createMock(TransportInterface::class);
        $transportMock
            ->expects(static::any())
            ->method('getCredentials')
            ->willReturn($apiCredentials);
        $serializerMock = $this->createMock(SerializerInterface::class);
        $articleService = new ArticleService($transportMock, $serializerMock);

        $subscription = new Subscription();
        $subscription->setHash('subscription_hash');

        $article = new Article();
        $article->setArticleNumber('MY_PRODUCT');

        static::assertSame(
            'https://app.monsum.com/change/account-hash/subscription_hash/MY_PRODUCT',
            $articleService->getSubscriptionProductChangeURL($subscription, $article)
        );
    }

    /**
     * Get an article for expected.
     *
     * @return Article
     */
    private function getExpectedArticle()
    {
        $expectedArticle = new Article();
        $expectedArticle->setArticleNumber(1);
        $expectedArticle->setTitle('Article test');
        $expectedArticle->setDescription('Article test description');
        $expectedArticle->setTags(['tag1', 'tag2']);
        $expectedArticle->setIsAddon(false);
        $expectedArticle->setTranslation(
            (new Translation())
                ->setEnglish(
                    new TranslationText('Translation title', 'Translation description')
                )
        );
        $expectedArticle->setUnitPrice(27.0);
        $expectedArticle->setSetupFee(83.0);
        $expectedArticle->setAllowMultiple(true);
        $expectedArticle->setCurrencyCode('EUR');
        $expectedArticle->setVatPercent(19.0);
        $expectedArticle->setSubscriptionInterval('1 month');
        $expectedArticle->setSubscriptionNumberEvents(0);
        $expectedArticle->setSubscriptionTrial('2 day');
        $expectedArticle->setSubscriptionDuration('1 month');
        $expectedArticle->setSubscriptionDurationFollow('2 month');
        $expectedArticle->setSubscriptionCancellationPeriod('1 day');
        $expectedArticle->setReturnUrlSuccess('https://test.com/success');
        $expectedArticle->setReturnUrlCancel('https://test.com/cancel');
        $expectedArticle->setCheckoutUrl(
            'https://app.monsum.com/purchase/aa9122707e4baf2090e23babe7473a79/1'
        );
        $expectedArticle->addFeature(
            new Feature('code', 2, 'value')
        );

        return $expectedArticle;
    }

    private function getCustomerQueryParams($identifier)
    {
        $customerQueryParams = new CustomerQueryParams();
        $customerQueryParams
            ->setAddress('some address')
            ->setAddress('Spaldingstrasse 210' . $identifier)
            ->setAffiliate('together' . $identifier)
            ->setCity('Hamburg' . $identifier)
            ->setCompanyName('My company ' . $identifier)
            ->setCountryCode('DE')
            ->setCustomerExternalUid('e' . $identifier)
            ->setEmail('test' . $identifier . '@test.com')
            ->setFirstName('Testing' . $identifier)
            ->setLanguageCode('de')
            ->setLastName('Tester' . $identifier)
            ->setSalutation('Salut' . $identifier)
            ->setTitleAcademic('Prof.' . $identifier)
            ->setVatId('vat_id' . $identifier)
            ->setZipCode($identifier);

        return $customerQueryParams;
    }

    /**
     * {@inheritdoc}
     */
    protected function getClassUnderTest()
    {
        return ArticleService::class;
    }
}
