@extends('app')

@section('content')
	
	<div id="product_item">	
		@foreach($results as $product)
			{!! Form::open(array('url'=>'product/add')) !!}
			<p>{!! $product->Namn; !!}</p>
			<p>Märke</p>
			<p>{!! $product->Pris; !!}</p>
			{!! Form::select('Storlek', array('S' => 'small', 'L' => 'large'), $product->Storlek) !!}
			<p>{!! $product->Beskrivning !!}</p>
			<p>Lagerstatus: {!! $product->Lager !!}</p>

			{!! Form::hidden('quantity', 1) !!}
            {!! Form::hidden('id', $product->id) !!}
            {!! Form::hidden('Namn', $product->Namn) !!}
            {!! Form::hidden('Pris', $product->Pris) !!}
            {!! Form::submit('Lägg i varukorg') !!}
			{!! Form::close() !!}

		@endforeach
	</div>
@endsection

