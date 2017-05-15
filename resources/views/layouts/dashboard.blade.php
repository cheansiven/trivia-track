<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="siven" content="">

    <title>Dashboard Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{ url('css/plugins/bootstrap-select.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('css/plugins/datatables-bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{ url('css/dashboard.css?v=4.1.0') }}" />

</head>

<body class="fixed-sidebar full-height-layout white-bg">
    <div id="wrapper">
      <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i> </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a  href="{{ url('/dashboard') }}">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                      <strong class="font-bold">trivia-track</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                      <div class="logo-element">trivia-track</div>
                    </li>
                    <li>
                        <a href="{{ url('category') }}">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">Category</span>
                        </a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ url('/question') }}">
                            <i class="fa fa-question-circle"></i>
                            <span class="nav-label">Questions</span>
                        </a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="{{ url('/import-export') }}">
                            <i class="fa fa-file-text"></i>
                            <span class="nav-label">Import/Export</span>
                        </a>
                    </li>
              </ul><!-- class="nav" id="side-menu" -->
          </div><!-- class="sidebar-collapse" -->
      </nav><!-- class="navbar-default navbar-static-side" role="navigation" -->
      <div id="page-wrapper" class="white-bg dashbard-1">
          <div class="row border-bottom">
              <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"><i class="fa fa-bars"></i> </a></div>

                  <ul class="right_menu">
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <i class="fa fa-user-circle-o"></i></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="{{ url('logout') }}">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                          </ul>
                      </li>
                  </ul><!-- class="dropdown" -->
              </nav><!-- class="navbar navbar-static-top" -->
          </div><!-- class="row border-bottom" -->
              <div class="row content">
                  @yield('content')
              </div>
      </div><!-- id="page-wrapper" class="white-bg dashbard-1" -->
  </div><!--  id="wrapper" -->

    <!-- ScriptJs -->
        <script src="{{ url('js/plugins/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ url('js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/plugins/bootstrap-select.min.js') }}"></script>
        <script src="{{ url('js/plugins/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('js/plugins/datatables-bootstrap.js') }}"></script>
        <script src="{{ url('js/plugins/pace.min.js') }}"></script>
        <script src="{{ url('js/plugins/jquery.metisMenu.js') }}"></script>
        <script src="{{ url('js/hAdmin.js') }}"></script>

        @yield('js')
        <script>
            var baseUrl = '<?php echo  url('/') ?>/';
        </script>
        <script src="{{ url('js/script.js') }}"></script>
    </body>
</html>
