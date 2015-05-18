<div class="well">
<div id="product_box">
<!--  <div id="product_id">
    <p> ID</p>
  </div>
  <div id="product_count">
    <p> Antal </p>
  </div>
    <div id="product_count">
    <p> Antal </p>
  </div>

-->

    <?php foreach($cart as $row) :?>
    {!! Form::open(array('url' => '/cart/update')) !!}
      {!! Form::hidden('id', $row->rowid) !!}
      <div id="product_image">
        <a href="{{URL::to('/product/view/' . $row->id)}}"><img src={{asset($row->options->img)}} alt="Logo"></a>
      </div>
      <div id="product_id">
        <p>  {!! link_to('product/view/' . $row->id, $row->name, $secure = null) !!}</p>
      </div>
      <div id="product_qty">
        {!! Form::text('quantity', $row->qty) !!}
      </div>
      <div id="product_size">
        {!! Form::select('size', array('L' => 'Large', 'S' => 'Small')) !!}
      </div>
      <div id="product_price">
        $<?php echo $row->price;?>
      </div>    
      <div id="product_subtotal">
        $<?php echo $row->subtotal;?>
      </div>
      <div id="product_delete">
        {!! Form::open(array('url'=>'cart/delete')) !!}
        {!! Form::hidden('id', $row->rowid) !!}
        {!! Form::submit('X') !!}
       
      </div>
                    
      <div id="product_submit">
        {!! Form::submit('Uppdatera') !!}
        {!! Form::close() !!}
      </div>



      <?php endforeach;?>

</div>
<div id="total_box">
{!! Cart::total() !!} kr

</div>
</div>
<div id="buttons">
<button type="button" id="trash_cart">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
  Töm varukorgen
</button>
 <a href="checkout">
<button type="button" id="continue_check_out">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
 Till betalning
</button>
</a>
</div>

