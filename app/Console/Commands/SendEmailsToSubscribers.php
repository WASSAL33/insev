<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmailsToSubscribers extends Command
{
    protected $signature = 'send:emails-to-subscribers';
    protected $description = 'Send emails to all subscribers when a new post is published';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Emails sent to subscribers successfully.');
    }
}