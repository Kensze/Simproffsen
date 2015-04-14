@extends('app')

@section('content')

<div class="products_container">
	<div id="product_item">	
		{!! HTML::image('img/jacka.jpg', 'alt', array( 'class' => "product_img" )) !!}
		<div class="product_price">
			alsdjfladfhjaskdfhkj
		</div>
		<div class="product_buttons">
			<span class="glyphicon glyphicon-shopping-cart" id="to_cart"></span>
			<span class="glyphicon glyphicon-heart" id="fav"></span>
		</div>
	</div>
</div>
@endsection
