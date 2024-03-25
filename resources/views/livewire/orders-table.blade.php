<div class="container">
    <div class="row">
        <div class="col">
            <div class="container container-fluid card">
                <div class="d-flex justify-content-between align-items-center p-2 m-1">
                    <div class="mb-4"> 

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Referencia</th>
                                    <th>Cliente</th>
                                    <th>Cantidad total</th>
                                    <th>Productos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->order_ref }}</td>
                                        <td>{{ $order->customer_name }}</td>
                                        <td>{{ $order->total_qty }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($order->orderLines as $orderLine)
                                                    <li>{{ $orderLine->product->name }} ({{ $orderLine->qty }})</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Último registro ejecutado</div>
                <div class="card-body">
                    <p>Pedidos: {{ $executed->total_orders }}</p>
                    <p>Total: {{ $executed->total_cost }}</p>
                    <p>Fecha: {{ $executed->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
