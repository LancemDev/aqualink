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
        <a href="{{ asset('images/logo.png') }}" class="logo">
            <i class='bx bx-code-alt'></i>
            <div class="logo-name"><span>Aqua</span>link</div>
        </a>
        <ul class="side-menu">
            <li ><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="{{ route('welcome') }}"><i class='bx bx-message-square-dots'></i>Homepage</a></li>
            <li ><a href="{{ route('maps.view') }}"><i class='bx bx-map'></i>Map</a></li>
            <li class="active"><a href="{{ route('species.view') }}"><i class='bx bx-map'></i>Species</a></li>
            <li><a href="{{ route('settings.view') }}"><i class='bx bx-cog'></i>Settings</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="{{ route('logout') }}" class="logout">
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
                <img src="{{ asset('images/no-profile.jpeg') }}">
            </a>
        </nav>

        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    
                    <ul class="breadcrumb">
                        <li><a href="#">
                                Homepage
                            </a></li>
                        /
                        <li><a href="#" class="active">Quiz</a></li>
                    </ul>
                </div>
                
            </div>

            <div class="bottom-data">
                <div class="activity">
                     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-top: 20px;
            text-align: center; /* Align the question title to the left */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 50%;
            margin: 0 auto;
        }

        .question {
            margin: 10px 0; /* Reduced margin for questions */
            text-align: left; /* Align each question to the left */
        }

        .question p {
            font-size: 18px;
        }

        .answers {
            margin-top: 10px;
        }

        .answers label {
            display: block;
            margin-bottom: 10px;
            text-align: left; /* Align the answer options to the left */
        }

        .choices {
            display: inline-block;
            width: 30px;
            margin-right: 10px;
            cursor: pointer;
            font-size: 16px;
            padding: 5px 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .choices:hover {
            background-color: #007bff;
            color: #fff;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .correct-answer {
            color: green;
            font-weight: bold;
        }

        .wrong-answer {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Quiz Questions</h1>


    <form action="{{ route('quiz.submit') }}" method="post">
        @csrf
        @foreach ($questions as $key => $question)
            <div class="question">
                <p>
                    {{ $question['text'] }}
                </p>
                <div class="answers">
                    <label>
                        <input type="checkbox" name="answers[{{ $key }}][]" value="A">
                        <span class="choices">A</span> {{ $question['A'] }}
                    </label>
                    <label>
                        <input type="radio" name="answers[{{ $key }}]" value="B">
                        <span class="choices">B</span> {{ $question['B'] }}
                    </label>
                    <label>
                        <input type="radio" name="answers[{{ $key }}]" value="C">
                        <span class="choices">C</span> {{ $question['C'] }}
                    </label>
                    <label>
                        <input type="radio" name="answers[{{ $key }}]" value="D">
                        <span class="choices">D</span> {{ $question['D'] }}
                    </label>
                </div>
                @if(isset($results[$key]) && $results[$key]['correct'])
                    <p class="correct-answer">Correct</p>
                @elseif(isset($results[$key]) && !$results[$key]['correct'])
                    <p class="wrong-answer">Wrong. Correct Answer: {{ $question['Answer'] }}</p>
                @endif
            </div>
        @endforeach

        <button type="submit">Finish</button>
    </form>
                </div>

                
                
                
          
        </main>

    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
