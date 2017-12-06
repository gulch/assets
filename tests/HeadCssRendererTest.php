<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\HeadCssRenderer;

class HeadCssRendererTest extends TestCase
{
    /** @test */
    public function testBodyCssRenderer()
    {
        $asset = new Asset(new HeadCssRenderer);
        $asset->add('asset.css');

        $this->assertSame(
            '<link href="asset.css" rel="stylesheet" type="text/css">',
            $asset->write()
        );
    }
}
