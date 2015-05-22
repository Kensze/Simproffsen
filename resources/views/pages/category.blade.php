@extends('app')

@section('content')

<div class="products_container">
    <?php foreach($results as $product): ?>
    <div id="product_item">	
      <p id="product_item_img">
        <a href="{!! '/product/view/' . $product->Produkt_ID !!}"><img class="" src="{!! $product->Bild !!}" alt="{!! $product->Namn !!}" class="img-thumbnail"></a>
      </p>
      <p id="product_item_name">{!! $product->Namn; !!}</p>
      <p id="product_item_price">{!! $product->Pris; !!} KR</p>
      <button class="btn btn-large btn-cartAdd openbutton">
        {!! link_to('product/view/' . $product->Produkt_ID, 'Till produktsida', $attributes = array('class'=>'btn btn-large btn-cartAdd openbutton'), $secure = null) !!}
      </button>

    </div>
    <?php endforeach;?>


  </div>

@stop
