<?php

namespace gulch\Assets\Renderer;

class PreloadJsRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= "<link rel='preload' href='{$asset}' as='script'>";
        }

        return $result;
    }
}