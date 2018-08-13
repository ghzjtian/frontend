<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="bookmark" href="/favicon.ico"/>
<title>@yield('page_title',setting('glb.title'))</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo asset('css/w3.css')?>">
<link rel="stylesheet" href="<?php echo asset('css/raleway.css')?>">
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css')?>">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Raleway", sans-serif
    }

    body, html {
        height: 100%;
        line-height: 1.8;
    }
    .w3-bar .w3-button {
        padding: 16px;
    }

    /* laravel pagination 居中显示  https://stackoverflow.com/questions/43679491/bootstrap-4-center-pagination-in-column/43679608 */
    .pagination {
        justify-content: center;
    }

</style>
