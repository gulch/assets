<?php

namespace gulch\Assets\Renderer;

class JsRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= '<script src="' . $asset . '"></script>';
        }

        return $result;
    }
}