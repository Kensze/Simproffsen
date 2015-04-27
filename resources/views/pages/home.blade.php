@extends('app')

@section('content')

<div class="products_container">
	




		@foreach($results as $product)
		<div id="product_item">	
			
			{!! Form::open(array('url'=>'product/add')) !!}
			<p id="product_item_name">{!! $product->Namn; !!}</p>
			<p id="product_item_price">{!! $product->Pris; !!}</p>
			{!! Form::submit('Visa produktsida', ['class' => 'btn btn-large btn-cartAdd openbutton']) !!}

			
		</div>
			{!! Form::hidden('quantity', 1) !!}
            {!! Form::hidden('id', $product->id) !!}
            {!! Form::hidden('Namn', $product->Namn) !!}
            {!! Form::hidden('Pris', $product->Pris) !!}
            
			{!! Form::close() !!}

		@endforeach
	

	</div>
</div>
@stop
