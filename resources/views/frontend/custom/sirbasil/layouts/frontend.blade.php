<!doctype html>
<html>

@include(_get_frontend_layout_path('frontend._head'))
<body id="page-top">
@include(_get_frontend_layout_path('frontend._nav'))
@include(_get_frontend_layout_path('frontend._header'))

@yield('content')

@include(_get_frontend_layout_path('frontend._footer'))
@include(_get_frontend_layout_path('frontend.js'))

</body>
</html>