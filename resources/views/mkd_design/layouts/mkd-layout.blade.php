<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>@yield('title')</title>
      <link rel="icon" href="{{ asset('mkd_design/assets/images/logo/favicon.png') }}"/>
       @include('mkd_design.include.links.headerlinks')

</head>

@include('mkd_design.include.bars.navbar')




@yield('content')


@include('mkd_design.include.bars.footer')



@include('mkd_design.include.links.footerlinks')

</body>
</html>
