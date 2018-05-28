<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class GlyphiconTest extends TestCase
{
    public function test()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost/wp-content/themes/lblog/public/glyphicons_free/glyphicons/png/glyphicons-517-menu-hamburger.png');
        $this->assertContains('image/png', $res->getHeader('content-type'));
    }
}

