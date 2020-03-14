<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresResponse;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("Odpoved")
 * @Serializer\XmlNamespace(uri="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3", prefix="D")
 */
class AresResponseOdpoved
{

    /**
     * @Serializer\SerializedName("VBAS")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseVbas::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_datatypes/v_1.0.3")
     */
    private $basicInformation;

    public function getBasicInformation(): AresResponseVbas
    {
        return $this->basicInformation;
    }

}
