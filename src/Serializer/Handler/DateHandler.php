<?php

namespace Speicher210\Fastbill\Api\Serializer\Handler;

use JMS\Serializer\Context;
use JMS\Serializer\Handler\DateHandler as JMSDateHandler;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\VisitorInterface;

class DateHandler extends JMSDateHandler
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct('Y-m-d H:i:s', 'Europe/Berlin', true);
    }

    /**
     * {@inheritdoc}
     */
    public function serializeDateTime(VisitorInterface $visitor, \DateTime $date, array $type, Context $context)
    {
        // All dates send to Fastbill should be in Europe/Berlin timezone.
        $date->setTimezone(new \DateTimeZone('Europe/Berlin'));

        return parent::serializeDateTime($visitor, $date, $type, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function deserializeDateTimeFromJson(JsonDeserializationVisitor $visitor, $data, array $type)
    {
        // Handle empty or invalid date / datetime values.
        if ('' === $data || null === $data || strpos($data, '0000-00-00') !== false) {
            return null;
        }

        // We want to always show the response in the UTC timezone.
        $dateTime = parent::deserializeDateTimeFromJson($visitor, $data, $type);

        if ($dateTime instanceof \DateTime) {
            $dateTime->setTimezone(new \DateTimeZone('UTC'));
        }

        return $dateTime;
    }
}
