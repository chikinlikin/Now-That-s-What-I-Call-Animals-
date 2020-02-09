@extends('layouts.app')

@section('content')
<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php define('download-origin', 'hh235234kkk25929@@#as'); ?>
</head>

<body>
        <div class="row pt-4">
          <div class="col-4">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/Lion_d%27Afrique.jpg" class="w-100">
          </div>
          <div class="col-8">
            <div class="card-header">Secret download!</div>
            <div class="card-body">
                <?php if (Auth::user()->verifyMembership() == false){?>
                    {{ Auth::user()->verifyMembership() }}
                    <a>You're a member!</a><br>
                    <a href="{{ route('download', ['id' => 'hh235234kkk25929@@#as']) }}">Secret download!</a><br>
                <?php } else { ?>
                    <a>You're not a member :(</a>
                <?php } ?>
          </div>
        </div>
</div>
</body>
@endsection
