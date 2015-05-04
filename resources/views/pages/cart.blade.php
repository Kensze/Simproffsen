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
	       </tr>

   		<?php endforeach;?>