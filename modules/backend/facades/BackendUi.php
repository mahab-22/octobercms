<?php namespace Backend\Facades;

use October\Rain\Support\Facade;

/**
 * @deprecated see System\Facades\Ui
 */
class BackendUi extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'system.ui';
    }
}
