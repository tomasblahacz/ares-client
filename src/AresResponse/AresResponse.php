<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresResponse;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlRoot("Ares_odpovedi")
 * @Serializer\XmlNamespace(uri="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_answer_basic/v_1.0.3", prefix="are")
 */
class AresResponse
{

    /**
     * @var \TomasBlaha\Ares\AresResponse\AresResponseOdpoved
     * @Serializer\SerializedName("Odpoved")
     * @Serializer\Type(TomasBlaha\Ares\AresResponse\AresResponseOdpoved::class)
     * @Serializer\XmlElement(namespace="http://wwwinfo.mfcr.cz/ares/xml_doc/schemas/ares/ares_answer_basic/v_1.0.3")
     */
    private $data;

    public function getData(): AresResponseOdpoved
    {
        return $this->data;
    }

}
