@extends('app')

@section('content')

<h1>Tack för betalning</h1>
<p>Din beställning</p>
	<?php foreach(Cart::content() as $product): ?>

	<p>{!!$product->name!!} Storlek: {!!$product->options->size !!} x{!!$product->qty!!}  </p>
	<?php endforeach;?>


<a href="/">Tillbaka till startsida</a>
{!! Cart::destroy() !!}
@endsection