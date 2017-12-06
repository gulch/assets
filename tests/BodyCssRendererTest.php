<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\BodyCssRenderer;

class BodyCssRendererTest extends TestCase
{
    /** @test */
    public function testBodyCssRenderer()
    {
        $asset = new Asset(new BodyCssRenderer);
        $asset->add('asset.css');

        $this->assertSame(
            '<link href="asset.css" rel="stylesheet" type="text/css" property="stylesheet">',
            $asset->write()
        );
    }
}
