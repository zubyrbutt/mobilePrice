<?php

namespace App;

use App\Jobs\ProcessCsvUpload;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $guarded = [];
    protected $table = 'products';
    public function importToDb()
    {
        $path = resource_path('pending-files/*.csv');

        $files = glob($path);
        foreach ($files as $file) {
            //this is Job and Queues -- find more logic in ProcessCsvUpload.php
          ProcessCsvUpload::dispatch($file);
        }
    }
}
