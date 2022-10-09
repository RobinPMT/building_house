<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class QueueJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:checkup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        if (! $this->isQueueListenerRunning()) {
            $this->comment('Queue listener is being started.');
            $pid = $this->startQueueListener();
            $this->saveQueueListenerPID($pid);
        }

        $this->comment('Queue listener is running.');
    }

    private function isQueueListenerRunning()
    {
        if (! $pid = $this->getLastQueueListenerPID()) {
            return false;
        }

        $process = exec("ps -p $pid -opid=,cmd=");
        //$processIsQueueListener = str_contains($process, 'queue:listen'); // 5.1
        // 5.6 - see comments

        return ! empty($process);
    }

    private function getLastQueueListenerPID()
    {
        if (! file_exists(__DIR__ . '/queue.pid')) {
            return false;
        }

        return file_get_contents(__DIR__ . '/queue.pid');
    }

    private function saveQueueListenerPID($pid)
    {
        file_put_contents(__DIR__ . '/queue.pid', $pid);
    }

    private function startQueueListener()
    {
        //$command = 'php-cli ' . base_path() . '/artisan queue:listen --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!'; // 5.1
        $command = ' php artisan queue:listen --timeout=60 --sleep=5 --tries=3 > /dev/null & echo $!'; // 5.6 - see comments
        return exec($command);
    }
}
