<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a test email to check if emails are working';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::raw('This is a test email!', function ($message) {
            $message->to('your_test_email@example.com')->subject('Test Email');
        });
        
        $this->info('Test email sent successfully!');
        return 0;
    }
}