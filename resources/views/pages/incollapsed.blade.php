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
{!! Cart::content() !!}

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
        {!! Form::select('size', $row->options->sizes, $row->options->size) !!}
        {!! Form::select('color', $row->options->colors, $row->options->color) !!}
      </div>
      <div id="product_price">
        $<?php echo $row->price;?>
      </div>    
      <div id="product_subtotal">
        $<?php echo $row->subtotal;?>
      </div>
      
                    
      <div id="product_submit">
        {!! Form::submit('Uppdatera') !!}
        {!! Form::close() !!}

      </div>
      <div id="product_delete">
        {!! Form::open(array('url'=>'cart/delete')) !!}
        {!! Form::hidden('id', $row->rowid) !!}
        {!! Form::submit('X') !!}
        {!! Form::close() !!}
      </div>

      <?php endforeach;?>

</div>
<div id="total_box">
{!! Cart::total() !!} kr

</div>
</div>
<div id="buttons">
  {!! Form::open(array('url'=>'cart/destroy', 'class'=>'glyphicon glyphicon-trash', 'id'=>'trash_cart')) !!}
  {!! Form::submit('Töm varukorg',['class' => 'cart_button']) !!}
  {!! Form::close() !!}

  {!! link_to('/checkout', ' Till betalning', $attributes = array('class'=>'glyphicon glyphicon-ok', 'id'=>'continue_check_out'), $secure = null) !!}

</div>

