<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;
use \App\Helpers\Rets;
use App\Property;

class FetchMlsUpdates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:mlsUpdates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches MLS updated data since 2 days ago and updates local db';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $model = new Property();
        $results = Rets::fetchUpdates(Carbon::now()->subDays(2));
        if($results){
            foreach($results->toArray() as $property){
                $subset = array_unique(Arr::only($property, $model->getFillable()));
                Property::updateOrCreate($subset);
            }
            Log::info('fetched mls updates @ '. Carbon::now());
        } else{
            Log::info('could not fetch updates @ '. Carbon::now());
        }
    }
}
