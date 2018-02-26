<?php

namespace Newride\OctoberNamespaces;

use RuntimeException;

/**
 * This trait should be used only on models.
 */
trait HasNamespacedTable
{
    protected $table;

    public function getTable()
    {
        $namespace = explode('\\', get_class($this));
        $namespace = array_slice($namespace, 0, -2);
        $namespace = implode('\\', $namespace);

        return call_user_func_array([$namespace.'\\Plugin', 'databaseTable'], [self::TABLE]);
    }

    public function setTable($table)
    {
        throw new RuntimeException('Setting table with HasNamespacedTable trait is not allowed.');
    }
}
