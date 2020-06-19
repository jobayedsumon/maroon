@extends('backend.layout.app')
@section('contents')

<div class="page-content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-purple">{{ $total_orders }}</span>
                        Total Sales
                    </div>
                    <div class="clearfix"></div>
{{--                    <p class=" mb-0 m-t-20 text-muted">Total income: {{ 'BDT'.$total_income }}</p>--}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-teal">{{ 'BDT '.$total_income }}</span>
                        Total Income
                    </div>
                    <div class="clearfix"></div>
{{--                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>--}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-blue-grey">{{ $new_orders }}</span>
                        New Orders
                    </div>
                    <div class="clearfix"></div>
{{--                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>--}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                    <div class="mini-stat-info">
                        <span class="counter text-brown">{{ $new_customers }}</span>
                        New Customers
                    </div>
                    <div class="clearfix"></div>
{{--                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>--}}
                </div>
            </div>
        </div>


{{--        <div class="row">--}}
{{--            <div class="col-xl-9">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-9 pr-md-0">--}}
{{--                        <div class="card m-b-20" style="height: 486px;">--}}
{{--                            <div class="card-body">--}}
{{--                                <h4 class="mt-0 header-title">Monthly Earnings</h4>--}}

{{--                                <div class="text-center">--}}
{{--                                    <div class="btn-group m-t-20" role="group" aria-label="Basic example">--}}
{{--                                        <button type="button" class="btn btn-secondary">Day</button>--}}
{{--                                        <button type="button" class="btn btn-secondary">Month</button>--}}
{{--                                        <button type="button" class="btn btn-secondary">Year</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div id="combine-chart" class="m-t-20"></div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 pl-md-0">--}}
{{--                        <div class=" card m-b-20" style="height: 486px;">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="m-b-20">--}}
{{--                                    <p>Weekly Earnings</p>--}}
{{--                                    <h5>$1,542</h5>--}}
{{--                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(103,168,228,0.3)"],"stroke": ["rgba(103,168,228,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>--}}
{{--                                </div>--}}
{{--                                <div class="m-b-20">--}}
{{--                                    <p>Monthly Earnings</p>--}}
{{--                                    <h5>$6,451</h5>--}}
{{--                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(74,193,142,0.3)"],"stroke": ["rgba(74,193,142,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>--}}
{{--                                </div>--}}
{{--                                <div class="m-b-20">--}}
{{--                                    <p>Yearly Earnings</p>--}}
{{--                                    <h5>$84,574</h5>--}}
{{--                                    <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(232, 65, 38,0.3)"],"stroke": ["rgba(232, 65, 38,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-3">--}}
{{--                <div class="card m-b-20">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="mt-0 header-title">Sales Analytics</h4>--}}

{{--                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">--}}
{{--                            <li class="list-inline-item">--}}
{{--                                <h5 class="mb-0">25610</h5>--}}
{{--                                <p class="text-muted font-14">Activated</p>--}}
{{--                            </li>--}}
{{--                            <li class="list-inline-item">--}}
{{--                                <h5 class="mb-0">56210</h5>--}}
{{--                                <p class="text-muted font-14">Pending</p>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <div id="donut-chart"></div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
        <!-- end row -->
        <div class="row">
            <div class="col-xl-3">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title m-b-30">Total Stock</h4>
                        <div class="text-center">
                            <input class="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#ffbb44" value="{{ $total_products }}" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>

                            <div class="clearfix"></div>
                            <a href="/admin/product" class="btn btn-sm btn-warning m-t-20">View All Data</a>
{{--                            <ul class="list-inline row m-t-30 clearfix">--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">7,541</p>--}}
{{--                                    <p class="mb-0">Mobile Phones</p>--}}
{{--                                </li>--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">125</p>--}}
{{--                                    <p class="mb-0">Desktops</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title m-b-30">Total Orders</h4>
                        <div class="text-center">
                            <input class="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#4ac18e" value="{{ $total_orders }}" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>

                            <div class="clearfix"></div>
                            <a href="/admin/orders" class="btn btn-sm btn-success m-t-20">View All Data</a>
{{--                            <ul class="list-inline row m-t-30 clearfix">--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">2,541</p>--}}
{{--                                    <p class="mb-0">Mobile Phones</p>--}}
{{--                                </li>--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">874</p>--}}
{{--                                    <p class="mb-0">Desktops</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title m-b-30">Shipped Orders</h4>
                        <div class="text-center">
                            <input class="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#8d6e63" value="{{ $shipped_orders }}" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>

                            <div class="clearfix"></div>
                            <a href="/admin/orders" class="btn btn-sm btn-brown m-t-20">View All Data</a>
{{--                            <ul class="list-inline row m-t-30 clearfix">--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">1,154</p>--}}
{{--                                    <p class="mb-0">Mobile Phones</p>--}}
{{--                                </li>--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">89</p>--}}
{{--                                    <p class="mb-0">Desktops</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title m-b-30">Cancelled Orders</h4>

                        <div class="text-center">
                            <input class="knob" data-width="120" data-height="120" data-linecap=round
                                    data-fgColor="#90a4ae" value="{{ $cancelled_orders }}" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1"/>

                            <div class="clearfix"></div>
                            <a href="/admin/orders" class="btn btn-sm btn-blue-grey m-t-20">View All Data</a>
{{--                            <ul class="list-inline row m-t-30 clearfix">--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">95</p>--}}
{{--                                    <p class="mb-0">Mobile Phones</p>--}}
{{--                                </li>--}}
{{--                                <li class="col-6">--}}
{{--                                    <p class="m-b-5 font-18 font-600">25</p>--}}
{{--                                    <p class="mb-0">Desktops</p>--}}
{{--                                </li>--}}
{{--                            </ul>--}}

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-30 header-title">Latest Transactions</h4>
                        <div class="table-responsive">
                            <table class="table table-vertical">
                                <tbody>
                                @foreach($latest_transaction as $transaction)
                                    <tr>
                                        <td>
{{--                                            <img src="assets/images/users/avatar-2.jpg" alt="user-image" class="thumb-sm rounded-circle"/>--}}
                                            {{ $transaction->invoices_id }}
                                        </td>

                                        <td>
                                            {{ $transaction->merchant_transaction_id }}

                                        </td>
                                        <td>
                                            {{ $transaction->gateway_transaction_id }}

                                        </td>
                                        <td>
                                            {{ $transaction->payment_status }}
                                        </td>
                                        <td>
                                            {{ $transaction->payment_method }}
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
    </div><!-- container -->
</div> <!-- Page content Wrapper -->
@endsection