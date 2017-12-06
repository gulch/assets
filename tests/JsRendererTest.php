<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\JsRenderer;

class JsRendererTest extends TestCase
{
    /** @test */
    public function testJsRenderer()
    {
        $asset = new Asset(new JsRenderer);
        $asset->add('asset.js');

        $this->assertSame(
            '<script src="asset.js"></script>',
            $asset->write()
        );
    }
}
