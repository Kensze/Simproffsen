@extends('app')

@section('content')

<div class="products_container">





    <?php foreach($results as $product): ?>
    <div id="product_item">	

      <p id="product_item_name">{!! $product->Namn; !!}</p>
      <p id="product_item_price">{!! $product->Pris; !!}</p>
      <button class="btn btn-large btn-cartAdd openbutton">
        {!! link_to('product/view/' . $product->id, 'Till produktsida', $attributes = array('class'=>'btn btn-large btn-cartAdd openbutton'), $secure = null) !!}
      </button>

    </div>
    <?php endforeach;?>


  </div>
</div>
@stop
