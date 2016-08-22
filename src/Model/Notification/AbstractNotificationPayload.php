<?php

namespace Speicher210\Fastbill\Api\Model\Notification;

use JMS\Serializer\Annotation as JMS;

/**
 * Abstract notification payload model.
 */
abstract class AbstractNotificationPayload implements NotificationPayloadInterface
{

    /**
     * The notification ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("id")
     */
    protected $id;

    /**
     * The notification type.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    protected $type;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
