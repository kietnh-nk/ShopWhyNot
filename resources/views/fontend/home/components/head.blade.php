<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('page_title', 'BeeCloudy')</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('libaries/upload/images/logo/logo_index.png') }}">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome (icon cơ bản) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('libaries/templates/bee-cloudy-user/libaries/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('libaries/templates/bee-cloudy-user/libaries/css/custom_reponsive.css') }}">

<script>
    const BASE_URL = "{{ config('app.url') }}";
</script>
