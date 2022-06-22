<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>NAF-STORE||{{ $title }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="Assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="Assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/Assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/Assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Assets/css/custom.css">

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
