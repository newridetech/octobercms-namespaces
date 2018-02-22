<?php

namespace Newride\OctoberNamespaces;

use Backend;
use Backend\Facades\BackendMenu;

trait HasPluginNamespace
{
    public static function authorAndName(): string
    {
        return self::AUTHOR.'.'.self::NAME;
    }

    public static function backendMenuContext(string $controller, string $action): void
    {
        BackendMenu::setContext(self::authorAndName(), $controller, $action);
    }

    public static function backendUrl(string $tabName): string
    {
        $generated = Backend::url(implode('/', [self::AUTHOR, self::NAME, $tabName]));

        return strtolower($generated);
    }

    public static function permission(string $permission): string
    {
        return static::authorAndName().'.'.$permission;
    }

    public static function permissions(array $list): array
    {
        $ret = [];

        foreach ($list as $listItem) {
            $ret[] = static::permission($listItem);
        }

        return $ret;
    }

    public static function databaseTable(string $table): string
    {
        $generated = implode('_', [self::AUTHOR, self::NAME, $table]);

        return strtolower($generated);
    }

    public function pluginDetails(): array
    {
        return [
            'author' => self::AUTHOR,
            'description' => self::DESCRIPTION,
            'icon' => self::ICON,
            'name' => self::NAME,
        ];
    }
}
