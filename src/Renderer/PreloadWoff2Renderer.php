<?php

namespace gulch\Assets\Renderer;

use gulch\Assets\Contract\RendererInterface;

class PreloadWoff2Renderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= '<link rel="preload" href="' . $asset . '" as="font" type="font/woff2">';
        }

        return $result;
    }
}
