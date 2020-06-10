    <!-- slider -->
    <div class="container-fluid rev-slider-content">
        <div class="row">
                <div class="tp-banner-container margin-bottom-50px">
                    <div class="slider_two" >
                        <ul>


                            @foreach($slides as $slide)

                                <!-- slide one -->
                                <li data-transition="zoomin" data-slotamount="3">

                                    <img src="{{ $slide->image_url }}" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">


                                </li>

                            @endforeach

                        </ul>
                    </div>
                </div>
        </div>
    </div>
	<!-- / slider -->
