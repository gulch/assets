<?php

namespace gulch\Assets\Renderer;

class BodyCssRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= "<link href='{$asset}' rel='stylesheet' type='text/css' property='stylesheet'>";
        }

        return $result;
    }
}