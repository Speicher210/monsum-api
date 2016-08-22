<?php

namespace Speicher210\Fastbill\Api;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait for "Get" requests.
 */
trait GetRequestTrait
{
    /**
     * The limit on the number of elements in the query of a list.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("LIMIT")
     */
    protected $limit = 100;

    /**
     * The offset for the request.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("OFFSET")
     */
    protected $offset;

    /**
     * Get the limit on the number of elements in the query of a list.
     *
     * @return integer
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set the limit for the request.
     *
     * @param integer $limit The limit.
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * Get the offset.
     *
     * @return integer
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set the offset of the request.
     *
     * @param integer $offset The offset.
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;

        return $this;
    }
}
