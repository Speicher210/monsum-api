<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Translation model.
 */
class Translation
{
    /**
     * The english translation.
     *
     * @var TranslationText
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\TranslationText")
     * @JMS\SerializedName("EN")
     */
    protected $english;

    /**
     * Get the english translation.
     *
     * @return TranslationText
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * Set the english translation.
     *
     * @param TranslationText $translationText The translation text.
     * @return Translation
     */
    public function setEnglish(TranslationText $translationText)
    {
        $this->english = $translationText;

        return $this;
    }
}
