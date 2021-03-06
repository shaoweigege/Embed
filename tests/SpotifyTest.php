<?php

namespace Embed\Tests;

class SpotifyTest extends AbstractTestCase
{
    public function testPlay()
    {
        $this->assertEmbed(
            'https://play.spotify.com/album/7s66wU1XJ2NsUuWM2NKiUV',
            [
                'title' => 'A Cantar con Xabarin (Vol. I & II)',
                'type' => 'rich',
                'code' => '<iframe width="300" height="380" allowtransparency="true" frameborder="0" allow="encrypted-media" title="Spotify Embed: A Cantar con Xabarin (Vol. I &amp; II)" src="https://open.spotify.com/embed/album/7s66wU1XJ2NsUuWM2NKiUV"></iframe>',
                'providerName' => 'Spotify',
                'providerUrl' => 'https://www.spotify.com',
            ]
        );
    }

    public function testOpen()
    {
        $this->assertEmbed(
            'https://open.spotify.com/album/7s66wU1XJ2NsUuWM2NKiUV',
            [
                'title' => 'A Cantar con Xabarin (Vol. I & II)',
                'type' => 'rich',
                'code' => '<iframe width="300" height="380" allowtransparency="true" frameborder="0" allow="encrypted-media" title="Spotify Embed: A Cantar con Xabarin (Vol. I &amp; II)" src="https://open.spotify.com/embed/album/7s66wU1XJ2NsUuWM2NKiUV"></iframe>',
                'providerName' => 'Spotify',
                'providerUrl' => 'https://www.spotify.com',
            ]
        );
    }
}
