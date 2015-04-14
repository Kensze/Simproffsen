@extends('pages/incollapsed')

@section('cart')

<div id="content" height="500px">
<table>
    <thead>
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Item Price</th>
            <th>Subtotal</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach($cart as $row) :?>
        <tr>
            <td>
                <p><strong><?php echo $row->name;?></strong></p>
                <p><?php echo ($row->options->has('size') ? $row->size : '');?></p>
            </td>
            <td><input type="text" value="<?php echo $row->qty;?>"></td>
            <td>$<?php echo $row->price;?></td>
            <td>$<?php echo $row->subtotal;?></td>
            <td>
                  {!! Form::open(array('url' => '/cart/update')) !!}
                  {!! Form::hidden('id', $row->rowid) !!}
                  {!! Form::text('size', $row->size) !!}
                  {!! Form::select('size', array('L' => 'Large', 'S' => 'Small')) !!}
                  {!! Form::text('quantity', $row->qty) !!}
                  {!! Form::submit('uppadatera') !!}
                  {!! Form::close() !!}
            </td>
       </tr>

    <?php endforeach;?>

    </tbody>
      </table>
</div>

@endsection