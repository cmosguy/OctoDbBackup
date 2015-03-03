<?php namespace Cmosguy\OctoDbBackup;

use App;
use System\Classes\PluginBase;


/**
 * OctoDbBackup Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'OctoDbBackup',
            'description' => 'Back up your databases',
            'author'      => 'Cmosguy',
            'icon'        => 'icon-leaf'
        ];
    }

    public function boot()
    {
        //App::register('\Cmosguy\OctoDbBackup\BackupManagerServiceProvider');
        App::register('\BigName\BackupManager\Integrations\Laravel\BackupManagerServiceProviderLaravel5');
    }

}
