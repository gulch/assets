<?php

namespace gulch\Assets\Renderer;

interface RendererInterface
{
    public function render(array $assets): string;
}