
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    @yield('styles')

</head>
<body>

<div class="container-fluid">
    @yield('content')
</div>


<style src="//code.jquery.com/jquery-2.1.4.min.js"></style>
<style src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></style>
@yield('scripts')
</body>
</html>