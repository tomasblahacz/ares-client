<?php

declare(strict_types=1);

class AresResponseDeserializerTest extends \PHPUnit\Framework\TestCase
{

    /** @var \TomasBlaha\Ares\AresResponse\AresResponseDeserializer */
    private $aresResponseDeserializer;

    public function setUp(): void
    {
        parent::setUp();
        $this->aresResponseDeserializer = new \TomasBlaha\Ares\AresResponse\AresResponseDeserializer(
            \JMS\Serializer\SerializerBuilder::create()->build()
        );
    }

    public function testDeserializeAresResponse(): void
    {
        $aresResponse = $this->aresResponseDeserializer->deserializeAresResponse(
            file_get_contents(__DIR__ . '/ares_response_fixture.xml')
        );

        self::assertSame(
            'Jméno Příjmení',
            $aresResponse->getData()->getBasicInformation()->getCompanyName()->getValue()
        );
    }

}
