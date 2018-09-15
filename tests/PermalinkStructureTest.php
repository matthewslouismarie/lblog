<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class PermalinkStructureTest extends TestCase
{
    public function test()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost/page/0/', ['allow_redirects' => false]);
        $this->assertEquals(200, $res->getStatusCode());
    }
}

