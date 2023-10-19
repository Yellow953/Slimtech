@extends('admin.app')

@section('content')

<a href="/purchases" class="btn text-secondary">
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
                                    <span>Purchase</span>
                                </div>
                                <div class="iv-right col-6 text-md-right">
                                    <span>#{{$purchase->id}}</span>
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
                                    @foreach ($purchase->products as $product)
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
                                            {{number_format(Helper::convert('LBP', $product->buy_price))}} LBP
                                            @else
                                            {{number_format($product->buy_price, 2)}} $
                                            @endif
                                        </td>
                                        <td>
                                            @if (Helper::is_active('LBP') )
                                            {{number_format(Helper::convert('LBP', $product->buy_price *
                                            $product->pivot->quantity))}} LBP
                                            @else
                                            {{number_format($product->buy_price *
                                            $product->pivot->quantity, 2)}} $
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
                                            {{number_format(Helper::price_to_lbp($purchase->total_price))}} LBP
                                            @else
                                            {{number_format($purchase->total_price, 2)}} $
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