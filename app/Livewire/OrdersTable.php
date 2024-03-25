<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Executed;

class OrdersTable extends Component
{
    public $orders;
    public $executed;

    public function mount()
    {
        $this->orders = Order::with('orderLines.product')->get();
        $this->executed = Executed::latest()->first();
    }

    public function render()
    {
        return view('livewire.orders-table', [
            'orders' => $this->orders,
            'executed' => $this->executed,
        ]);
    }
}
