@extends('backend.layout.app')

@section('header')
    <style type="text/css">
        .dataTables_filter {
            width: 50%;
            float: right !important;
            text-align: right;
            margin-left:500px;
        }
    </style>
@endsection


@section('contents')

    <div class="page-content-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="customer_table" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Billing Address</th>
                                    <th>Shipping Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                    <tr>
                                        <td>{!! $customer->name !!}</td>
                                        <td>{!! $customer->email !!}</td>
                                        <td>{!! $customer->phone_number !!}</td>
                                        <td>{!! $customer->information ? $customer->information->billing_address : '' !!}</td>
                                        <td>{!! $customer->information ? $customer->information->shipping_address : '' !!}</td>
{{--                                        <td><a href="order-details/{{ $customer->id }}"><label for="" class="badge badge-info">GO</label></a></td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div><!-- container -->

    </div> <!-- Page content Wrapper -->


@endsection


@section('footer')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#customer_table').DataTable();
        });
    </script>
@endsection