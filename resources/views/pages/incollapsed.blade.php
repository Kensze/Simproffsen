<div class="well">
<div id="product_box">
	<div id="product_id">
		<p> ID</p>
	</div>
	<div id="product_count">
		<p> Antal </p>
	</div>
	<div id="product_cost_total">
		<p> Totalt </p>
	</div>
	<?php if ($_SERVER['REQUEST_URI'] == '/cart'): ?>
		<?php foreach($cart as $row) :?>

		<p>{!! $row->rowid !!}</p>

		{!! Form::open(array('url' => '/cart/update')) !!}
	    {!! Form::hidden('id', $row->rowid) !!}
		<div id="product_id">
			<p>{!! $row->name; !!}</p>
			
		</div>
		<div id="product_count">
			<p>{!! Form::text('quantity', $row->qty) !!}</p>
			<p>{!! Form::select('size', array('L' => 'large', 'S' => 'small'), $row->size) !!}</p>
		</div>
		<div id="product_cost_total">
			<p> {!! $row->subtotal; !!} </p>
			<p>{!! Form::submit('uppadatera') !!}</p>
	    	{!! Form::close() !!}
		</div>
	                  
	    
	    

   		<?php endforeach;?>
	<?php endif ?>
	

</div>
<div id="total_box">
{!! Cart::total() !!}
  
</div>
</div>
<div id="buttons">
<button type="button" id="trash_cart" onclick="{!! Cart::destroy() !!}">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  Töm varukorgen

</button>
<button type="button" id="continue_check_out">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  Till betalning
</button>
</div>




