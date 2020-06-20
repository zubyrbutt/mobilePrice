<?php

namespace App\Jobs;

use App\Import;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Redis;

class ProcessCsvUpload implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
public $file;
    /**
     * Create a new job instance.
     *
     * @param string $file
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Redis::throttle('upload-csv')->allow(1)->every(60)->then(function () {
//job logic
            dump('this file is processing.. ', $this->file); //just checking in console
            $data = array_map('str_getcsv', file($this->file));
            foreach ($data as $row) {
                Import::updateOrCreate([
                    'mobileName' => $row[0],
                ],[
                    'display' => $row[1],
                    'processor' =>$row[2],
                    'frontCamera' => $row[3]
                ]);
            }
            dump('Processing done ..', $this->file); //just checking in console after job done ..

            unlink($this->file);

        }, function () {
            // Could not obtain lock...

            return $this->release(10);
        });


    }
}
