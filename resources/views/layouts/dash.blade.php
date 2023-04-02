<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Prestige Co. DashBoard</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />

        <!--Stylesheet-->
        <link rel="stylesheet" href="/assets/css/dashboard.css" >
        <link rel="stylesheet" href="/assets/css/navigation.css" >

    </head>
    <body class="dashboard-body">
        <div>
            <div class='topNav'>
                <div class="logo-title">               
                    <img class="logo" src="/assets/img/logo.png">
                    <h2>Prestige Co.</h2>
                </div>

                <div class="dropdown">
                    <div class="dropbtn">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="#"> Profile </a>
                        <a href="#"> Logout </a>
                    </div>
                </div>
            </div>
            

            <div class='sidebar'>
                <ul class ='nav-links'>
                    <li>
                        <a href='#'>
                            <i class="ionicons ion-grid"></i>
                            <span class='link_name'>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href='#'>
                            <i class="ionicons ion-ios-people"></i>
                            <span class='link_name'>Staff Section</span>
                        </a>
                    </li>
                    <li>
                        <a href='#'>
                            <i class="ionicons ion-ios-list"></i>
                            <span class='link_name'>Booking List</span>
                        </a>
                    </li>
                    <li>
                        <a href='#'>
                            <i class="ionicons ion-ios-chatbubble"></i>
                            <span class='link_name'>Complaints</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        @yield('content')

        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="/assets/js/home.js"> </script>
        <script src="/assets/js/bookings.js"> </script>
    </body>
</html>