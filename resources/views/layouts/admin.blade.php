<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/adm/css/vendor.min.css">
    <link rel="stylesheet" href="/adm/css/elephant.min.css">
    <link rel="stylesheet" href="/adm/css/docs.css">
    <link rel="stylesheet" href="/adm/css/modification.css">
    <script type="text/javascript" src="/adm/js/ckeditor/ckeditor.js"></script>
</head>
<body class="layout">

<div class="layout-sidebar">
    <div class="custom-scrollbar">
        <div class="layout-sidebar-header">
            <button class="doc-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                <span class="sr-only">Toggle navigation</span>
                <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
                <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
            </button>
            <a class="doc-version" href="#1.0.0">v1.0.0</a>
            <a class="doc-brand" href="/">
                <img class="doc-brand-logo" src="/adm/img/logo-inverse.svg" alt="Elephant">
            </a>
        </div>
        <div class="layout-sidebar-body">
            <nav id="sidenav" class="sidenav-collapse collapse">
                <ul class="sidenav">
                    <li class="sidenav-item">
                        <a class="sidenav-link" href="/">Overview</a>
                    </li>
                    <li class="sidenav-divider"></li>

                    {{--Sidebar item--}}
                    <li class="sidenav-item">
                        <a class="sidenav-link top-section" href="{{ route('admin.client.index') }}">
                            <i class="fa fa-table">&nbsp</i> Clients
                        </a>
                    </li>
                    <li class="sidenav-divider"></li>


                    {{--Sidebar item--}}
                    <li class="sidenav-item">
                        <a class="sidenav-link top-section" href="{{ route('admin.message.index') }}">
                            <i class="fa fa-table">&nbsp</i> Messages
                        </a>
                    </li>
                    <li class="sidenav-divider"></li>


                    {{--Sidebar item--}}
                    <li class="sidenav-item">
                        <a class="sidenav-link top-section" href="{{ route('admin.subscriber.index') }}">
                            <i class="fa fa-table">&nbsp</i> Subscribers
                        </a>
                    </li>
                    <li class="sidenav-divider"></li><br>

                    {{--Sidebar item--}}
                    <li class="sidenav-item">
                        <a class="sidenav-link top-section" href="{{ route('admin.course.index') }}">
                            <i class="fa fa-table">&nbsp</i> Courses
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a class="sidenav-link" href="{{ route('admin.course.index') }}">List</a>
                    </li>
                    <li class="sidenav-item">
                        <a class="sidenav-link" href="{{ route('admin.course.create') }}">Create</a>
                    </li>
                    <li class="sidenav-divider"></li>

                    {{--Sidebar item--}}
                    <li class="sidenav-item">
                        <a class="sidenav-link top-section" href="{{ route('admin.teacher.index') }}">
                            <i class="fa fa-table">&nbsp</i> Teachers
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a class="sidenav-link" href="{{ route('admin.teacher.index') }}">List</a>
                    </li>
                    <li class="sidenav-item">
                        <a class="sidenav-link" href="{{ route('admin.teacher.create') }}">Create</a>
                    </li>
                    <li class="sidenav-divider"></li>


                    {{--Sidebar item--}}
                    <li class="sidenav-item">
                        <a class="sidenav-link top-section" href="{{ route('admin.advantage.index') }}">
                            <i class="fa fa-table">&nbsp</i> Advantages
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a class="sidenav-link" href="{{ route('admin.advantage.index') }}">List</a>
                    </li>
                    <li class="sidenav-item">
                        <a class="sidenav-link" href="{{ route('admin.advantage.create') }}">Create</a>
                    </li>
                    <li class="sidenav-divider"></li>

                </ul>
            </nav>
        </div>
    </div>
</div><!-- /.layout-sidebar -->



@yield('content')



<script src="/adm/js/vendor.min.js"></script>
<script src="/adm/js/elephant.min.js"></script>
<script src="/adm/js/docs.js"></script>
<script src="/adm/js/demo.js"></script>
<script type="text/javascript" src="/adm/js/bootstrap-filestyle.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
