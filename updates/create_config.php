<?php namespace Cmosguy\OctoDbBackup\Updates;

use Artisan;

use October\Rain\Database\Updates\Seeder;

class CreateConfig extends Seeder {
    public function run()
    {
        Artisan::call('config:publish heybigname/backup-manager', [
            'path' => 'vendor/heybigname/backup-manager/config',
        ]);
    }

}