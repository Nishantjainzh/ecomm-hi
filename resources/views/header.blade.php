<?php 
use App\Http\Controllers\ProductController;
//$call = new ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::countItem();
}

?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">FLip-EcoMM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="{{url('/')}}" class="btn btn-primary" style="color: black;">E-Home</a></li>
        <li><a href="#">Orders</a></li>
        
      </ul>
      <form action="{{url('/search')}}" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Search...." style="width: 300px;">
        </div>
        <button type="submit" class="btn btn-success">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/logout')}}">LogOut</a></li>
        </ul>
      </li>
      <li>@else
      <a href="{{url('/login')}}" style="color: blue; font-size: 15px;">Login</a>
      @endif</li>
        <li><a href="{{url('/cartItem')}}" style="color: blue; font-size: 15px;">Cart Items {{$total}}</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>