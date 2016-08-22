<?php

namespace Speicher210\Fastbill\Api\Model;

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
