@extends('app')

@section('content')
	
		@foreach($results as $product)
			{!! Form::open(array('url'=>'product/add')) !!}
			<div id="product_view_item">
				<div class="product_view_img">
					<img src="{!! $product->Bild !!}" alt="{!! $product->Namn !!}" class="img-thumbnail">


				</div>

				
				<p class="product_view_price">{!! $product->Pris; !!}</p>
				<p>{!! Form::select('Storlek', array('S' => 'small', 'L' => 'large'), $product->Storlek) !!}</p>
				<p class="product_view_desc">{!! $product->Beskrivning !!} {!! Form::submit('Lägg i varukorg') !!}</p>
				<p class="product_view_stat">Lagerstatus: {!! $product->Lager !!}</p>

			</div>
		</br>
			<div id="product_view_name">
				<p>{!! $product->Namn; !!}</p>
			</div>

			{!! Form::hidden('quantity', 1) !!}
            {!! Form::hidden('id', $product->id) !!}
            {!! Form::hidden('Namn', $product->Namn) !!}
            {!! Form::hidden('Pris', $product->Pris) !!}
            
			{!! Form::close() !!}

		@endforeach
	

@endsection
