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

                            <form action="/admin/color" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="colorName">Color Name</label>
                                    <input type="text" name="color_name" class="form-control" id="colorName" placeholder="Enter Color Name" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Color</button>
                            </form>


                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h1 id="caption">Available Colors</h1>

                            <table id="color_table" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Color</th>
                                    <th>Color Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($colors as $color)
                                    <tr id="colorRow{{ $color->id }}">
                                        <td style="background-color: {{ $color->color_name }}"></td>
                                        <td>{!! $color->color_name !!}</td>

                                            <td><a href="javascript:void(0)" onclick="return deleteColor({{ $color->id }})"
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

        function deleteColor(id) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/admin/color/'+id,
                type: 'POST',
                data: {
                    'id': id
                },
                success: function (response) {
                    $('#colorRow'+id).remove();
                }
            });

            return false;

        }



    </script>

@endsection