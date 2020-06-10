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
            $('#order_table').DataTable();
        });
    </script>
@endsection