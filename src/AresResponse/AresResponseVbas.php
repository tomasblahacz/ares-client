<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresResponse;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("VBAS")
 * @Serializer\XmlNamespace(uri="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3", prefix="D")
 */
class AresResponseVbas
{

    /**
     * @Serializer\SerializedName("ICO")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $ico;

    /**
     * @Serializer\SerializedName("DIC")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $dic;

    /**
     * @Serializer\SerializedName("OF")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $companyName;

    /**
     * @Serializer\SerializedName("AD")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponsePostalAddress::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $postalAddress;

    /**
     * @Serializer\SerializedName("AA")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseAresAddress::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $aresAddress;

    public function getIco(): ?AresResponseValue
    {
        return $this->ico;
    }

    public function getDic(): ?AresResponseValue
    {
        return $this->dic;
    }

    public function getCompanyName(): ?AresResponseValue
    {
        return $this->companyName;
    }

    public function getPostalAddress(): ?AresResponsePostalAddress
    {
        return $this->postalAddress;
    }

    public function getAresAddress(): ?AresResponseAresAddress
    {
        return $this->aresAddress;
    }

}
