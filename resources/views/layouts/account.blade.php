<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
    <title>@yield('page-title')</title>
</head>
<body>
   @include('components/header')
    
    <div class="account-layout">
        <div class="listings-city">
            <img class="listings-city__img" src="@yield('page-bg')" alt="">
            <h1 class="listings-city__title">@yield('title')</h1>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="account__menu">
                            <h3>Welcome, {{ Auth::user()->name }}</h3>
                            <h2>Menu</h2>
                            <a href="{{route('account')}}">Saved Listings</a>
                            <a href="{{route('show-status')}}">Listing Request Status</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                            @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>