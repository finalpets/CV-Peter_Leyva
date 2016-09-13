@extends('layout.master')
@section('title','| Home Page')

@section('banner')
            <div class="col-md-10 col-md-offset-1 object-non-visible" data-animation-effect="zoomIn">
              <h1 class="text-center">Desarrollador de Paginas <span>Web</span></h1>
              <p class="lead text-center">Innovando con la tecnologia mas actual, diseños de paginas muy vistosas rapidas y economicas para su negocio.</p>
@endsection
@section('content')
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



