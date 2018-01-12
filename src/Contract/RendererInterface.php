<?php

namespace gulch\Assets\Contract;

interface RendererInterface
{
    public function render(array $assets): string;
}
