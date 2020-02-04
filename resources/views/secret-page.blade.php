@extends('layouts.app')

@section('content')
<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>
        <div class="row pt-4">
          <!-- <div id="paypal-button-container"></div> -->

          <div class="col-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Lion_d%27Afrique.jpg" class="w-100">
          </div>
          <div class="col-8">
            <div class="card-header">Secret download!</div>
            <!-- <div class="card-body">
              <li>Very secret!</li> -->
              <script> alert("Entering top secret area!"); </script>
                <? if (verifyMembership()): ?>
                  <a href="{{ route('download') }}">Secret download!</a>
                <? endif; ?>

                <!--<a href="{{ route('download') }}">Secret download!</a>-->

          </div>
        </div>
</div>
</body>
@endsection
