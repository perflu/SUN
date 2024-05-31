<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Bulletin Board</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    // Sample data
    $posts = [
        ['번호' => 1, '제목' => '공지 게시판입니다.', '작성자' => '관리자', '작성일' => '04-23', '조회수' => 200, '추천' => 50],
        ['번호' => 11, '제목' => '서비스 긴급 점검 안내', '작성자' => '관리자', '작성일' => '04-23', '조회수' => 200, '추천' => 5],
        ['번호' => 10, '제목' => '제 4회 교육감 간담회 개최 안내', '작성자' => '이윤성 교육감', '작성일' => '04-23', '조회수' => 200, '추천' => 30],
        // Add more posts as needed
    ];
    ?>
    <header>
        <div class="logo">
            <img src="logo.png" alt="SUN Logo">
            <h1>SUN</h1>
            <p>Students' Union Network</p>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <aside>
            <h2>학생마당</h2>
            <ul>
                <li class="active"><a href="#">공지 게시판</a></li>
                <li><a href="#">자유 게시판</a></li>
                <li><a href="#">모임 게시판</a></li>
                <li><a href="#">토론 게시판</a></li>
                <li><a href="#">HIT 게시판</a></li>
                <li><a href="#">자료실</a></li>
            </ul>
        </aside>
        <section class="board">
            <h2>공지 게시판</h2>
            <table>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일</th>
                        <th>조회수</th>
                        <th>추천</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo $post['번호']; ?></td>
                            <td class="<?php echo $post['번호'] == 1 ? 'highlight' : ''; ?>"><?php echo $post['제목']; ?></td>
                            <td><?php echo $post['작성자']; ?></td>
                            <td><?php echo $post['작성일']; ?></td>
                            <td><?php echo $post['조회수']; ?></td>
                            <td><?php echo $post['추천']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="pagination">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <!-- Additional page numbers here -->
            </div>
        </section>
    </main>
    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
