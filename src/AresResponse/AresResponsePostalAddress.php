<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresResponse;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("AD")
 * @Serializer\XmlNamespace(uri="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3", prefix="D")
 */
class AresResponsePostalAddress
{

    /**
     * @Serializer\SerializedName("UC")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $streetAndNumber;

    /**
     * @Serializer\SerializedName("PB")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $zipAndCity;

    public function getStreetAndNumber(): AresResponseValue
    {
        return $this->streetAndNumber;
    }

    public function getZipAndCity(): AresResponseValue
    {
        return $this->zipAndCity;
    }

}
