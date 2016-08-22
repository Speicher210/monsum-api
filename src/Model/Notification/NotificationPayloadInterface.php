<?php

namespace Speicher210\Fastbill\Api\Model\Notification;

/**
 * Interface for notifications payload.
 */
interface NotificationPayloadInterface
{

    /**
     * Get the notification ID.
     *
     * @return integer
     */
    public function getId();

    /**
     * Set the ID.
     *
     * @param integer $id The ID.
     * @return NotificationPayloadInterface
     */
    public function setId($id);

    /**
     * Get the notification type.
     *
     * @return string
     */
    public function getType();

    /**
     * Set the notification type.
     *
     * @param string $type The notification type.
     * @return NotificationPayloadInterface
     */
    public function setType($type);
}
