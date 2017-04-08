<?php

namespace gulch\Assets\Renderer;

class DeferJsRenderer implements RendererInterface
{
    public function render(array $assets): string
    {
        $result = '';

        foreach ($assets as $asset) {
            $result .= "<script defer src='{$asset}'></script>";
        }

        return $result;
    }
}