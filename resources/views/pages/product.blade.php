@extends('app')

@section('content')
	
		@foreach($results as $product)
			{!! Form::open(array('url'=>'product/add')) !!}
			<div id="product_view_item">
				<div class="product_view_img">
					<img src="{!! $product->Bild !!}" alt="{!! $product->Namn !!}" class="img-thumbnail">

					
				</div>

				
				<div class="product_view_down">
					{!! $product->Beskrivning !!} {!! Form::submit('Lägg i varukorg') !!}
					{!! Form::select('Storlek', array('S' => 'small', 'L' => 'large'), $product->Storlek) !!}
					Lagerstatus: {!! $product->Lager !!}
					<p>{!! $product->Pris; !!} KR</p>
					{!! $product->Namn; !!}

				</div>
				

			</div>


			{!! Form::hidden('quantity', 1) !!}
            {!! Form::hidden('id', $product->id) !!}
            {!! Form::hidden('base', 'product') !!}
            {!! Form::hidden('Namn', $product->Namn) !!}
            {!! Form::hidden('Pris', $product->Pris) !!}
            
			{!! Form::close() !!}

		@endforeach
	

@endsection
