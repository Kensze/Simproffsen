
<div class="well">
<div id="product_box">
	<div id="product_id">
		<p> Produkt</p>
	</div>
	<div id="product_count">
		<p> Antal </p>
	</div>
	<div id="product_cost_total">
		<p> Totalt </p>
	</div>
		<?php foreach($cart as $row) :?>
		{!! Form::open(array('url' => '/cart/update')) !!}
	    {!! Form::hidden('id', $row->rowid) !!}
		<div id="product_id">
			<p>{!! $row->name; !!}</p>
		</div>
		<div id="product_count">
			<p></p>
			{!! Form::select('size', array('L' => 'Large', 'S' => 'Small')) !!}
	        {!! Form::text('quantity', $row->qty) !!}
		</div>
		<div id="product_cost_total">
			<p> Totalt </p>
		</div>
	        <tr>
	            <td>
	                <p><strong></strong></p>
	                <p><?php echo ($row->options->has('size') ? $row->size : '');?></p>
	            </td>
	            <td><input type="text" value="<?php echo $row->qty;?>"></td>
	            <td>$<?php echo $row->price;?></td>
	            <td>$<?php echo $row->subtotal;?></td>
	            <td>
	                  
	                  {!! Form::text('size', $row->size) !!}
	                  
	                  {!! Form::submit('uppadatera') !!}
	                  {!! Form::close() !!}
	            </td>
	            <td>
	            	{!! Form::open(array('url'=>'cart/delete')) !!}
	            	{!! Form::hidden('id', $row->rowid) !!}
					{!! Form::submit('X') !!}
					{!! Form::close() !!}
	            </td>
	       </tr>

   		<?php endforeach;?>
	

</div>
<div id="total_box">
Hejsan
  
</div>
</div>
<div id="buttons">
  {!! Form::open(array('url'=>'cart/destroy', 'class'=>'glyphicon glyphicon-trash', 'id'=>'trash_cart')) !!}
  {!! Form::submit('Töm varukorg',['class' => 'cart_button']) !!}
  {!! Form::close() !!}

  {!! link_to('/checkout', ' Till betalning', $attributes = array('class'=>'glyphicon glyphicon-ok', 'id'=>'continue_check_out'), $secure = null) !!}

</div>