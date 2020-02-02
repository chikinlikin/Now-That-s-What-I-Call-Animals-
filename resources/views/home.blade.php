@extends('layouts.app')

@section('content')
<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=GBP"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({


            style: {
                color:  'silver',
                shape:  'pill',
                label:  'pay',
                height: 40,
                locale: 'en_GB'
            },

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '10.00',
                            currency: 'GBP'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>
</body>
<div class="container">
    <div class="row justify-content-center">
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <script src="https://www.paypalobjects.com/api/checkout.js"></script>
      <!-- <script src="{{ asset('js/subscribe.js') }}" defer></script> -->
      <!-- Include the PayPal JavaScript SDK -->
      <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=GBP"></script>

      <div class="container col-4">
        <!-- Set up a container element for the button -->
        <div id="paypal-button-container"></div>
      </div>
      <div class="col-8">
        <div class="card-header" style="color: green"> < < Subscribe now for just £10!</div>
        <div class="card-body">
        <ul><li>Exclusive animal facts and downloads</li>
<li>Secure checkout with PayPal</li></ul>
      </div>
    </div>

        <div class="row pt-4">
          <!-- <div id="paypal-button-container"></div> -->

          <div class="col-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Lion_d%27Afrique.jpg" class="w-100">
          </div>
          <div class="col-8">
            <div class="card-header">The African Lion</div>
            <div class="card-body">
            <ul>
  <li>Favourite NOW! artist: Dua Lipa</li>
  <li>First NOW! Compilation owned: 41</li>
  <li>Hobbies: Basket weaving and doing big roars</li>
</ul>
          </div>
        </div>
        <div class="row pt-4">
          <div class="col-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/32/Decorated_Indian_elephant.jpg" class="w-100">
          </div>
          <div class="col-8">
            <div class="card-header">The Indian Elephant</div>
            <div class="card-body">
            <ul>
  <li>Favourite NOW! artist: Girls Aloud</li>
  <li>First NOW! Compilation owned: 67</li>
  <li>Hobbies: Giving rides to tourists and getting dressed up</li>
</ul>
          </div>
        </div>
    </div>
</div>
@endsection
