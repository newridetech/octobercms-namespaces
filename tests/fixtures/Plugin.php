<?php

namespace Newride\OctoberNamespaces\tests\fixtures;

use Newride\OctoberNamespaces\HasPluginNamespace;

class Plugin
{
    use HasPluginNamespace;

    const AUTHOR = 'author';
    const DESCRIPTION = 'description';
    const ICON = 'icon';
    const NAME = 'name';
}
