<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use TomasBlaha\Ares\AresResponse\AresResponse;
use TomasBlaha\Ares\AresResponse\AresResponseDeserializer;

class AresClient
{

    private const ARES_API_MASK = 'http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico=%s';

    /** @var \GuzzleHttp\Client */
    private $client;

    /** @var \TomasBlaha\Ares\AresResponse\AresResponseDeserializer */
    private $aresResponseDeserializer;

    public function __construct()
    {
        $this->client = new Client();
        $this->aresResponseDeserializer = new AresResponseDeserializer(
            SerializerBuilder::create()->build()
        );
    }

    public function getSubjectByIdentificationNumber(string $identificationNumber): AresResponse
    {
        $response = $this->client->get(
            sprintf(
                self::ARES_API_MASK,
                $identificationNumber
            )
        );

        $aresResponse = $this->aresResponseDeserializer->deserializeAresResponse(
            $response->getBody()->getContents()
        );

        if ($aresResponse->getData()->hasBasicInformation() === false) {
            throw new \NoDataException('No data was found for request');
        }

        return $aresResponse;
    }

}
