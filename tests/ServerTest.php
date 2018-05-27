<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class ServerTest extends TestCase
{
    public function testServer()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost');
        $this->assertEquals(200, $res->getStatusCode());
    }
}
