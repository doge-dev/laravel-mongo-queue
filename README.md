# laravel-mongo-queue
Laravel Queues implementation for MongoDB

## Installation

Add the service provider in config/app.php:

`DogeDev\Queue\MongodbQueueServiceProvider::class,`

If you want to use MongoDB as your database backend, change the the driver in config/queue.php:

```
'connections' => [
     'database' => [
         'driver' => 'mongodb',
         'table'  => 'jobs',
         'queue'  => 'default',
         'expire' => 60,
     ],
 ```
 
 If you want to use MongoDB to handle failed jobs, change the database in config/queue.php:
 
 ```
 'failed' => [
     'database' => 'mongodb',
     'table'    => 'failed_jobs',
 ],
```
