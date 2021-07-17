<x-layout>
<div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> Order Details</h1>
            
        </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <section class="invoice">
                <div class="row mb-4">
                    <div class="col-6">
                        <h2 class="page-header"><i class="fa fa-globe"></i> {{ $order->order_number }}</h2>
                    </div>
                    <div class="col-6">
                        <h5 class="text-right">Date: {{ $order->created_at->toFormattedDateString() }}</h5>
                    </div>
                </div>
                <div class="row invoice-info">
                    <div class="col-4">Placed By
                        <address><strong>{{ $order->full_name }}</strong><br>Email: {{ $order->email }}</address>
                        <address><strong>Note</strong><br> {{ $order->notes }}</address>
                        <address><strong>Order Type</strong><br> {{ $order->user_id ? 'Account Customer' : 'Guest Order' }}</address>

                    </div>
                    <div class="col-4">Ship To
                        <address><strong>{{ $order->first_name }} {{ $order->last_name }}</strong><br>{{ $order->address }}<br>{{ $order->city }}, {{ $order->country }} {{ $order->post_code }}<br>{{ $order->phone_number }}<br></address>
                    </div>
                    <div class="col-4">
                        <b>Order ID:</b> {{ $order->order_number }}<br>
                        <b>Amount:</b> {{ config('settings.currency_symbol') }}{{ round($order->grand_total, 2) }}<br>
                        <b>Payment Method:</b> {{ $order->payment_method }}<br>
                        <b>Payment Status:</b>
                        <form  id="psform" method="post" action="{{route('admin.orders.update',['order' => $order->id])}}">
                        @csrf
                        @method("PATCH") 
                        <select class="custom-select" name="payment_status" id="payment-status">
                          <option value="1" {{ $order->payment_status == 1 ? 'selected' : '' }} >Completed</option>
                          <option value="0" {{ $order->payment_status == 0 ? 'selected' : '' }} >Not Completeds</option>
                        </select>
                        </form>
                        <b>Order Status:</b>
                        <form id="osform" method="post" action="{{route('admin.orders.update',['order' => $order->id])}}">
                        @csrf
                        @method("PATCH") 
                        <select class="custom-select" name="order_status" id="order-status">
                          <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }} >Pending </option>
                          <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }} >Processing </option>
                          <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }} >Completed</option>
                          <option value="decline" {{ $order->status == 'decline' ? 'selected' : '' }} >Declined</option>
                        </select>
                        </form>
                        <br>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>SKU #</th>
                                <th>Qty</th>
                                <th>Attribute</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($order->items as $item)
                                    <tr>
                                            <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->product->sku }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->attribute }}</td>
                                        <td>{{ config('settings.currency_symbol') }}{{ round($item->price * $item->quantity, 2) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@section('js')
<script type="text/javascript">
    $('#order-status').on('change',function(){
        $('#osform').submit();
    });

    $('#payment-status').on('change',function(){
        $('#psform').submit();
    });


</script>
@endsection
</x-layout>
