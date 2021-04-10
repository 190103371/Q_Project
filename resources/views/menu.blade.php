<!DOCTYPE html>
<html lang="kz">
<head>@yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body >
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal text-info">{{ __('lang.Quran')}}</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-5 text-info" href="/home">{{ __('lang.home')}}</a>
          <a class="p-5 text-info" href="/">{{ __('lang.about_us')}}</a>
          <a class="p-5 text-info" href="/request">{{ __('lang.request')}}</a>
        </nav>
        <a class="btn btn-outline-info" href="/">{{ __('lang.login')}}</a>
      </div>

      <div class="container">
      @yield('main_content')
      </div>
</body>
</html>
