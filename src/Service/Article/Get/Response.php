<?php

namespace Speicher210\Fastbill\Api\Service\Article\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when getting the articles.
 */
class Response extends AbstractResponse
{
    /**
     * The articles from the response.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Article>")
     * @JMS\SerializedName("ARTICLES")
     */
    protected $articles = array();

    /**
     * Get the articles from the response.
     *
     * @return \Speicher210\Fastbill\Api\Model\Article[]
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
