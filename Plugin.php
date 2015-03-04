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
            'icon'        => 'icon-cloud-upload'
        ];
    }

    public function boot()
    {
        App::register('\BigName\BackupManager\Integrations\Laravel\BackupManagerServiceProviderLaravel5');
    }

}
