<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
</head>


<body>

    <!-- Sidebar -->
    <div class="sidebar">
    <a href="{{ route('dashboard') }}" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>Aqua</span>link</div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="{{ route('dashboard.view') }}"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="{{ route('welcome') }}"><i class='bx bx-message-square-dots'></i>Homepage</a></li>
            <li><a href="{{ route('water-bodies.view') }}"><i class='bx bx-water'></i>Water Bodies</a></li>
            <li ><a href="{{ route('maps.view') }}"><i class='bx bx-map'></i>Map</a></li>
            <li ><a href="{{ route('species.view') }}"><i class='bx bx-map'></i>Species</a></li>
            <li><a href="{{ route('settings.view') }}"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
            <li>
    <a href="#" class="logout" id="logout-link">
        <i class='bx bx-log-out-circle'></i>
        Logout
    </a>
</li>

<script>
    document.getElementById('logout-link').addEventListener('click', function(e) {
        e.preventDefault();
       
        window.location.href = '/welcome'; 
    });
</script>

            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="{{ asset('images/no-profile.jpeg') }}">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Hello {{auth()->user()->name }}!</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">
                                Homepage
                            </a></li>
                        /
                        <li><a href="#" class="active">Dashboard</a></li>
                    </ul>
                </div>
               
            </div>

            <!-- Insights -->
            <ul class="insights">
                
                <li>
                    <img src="{{ ('images/fun.png') }}" alt="h3" width="300" height="170">
                    <span class="info">
                        <h3>
                            Fun Facts
                        </h3>
                        <p>Safe Recreation?</p>
                        <td><span class="Learn More"><a href="Funfact.html">Learn More</a> </span></td>
                    </span>
                </li>
                <li>
                    <img src="{{ asset('images/quiz2.png') }}" alt="h3" width="300" height="170">
                    <span class="info">
                        <h3>
                            Quiz
                        </h3>
                        <p>So you think you know?</p>
                        <td><span class="Learn More"><a href="{{ route('quiz.index') }}">Learn More</a> </span></td>
                    </span>
                </li>
            </ul>

            <div class="bottom-data">
                <div class="activity">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Water Bodies</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Water Body</th>
                                <th>Temperature</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/lake1.jpeg') }}">
                                    <p>Lake Naivasha</p>
                                </td>
                                <td>{{ $temperature ?? '88'}}</td>
                                <td><span class="status safe">Safe</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/lake2.jpeg') }}">
                                    <p>Indian Ocean</p>
                                </td>
                                <td>{{ $humidity ?? '77'}}</td>
                                <td><span class="status critical">Critical</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/lake1.jpeg') }}">
                                    <p>River Ewaso Nyiro</p>
                                </td>
                                <td>{{ $pH ?? '93'}}</td>
                                <td><span class="status danger">Danger</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Notifications</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-plus'></i>
                    </div>
                    <ul class="task-list">
                        <li class="safe">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Read on Endangered Species</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="safe">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Read on conservation efforts</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="safe">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Fun Facts</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>

                

        </main>

    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>