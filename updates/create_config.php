<?php namespace Cmosguy\OctoDbBackup\Updates;

use Artisan;

use October\Rain\Database\Updates\Seeder;

class CreateConfig extends Seeder {
    public function run()
    {
        Artisan::call('vendor:publish', [
            'provider' => 'BigName\BackupManager\Integrations\Laravel\BackupManagerServiceProviderLaravel5',
        ]);
    }

}