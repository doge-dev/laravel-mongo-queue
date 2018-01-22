<?php

namespace DogeDev\Queue;

use DogeDev\Queue\Failed\MongoFailedJobProvider;
use Illuminate\Queue\QueueServiceProvider;

class MongodbQueueServiceProvider extends QueueServiceProvider
{
    /**
     * Register the failed job services.
     *
     * @return void
     */
    protected function registerFailedJobServices()
    {
        // Add compatible queue failer if mongodb is configured.
        if (config('queue.failed.database') == 'mongodb') {
            $this->app->singleton('queue.failer', function ($app) {
                return new MongoFailedJobProvider($app['db'], config('queue.failed.database'), config('queue.failed.table'));
            });
        } else {
            parent::registerFailedJobServices();
        }
    }
}
