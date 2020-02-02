@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <!-- <div id="paypal-button-container"></div> -->
                </div>

                <!-- <script src="subscribe.js" type="text/javascript"></script>
                <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
  <div class="container">
  <div class="row">
   <div class="col-md-8 col-md-offset-2">

    @if (Session::has('message'))
     <div class="alert alert-{{ Session::get('code') }}">
      <p>{{ Session::get('message') }}</p>
     </div>
    @endif

    <div class="panel panel-default">
     <div class="panel-heading">Express checkout</div>
     <div class="panel-body">
      Pay $20 via:
      <a href="{{ route('paypal.express-checkout') }}" class='btn-info btn'>PayPal</a>
     </div>
    </div>

    <div class="panel panel-default">
     <div class="panel-heading">Recurring payments</div>
     <div class="panel-body">
      Pay $20/month:
      <a href="{{ route('paypal.express-checkout', ['recurring' => true]) }}" class='btn-info btn'>PayPal</a>
     </div>
    </div>

   </div>
  </div>
 </div>
            </div>
        </div>
    </div>
</div>
@endsection
