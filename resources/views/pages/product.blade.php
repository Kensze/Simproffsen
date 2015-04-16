@extends('app')

@section('content')
	
	<div id="product_item">	
		@foreach($results as $product)
			
			<p>{!! $product->Namn; !!}</p>
			<p>Märke</p>
			<p>{!! $product->Pris; !!}</p>
			

		@endforeach
	</div>
@endsection

