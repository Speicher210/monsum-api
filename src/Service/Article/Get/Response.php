<?php

namespace Speicher210\Monsum\Api\Service\Article\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractResponse;

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
     * @JMS\Type("array<Speicher210\Monsum\Api\Model\Article>")
     * @JMS\SerializedName("ARTICLES")
     */
    protected $articles = array();

    /**
     * Get the articles from the response.
     *
     * @return \Speicher210\Monsum\Api\Model\Article[]
     */
    public function getArticles()
    {
        return $this->articles;
    }
}
