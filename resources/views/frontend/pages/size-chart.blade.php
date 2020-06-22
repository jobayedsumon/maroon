@extends('frontend.layouts.app')

@section('header')
    <style type="text/css">
        .black-border {
            border: 1px solid black;
        }
        .disable-button{
            cursor: not-allowed;
            pointer-events: none;
            /*
            |
            |---Button disabled
            |--- CSS color class
            |
            */
            color: #c0c0c0;
            background-color: #ffffff;
        }
    </style>
@endsection


@section('contents')

    <!-- page title -->
    <div class="page_title_area">
        <div class="container">
            <div class="row">

                <hr>

                    <h2><a name="245"></a>Men's General Sizing Guide</h2>
                    <hr>
                    <h3>Measuring Tips to Assure The Best Fit</h3>

                    <ul class="measure-list col-md-8">
                        <li><span>NECK:</span> Measure around your neck at the Adam's apple, keeping a finger between your neck and the tape measure to ensure a comfortable fit.</li>
                        <li><span>SLEEVE:</span> With arm bent and hand on hip, place tape measure at the base of your neck and follow along the top shoulder and arm to the wrist.</li>
                        <li><span>CHEST:</span> With arms at sides, place tape measure under your arms and run it around the broadest part of the chest and across the shoulder blades.</li>
                        <li><span>WAIST:</span> Find the natural crease of your waist by bending to one side. Run tape measure around your natural waistline, keeping one finger between the tape and your body for a comfortable fit.</li>
                        <li><span>INSEAM:</span> For full-length pants, run tape measure along the inside of your leg, from just below the crotch to about 1 inch below the ankle.</li>
                        <li><span>HEAD:</span> Run tape measure around your head, just above the brow line.</li>
                        <li><span>HANDS:</span> Run tape measure around the circumference of your hand at the knuckles. Do not include the thumb.</li>
                    </ul>
                    <img src="/storage/men-size.png" id="mannequin" width="150" height="290" alt="" class="col-md-4">

            </div>

            <hr>

            <div class="row">

                    <h2><a name="200"></a>Women's General Sizing Guide</h2>
                    <hr>

                    <h3>Measuring Tips to Assure The Best Fit</h3>
                    &nbsp;
                    <ul class="measure-list col-md-8">
                        <li><span>BUST:</span> With arms at sides, place tape measure under your arms and run it around the fullest part of the bustline and across the shoulder blades.</li>
                        <li><span>NATURAL WAIST:</span> Find the natural crease of your waist by bending to one side. Run tape measure around your natural waistline, keeping one finger between the tape and your body for a comfortable fit.</li>
                        <li><span>LOW WAIST:</span> Run tape measure about 2 to 3 inches below your natural waistline, keeping one finger between the tape and your body for a comfortable fit.</li>
                        <li><span>HIPS:</span> With feet together, run tape measure around the fullest part of your hips/seat, about 7 to 8 inches below your waistline.</li>
                        <li><span>INSEAM:</span> For full-length pants, run tape measure along the inside of your leg, from just below the crotch to about 1 inch below the ankle.</li>
                        <li><span>HEAD:</span> Run tape measure around your head, just above the brow line.</li>
                        <li><span>HANDS:</span> Run tape measure around the circumference of your hand at the knuckles. Do not include the thumb.</li>
                    </ul>

                    <img SRC="/storage/women-size.png" id="mannequin" width="150" height="290" alt="" class="col-md-4">

            </div>

            <hr>




                <div class="row">

                    <h1 class="text-center">Our Complete Size Chart</h1>


                    <table class="table table-striped dt-responsive nowrap table-vertical text-center black-border">
                        <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Size</th>
                            <th scope="col">Size Code</th>
                            <th scope="col">Measurement</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($sizeCharts as $sizeChart)

                            <tr>
                                <td>{{ $sizeChart->item_name }}</td>
                                <td>{{ $sizeChart->size }}</td>
                                <td>{{ $sizeChart->size_code }}</td>
                                <td>{{ $sizeChart->measurement }} inch</td>
                            </tr>

                        @empty
                        @endforelse


                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


@endsection

@section('footer')

@endsection