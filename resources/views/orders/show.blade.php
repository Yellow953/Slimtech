@extends('admin.app')

@section('content')

<a href="/orders" class="btn text-secondary">
    <h3>
        < Back</h3>
</a>

<!-- page title area end -->
<div class="main-content-inner m-3">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-area">
                        <div class="invoice-head">
                            <div class="row">
                                <div class="iv-left col-6">
                                    <span>ORDER</span>
                                </div>
                                <div class="iv-right col-6 text-md-right">
                                    <span>#{{$order->id}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-table table-responsive mt-5">
                            <table class="table table-bordered table-hover text-right">
                                <thead>
                                    <tr class="text-capitalize">
                                        <th class="text-left" style="width: 45%; min-width: 130px;">Product</th>
                                        <th>Type</th>
                                        <th>Quantity</th>
                                        <th style="min-width: 100px">Unit Cost</th>
                                        <th>total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->products as $product)
                                    <tr>
                                        <td class="text-left">{{ucfirst($product->name)}}</td>
                                        <td>{{ $product->pivot->type }}</td>
                                        <td>{{number_format($product->pivot->quantity)}}pcs
                                            @if ($product->pivot->months != 0)
                                            {{ $product->pivot->months }}months
                                            @endif
                                        </td>
                                        <td>
                                            @if (Helper::is_active('LBP') )
                                            @if ($product->pivot->type == 'buy')
                                            {{number_format(Helper::convert('LBP', $product->sell_price))}} LBP
                                            @elseif ($product->pivot->type == 'rent')
                                            {{number_format(Helper::convert('LBP', $product->rent_price *
                                            $product->pivot->months))}} LBP
                                            @endif
                                            @else
                                            @if ($product->pivot->type == 'buy')
                                            {{number_format($product->sell_price, 2)}} $
                                            @elseif ($product->pivot->type == 'rent')
                                            {{number_format($product->rent_price, 2)}} $
                                            @endif
                                            @endif
                                        </td>
                                        <td>
                                            @if (Helper::is_active('LBP') )
                                            @if ($product->pivot->type == 'buy')
                                            {{number_format(Helper::convert('LBP', $product->sell_price *
                                            $product->pivot->quantity))}} LBP
                                            @elseif ($product->pivot->type == 'rent')
                                            {{number_format(Helper::convert('LBP', $product->rent_price *
                                            $product->pivot->quantity * $product->pivot->months), 2)}} LBP
                                            @endif
                                            @else
                                            @if ($product->pivot->type == 'buy')
                                            {{number_format($product->sell_price *
                                            $product->pivot->quantity, 2)}} $
                                            @elseif ($product->pivot->type == 'rent')
                                            {{number_format($product->rent_price * $product->pivot->quantity *
                                            $product->pivot->months, 2)}} $
                                            @endif
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">total balance :</td>
                                        <td>
                                            @if (Helper::is_active('LBP') )
                                            {{number_format(Helper::price_to_lbp($order->total_price))}} LBP
                                            @else
                                            {{number_format($order->total_price, 2)}} $
                                            @endif
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    $(document).ready(function () {
        window.print();
    });
</script> --}}
@endsection