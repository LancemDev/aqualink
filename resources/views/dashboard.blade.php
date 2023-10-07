<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href=".../public/images/favicon.png" type="image/x-icon">
</head>


<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href=".../public/images/logo.png" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>Aqua</span>link</div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="Dashboard.blade.php"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="#"><i class='bx bx-message-square-dots'></i>Homepage</a></li>
            <li><a href="#"><i class='bx bx-water'></i>Water Bodies</a></li>
            <li ><a href="#"><i class='bx bx-map'></i>Map</a></li>
            <li ><a href="#"><i class='bx bx-map'></i>Species</a></li>
            <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
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
                <img src="Assets/images/no-profile.jpeg">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Hello John</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
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
                    <img src=".../public/images/lake1.jpeg" alt="h3" width="300" height="170">
                    <span class="info">
                        <h3>
                            Fun Facts
                        </h3>
                        <p>Safe Recreation?</p>
                        <td><span class="Learn More"><a href="#">Learn More</a> </span></td>
                    </span>
                </li>
                <li>
                    <img src=".../public/images/lake1.jpeg" alt="h3" width="300" height="170">
                    <span class="info">
                        <h3>
                            Quiz
                        </h3>
                        <p>So you think you know?</p>
                        <td><span class="Learn More"><a href="{{ route('quiz.index') }}" class="mt-4 inline-block px-4 py-2 bg-black text-white rounded-lg hover:bg-blue-700">Learn More</a> </span></td>
                    </span>
                </li>
            </ul>

            <div class="bottom-data">
                <div class="activity">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Recent Activity</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Water Body</th>
                                <th>Purity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src=".../public/images/lake1.jpeg">
                                    <p>Lake Naivasha</p>
                                </td>
                                <td>88%</td>
                                <td><span class="status safe">Safe</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src=".../public/images/lake2.jpeg">
                                    <p>Indian Ocean</p>
                                </td>
                                <td>55%</td>
                                <td><span class="status critical">Critical</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src=".../public/images/lake1.jpeg">
                                    <p>River Ewaso Nyiro</p>
                                </td>
                                <td>22%</td>
                                <td><span class="status danger">Danger</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Reminders</h3>
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

    <script src=".../js/Index.js"></script>
</body>
</html>
