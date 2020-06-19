@extends('backend.layout.app')

@section('header')

@endsection

@section('contents')

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <h1 class="text-center">About Us</h1>
            <form action="/admin/about-us" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" id="elm1" name="about_us">{{ $page ? $page->about_us : '' }}</textarea>
                    </div>
                </div>

                <div class="form-group text-md-center">
                    <button class="btn btn-success" type="submit">ADD</button>
                </div>
            </form>
        </div>
    </div>

    <h3 class="text-center text-success">{{ session('message') }}</h3>





@endsection

@section('footer')

    <script>
        $(document).ready(function () {
            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height:300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>

@endsection