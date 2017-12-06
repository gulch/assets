<?php

namespace gulch\Assets\Tests;

use PHPUnit\Framework\TestCase;
use gulch\Assets\Asset;
use gulch\Assets\Renderer\AsyncJsRenderer;

class AssetToStringFunction extends TestCase
{
    /** @test */
    public function testAssetToStringFunction()
    {
        $asset = new Asset(new AsyncJsRenderer);
        $asset->add('asset.js');

        $this->assertSame(
            '<script async src="asset.js"></script>',
            (string)$asset
        );
    }
}
