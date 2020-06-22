@extends('backend.layout.app')


@section('header')

@endsection


@section('contents')

    <div class="page-content-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <form action="/admin/size" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Size Code</label>
                                    <input type="text" name="size_name" class="form-control" id="sizeName" placeholder="Enter Size Code" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Size</button>
                            </form>


                        </div>
                    </div>


                    <div class="card m-b-20">
                        <div class="card-body">

                            <h3 id="caption">Available Sizes</h3>

                            <table id="size_table" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Size Code</th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($sizes as $size)
                                    <tr id="sizeRow{{ $size->id }}">

                                        <td>{!! $size->size_name !!}</td>

                                        <td><a href="javascript:void(0)" onclick="return deleteSize({{ $size->id }})"
                                               class="fa fa-remove text-danger"></a></td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>

                <div class="col-md-9">
                    
                    

                    <div class="card m-b-20">
                        <div class="card-body">


                            <form action="/admin/size-chart" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Item</label>
                                    <input type="text" name="item_name" class="form-control" id="sizeName" placeholder="Enter Item Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Size</label>
                                    <input type="text" name="size" class="form-control" id="sizeName" placeholder="Enter Size Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Size Code</label>
                                    <select name="size_code" id="" class="form-control" required>
                                        @foreach($sizes as $size)
                                            <option value="{{ $size->id }}">{{ $size->size_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Measurement</label>
                                    <input type="number" name="measurement" class="form-control" id="sizeName" placeholder="Inch" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>

                        </div>
                    </div>

                    <div class="card m-b-20">
                        <div class="card-body">

                            <h3 id="caption" class="text-center">Size Chart</h3>

                            <table id="size_table" class="table table-striped dt-responsive nowrap table-vertical text-center" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Size</th>
                                    <th>Size Code</th>
                                    <th>Measurement</th>
                                </tr>
                                </thead>
                                <tbody>

                                @forelse($sizeCharts as $sizeChart)
                                    <tr>
                                        <td>{{ $sizeChart->item_name }}</td>
                                        <td>{{ $sizeChart->size }}</td>
                                        <td>{{ $sizeChart->size_code }}</td>
                                        <td>{{ $sizeChart->measurement }}</td>
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

        function deleteSize(id) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/admin/size/'+id,
                type: 'POST',
                data: {
                    'id': id
                },
                success: function (response) {
                    $('#sizeRow'+id).remove();
                }
            });

            return false;

        }



    </script>

@endsection