@extends('app')

@section('content')
	<div class="product_view">
		@foreach($results as $product)
			{!! Form::open(array('url'=>'product/add')) !!}
			
				<div class="product_view_img">
					<img src="{!! $product->Bild !!}" alt="{!! $product->Namn !!}" class="img-thumbnail">	
				</div>


				<div class="name"><h1>{!! $product->Namn; !!}</h1></div>

				<div class="product_view_desc">
					{!! $product->Beskrivning !!} 
				</div>
				
				<div class="product_view_rest">

					<div class="status"><h4>Lagerstatus: {!! $product->Lager !!}</h4></div>
					<div class="price"><h4>{!! $product->Pris; !!} :-</h4></div>
					<div class="size"><h4>{!! Form::select('Storlek', array('S' => 'small', 'L' => 'large'), $product->Storlek) !!}</h4></div>				
					
					
				</div>'

				<div class="view_button"><h4>{!! Form::submit('Lägg i varukorg', array('class'=>'btn btn-large btn-cartAdd openbutton')) !!}</h4></div>
				    
			
				
				{!! Form::hidden('quantity', 1) !!}
	            {!! Form::hidden('id', $product->id) !!}
	            {!! Form::hidden('base', 'product') !!}
	            {!! Form::hidden('Namn', $product->Namn) !!}
	            {!! Form::hidden('Pris', $product->Pris) !!}
	            
				{!! Form::close() !!}
			




		@endforeach
	</div>

@endsection
