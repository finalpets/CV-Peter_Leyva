@extends('layout.master')
@section('title','| Home Page')
    <!-- scrollToTop -->
    <!-- ================ -->


    <div class="scrollToTop"><i class="icon-up-open-big"></i></div>    
    @include('partials._nav') 
@section('content')
 {{-- {{ Auth::check() ? "Logged In" : "Log Out" }} --}}
		<!-- section start About-->
		<!-- ================ -->
		@include('partials._about')  
		<!-- section end -->

		<!-- section start Services -->
		@include('partials._services') 
		<!-- ================ -->

		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space blue">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Hagamos que su negocio prospere!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start Portfolio-->			
		<!-- ================ -->
			@include('partials._portfolio') 

		<!-- section end -->

		<!-- section start Clientes-->
		<!-- ================ -->
			@include('partials._clients')

		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Hablemos de negocios!</h1>
					</div>
				</div>
			</div>
		</div>

@section('footer')		
	<footer id="footer">
		@include('partials._contact')
		@include('partials._footer')	
	</footer>
@endsection

		<!-- section end -->
@endsection



