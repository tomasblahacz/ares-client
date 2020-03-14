<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresResponse;

use JMS\Serializer\SerializerInterface;

class AresResponseDeserializer
{

    /** @var \JMS\Serializer\SerializerInterface */
    private $serializer;

    public function __construct(
        SerializerInterface $serializer
    )
    {
        $this->serializer = $serializer;
    }

    public function deserializeAresResponse(
        string $aresXml
    ): AresResponse
    {
        /** @var \TomasBlaha\Ares\AresResponse\AresResponse $response */
        $response = $this->serializer->deserialize(
            $aresXml,
            AresResponse::class,
            'xml'
        );

        return $response;
    }

}
