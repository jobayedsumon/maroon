@extends('backend.layout.app')


@section('header')

@endsection


@section('contents')

    <div class="page-content-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <form action="/admin/coupon" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="couponCode">Coupon Code</label>
                                    <input type="text" name="coupon_code" class="form-control" id="couponCode" placeholder="Enter Code" required>
                                </div>
                                <div class="form-group">
                                    <label for="couponValue">Coupon Value</label>
                                    <input type="number" name="coupon_value" class="form-control" id="couponValue" placeholder="%" required>
                                </div>
                                <div class="form-group">
                                    <label for="couponCount">Coupon Count</label>
                                    <input type="number" name="coupon_count" class="form-control" id="couponCount" placeholder="How many?" required>
                                </div>
                                <div class="form-group">
                                    <label for="expiryDate">Expiry Date</label>
                                    <input type="date" name="expiry_date" class="form-control" id="expiryDate" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Coupon</button>
                            </form>


                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h1 id="caption">Available Coupons</h1>

                            <table id="coupon_table" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Coupon Code</th>
                                    <th>Coupon Value</th>
                                    <th>Coupon Count</th>
                                    <th>Expiry Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($coupons as $coupon)
                                    <tr id="couponRow{{ $coupon->id }}">
                                        <td>{!! $coupon->coupon_name !!}</td>
                                        <td>{!! $coupon->discount_percentage !!}</td>
                                        <td>{!! $coupon->coupon_count !!}</td>
                                        <td>{!! $coupon->expiry_date !!} &nbsp;
                                            <a href="javascript:void(0)" onclick="return deleteCoupon({{ $coupon->id }})"
                                               class="fa fa-remove text-danger"></a></td>
                                    </tr>
                                @empty
                                @endforelse
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


    <script>

        function deleteCoupon(id) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                   url: '/admin/coupon/'+id,
                   type: 'POST',
                    data: {
                        'id': id
                    },
                    success: function (response) {
                        $('#couponRow'+id).remove();
                    }
                });

            return false;

        }



    </script>

@endsection