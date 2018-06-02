<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class AssetTest extends TestCase
{
    public function testGlyphicon()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost/wp-content/themes/lblog/public/glyphicons_free/glyphicons/png/glyphicons-517-menu-hamburger.png');
        $this->assertContains('image/png', $res->getHeader('content-type'));
    }

    public function testGruntSass()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost/wp-content/themes/lblog/style.min.css');
        $this->assertContains('text/css', $res->getHeader('content-type'));
    }
}

