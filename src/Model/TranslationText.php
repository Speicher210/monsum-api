<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * The translation text.
 */
class TranslationText
{
    /**
     * The translation title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TITLE")
     */
    protected $title;

    /**
     * The translation description.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DESCRIPTION")
     */
    protected $description;

    /**
     * Constructor.
     *
     * @param string $title The title.
     * @param string $description The description.
     */
    public function __construct($title, $description)
    {
        $this->setTitle($title);
        $this->setDescription($description);
    }

    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return TranslationText
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return TranslationText
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
