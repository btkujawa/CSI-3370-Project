<?php
session_start();
?>


    <style>
        .file {
            position: relative;
            height: 125px;
            width: 75px;
        }

        .file>input[type="file"] {
            opacity: 0;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0
        }

        .file>label {
            color: #fff;
            text-align: center;
            cursor: pointer;
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        .formalign {
            text-align: center;
            padding-bottom: 20px;
        }
    </style>

</head>

<nav>
    <ul>
        <li><a href="/php/aboutUs.php">About Us</a></li>
        <li><a href="/index.php">Home</a></li>
    

<?php
        if (isset($_SESSION['username'])) {
            echo '<li><a href="/php/logout.php">Logout</a></li>';
            echo '<li><a href="/php/savedWork.php">Saved Work</a></li>';
        }
        else {
            echo '<li><a href="/php/loginPage.php">Login</a></li>';
        }
        ?>   
    </ul> 
</nav>