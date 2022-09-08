<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\LoadImageService;

class LoadImageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:loadimage';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $load = new LoadImageService();

        $method = 'GET';
        $url = 'https://api.thecatapi.com/v1/images/search';
        $headers = ['x-api-key' => "DEMO-API-KEY"];
        $query = ['limit' => 1, 'size' => 'full'];

        $load->getResponse($method, $url, $headers, $query);

        dd('coda');

        return 0;
    }
}
