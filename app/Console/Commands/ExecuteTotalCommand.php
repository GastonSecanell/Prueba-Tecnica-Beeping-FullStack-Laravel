<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\OrderLine;

class ExecuteTotalCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'execute:total';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate the total cost of all orders and send the result to an endpoint.';

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
        $totalCost = OrderLine::with('product')->get()->sum(function ($orderLine) {
            return $orderLine->qty * $orderLine->product->cost;
        });

        $response = Http::post(env('APP_URL') . '/api/executed/create', ['total_cost' => $totalCost]);
        $this->info('Total cost calculated and sent to endpoint');
    }

}
