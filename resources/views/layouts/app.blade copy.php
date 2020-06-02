<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>myapp</title>
</head>
<body>
   @include('layouts.navigation') <?php// include 'layouts.navigation'; ?><!-- @include (blade), fungsi sama dengan native -->
   @yield('content') <!-- akan di wrap -->
</body>
</html>