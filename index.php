<?php
    echo("<style>
        body{
            background: url('https://i0.wp.com/ytimg.googleusercontent.com/vi/wW8lPRNWEjc/maxresdefault.jpg?resize=650,400');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
            font-size:30px;
            color: white;
            margin-top:9%;
        }
    </style>");
    session_start();
    if(isset($_COOKIE['name'])){
        echo "Hallo {$_COOKIE['name']} , selamat datang kembali di permainan ini!!!";
        echo"<a href='game.php' style='color:red';>Start Game</a>
        Bukan Anda? <a href='login.php' style='color:red';>Klik Disini</a>";
    }else{
        header("Location:login.php");
    }
?>