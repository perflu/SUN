<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>학생회 소통 커뮤니티</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    
    <div class="auth">
                <?php
                session_start();
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="index.php">HOME</a>';
                    echo '<a href="profile.php">PROFILE</a>';
                    echo '<a href="logout.php">LOGOUT</a>';
                } else {
                    echo '<a href="index.php">HOME</a>';
                    echo '<a href="login.php">LOGIN</a>';
                    echo '<a href="signup.php">SIGN_UP</a>';
                }
                echo '';
                ?>
            </div>

        <div class="container">
            <div class="logo">
                <img src 'sunlogo.png' alt="SUN">
                <a href="index.php">학생회 소통 커뮤니티</a>
            </div>
            <nav>
                <ul>
                    <li><a href="about.php">소개</a></li>
                    <li> | </li>
                    <li><a href="mainchan.php">게시판</a></li>
                    <li> | </li>
                    <li><a href="schedule.php">일정</a></li>
                    <li> | </li>
                    <li><a href="reference.php">자료실</a></li>
                </ul>
            </nav>
            
            
        </div>
    </header>
</body>
</html>
