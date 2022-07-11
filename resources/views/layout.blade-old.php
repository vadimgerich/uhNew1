<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/dyn.js"></script>
    <header class="main-header">
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>SOS</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SOS</b></span>
        </a>
        <div id="login-part">

        </div>
    </header>

    <aside class="main-sidebar col-md-4 inlined">
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="opop">
                    <a href="/">
                        <i class="fa fa-dashboard"></i> <span>Головна</span>
                    </a>
                </li>

                <li>
                    <a href="/tasks.php">
                        <i class="fa fa-list"></i> <span>Обробка</span>
                    </a>
                </li>

                <li>
                    <a href="/special.php">
                        <i class="fa fa-line-chart"></i> <span>Звіти</span>
                    </a>
                </li>

                <li>
                    <a href="/infoservices.php">
                        <i class="fa fa-commenting"></i> <span>Інфосервіси</span>
                    </a>
                </li>

                <li>
                    <a href="/tags.php">
                        <i class="fa fa-tags"></i> <span>Теги</span>
                    </a>
                </li>

                <li>
                    <a href="/usrs.php">
                        <i class="fa fa-male"></i> <span>Користувачі</span>
                    </a>
                </li>

                <li>
                    <a href="/options.php">
                        <i class="fa fa-gears"></i> <span>Налаштунки</span>
                    </a>
                </li>

                <li>
                    <a href="/backups.php">
                        <i class="fa fa-archive"></i> <span>Резервні копії</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="inlined">
        @yield('main_content')
    </div>

</body>
</html>
