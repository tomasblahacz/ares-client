<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresResponse;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("AD")
 * @Serializer\XmlNamespace(uri="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3", prefix="D")
 */
class AresResponseAresAddress
{

    /**
     * @Serializer\SerializedName("NS")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $country;

    /**
     * @Serializer\SerializedName("NOK")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $district;

    /**
     * @Serializer\SerializedName("N")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $city;

    /**
     * @Serializer\SerializedName("NCO")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $cityPart;

    /**
     * @Serializer\SerializedName("NMC")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $cityPartName;

    /**
     * @Serializer\SerializedName("NU")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $street;

    /**
     * @Serializer\SerializedName("CD")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $houseNumber;

    /**
     * @Serializer\SerializedName("TCD")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $houseNumberType;

    /**
     * @Serializer\SerializedName("CO")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $orientationNumber;

    /**
     * @Serializer\SerializedName("PSC")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseValue::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $zipCode;

    public function getCountry(): ?AresResponseValue
    {
        return $this->country;
    }

    public function getDistrict(): ?AresResponseValue
    {
        return $this->district;
    }

    public function getCity(): ?AresResponseValue
    {
        return $this->city;
    }

    public function getCityPart(): ?AresResponseValue
    {
        return $this->cityPart;
    }

    public function getCityPartName(): ?AresResponseValue
    {
        return $this->cityPartName;
    }

    public function getStreet(): ?AresResponseValue
    {
        return $this->street;
    }

    public function getHouseNumber(): ?AresResponseValue
    {
        return $this->houseNumber;
    }

    public function getHouseNumberType(): ?AresResponseValue
    {
        return $this->houseNumberType;
    }

    public function getOrientationNumber(): ?AresResponseValue
    {
        return $this->orientationNumber;
    }

    public function getZipCode(): ?AresResponseValue
    {
        return $this->zipCode;
    }

}
