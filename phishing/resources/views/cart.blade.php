@extends('layouts.app')

@section('content')
<div class="container">
  <!-- Jumbotron Header -->
  <header class="jumbotron" style="height: 200px; margin-top: 2rem; margin-bottom: 2rem; background: url(img/login.png); background-size: 100% 100%; background-position: center;">
  </header>

  @if (Auth::check())
    @if (\Cart::count() > 0)
      <fieldset>
        <legend>Shopping cart</legend>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="alert alert-info" role="alert">
              You successfully added a product in your cart, you now have <b>@if (Auth::check()) {{ \Cart::count() }} @endif</b> products in your cart in total. You can add more on the shopping page. Please review below before checking out.
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach(\Cart::content() as $row) :?>
                  <tr>
                    <td>
                      <p><strong><?php echo $row->name; ?></strong></p>
                      <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                    </td>
                    <td><?php echo $row->qty; ?></td>
                    <td>&euro; <?php echo $row->price; ?></td>
                  </tr>
                <?php endforeach;?>
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="1">&nbsp;</td>
                  <td><b>Total</b></td>
                  <td>&euro; <?php echo \Cart::subtotal(); ?></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </fieldset>
      <a href="/done" class="btn btn-block btn-large btn-success"><i class="fa fa-money-bill"> Check out</i></a>
      <p></p>
    @else
      <div class="alert alert-danger" role="alert">
        You don't have any items in your cart.
      </div>
    @endif
  @else
    <div class="alert alert-danger" role="alert">
      Please login to see your cart.
    </div>
  @endif
</div>
@endsection
