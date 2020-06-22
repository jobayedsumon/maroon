@extends('frontend.layouts.app')

@section('contents')


	
	<!-- page title -->
	<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="page_title">
						<h1>PAYMENT POLICY</h1>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="bredcrumb">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Policy</a></li>
							<li><a href="#">Shipping & Exchange</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ page title -->
	
	<!-- Shopping Cart -->
	
	<div class="shopping-cart margin-bottom-70px">
		<div class="container">
			<div class="row">
                <div class="card">
                    <div class="card-body">

                        {!! $page->payment_policy !!}
                        
                    </div>
                </div>
			</div>
		</div>
	</div>
	
	<!-- / Shopping Cart -->
    
    
	<!--footer.blade.php-->

@endsection



	
