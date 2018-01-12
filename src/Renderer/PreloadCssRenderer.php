<?php

namespace gulch\Assets\Renderer;

use gulch\Assets\Contract\RendererInterface;

class PreloadCssRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= '<link rel="preload" href="' . $asset . '" as="style">';
        }

        return $result;
    }
}
