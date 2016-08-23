<?php

namespace Speicher210\Monsum\Api\Model;

/**
 * Article model.
 */
class Article
{
    use ArticleTrait;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->translation = new Translation();
    }
}
