<?php

declare(strict_types = 1);

namespace TomasBlaha\Ares\AresClient;

use GuzzleHttp\Client;
use TomasBlaha\Ares\AresResponse\AresResponse;
use TomasBlaha\Ares\AresResponse\AresResponseDeserializer;

class AresClient
{

    private const ARES_API_MASK = 'http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico=%s';

    /** @var \GuzzleHttp\Client */
    private $client;

    /** @var \TomasBlaha\Ares\AresResponse\AresResponseDeserializer */
    private $aresResponseDeserializer;

    public function __construct(
        Client $client,
        AresResponseDeserializer $aresResponseDeserializer
    )
    {
        $this->client = $client;
        $this->aresResponseDeserializer = $aresResponseDeserializer;
    }

    public function getSubjectByIdentificationNumber(string $identificationNumber): AresResponse
    {
        $response = $this->client->get(
            sprintf(
                self::ARES_API_MASK,
                $identificationNumber
            )
        );

        return $this->aresResponseDeserializer->deserializeAresResponse(
            $response->getBody()->getContents()
        );
    }

}
