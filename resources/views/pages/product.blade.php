@extends('app')

@section('content')
	<div class="product_view">

		<div class="product_view_img">
					<img src="{!! $results[0]->Bild !!}" alt="{!! $results[0]->Namn !!}" class="img-thumbnail">	
		</div>
		<div class="name"><h1>{!! $results[0]->Namn !!}</h1></div>

		<div class="product_view_desc">
			{!! $results[0]->Beskrivning !!}
		</div>
		<div class="product_view_rest">

					<div class="price"><h4>{!! $results[0]->Pris !!} :-</h4></div>
					<br>
					<br>
					<br>



		{!! Form::open(array('url'=>'product/add')) !!}
		<div class="size"><h4>
			{!! Form::select('Storlek', array_fetch($results, 'Storlek')) !!}
			{!! Form::select('Farg', array_fetch($results, 'Farg')) !!}
		</h4></div>		

			</div>

				
				    
				
				{!! Form::hidden('quantity', 1) !!}
	            {!! Form::hidden('id', $results[0]->Produkt_ID) !!}
	            {!! Form::hidden('base', 'product') !!}
	            {!! Form::hidden('Namn', $results[0]->Namn) !!}
	            {!! Form::hidden('Pris', $results[0]->Pris) !!}
	            {!! Form::hidden('Val', array_get($results, 'Storlek.1')) !!}

	            <div class="view_button"><h4>{!! Form::submit('Lägg i varukorg', array('class'=>'btn btn-large btn-cartAdd openbutton')) !!}</h4></div>
				{!! Form::close() !!}
	</div>

@endsection
