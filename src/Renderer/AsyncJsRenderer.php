<?php

namespace gulch\Assets\Renderer;

class AsyncJsRenderer extends GeneralRenderer
{
    protected const PATTERN = '<script async src="%1$s"></script>';
}
