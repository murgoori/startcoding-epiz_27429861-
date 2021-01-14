<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP 프로그래밍 입문</title>

        <!-- 공통 스타일시트 연결 -->
        <link rel="stylesheet" href="./css/common.css">
        <!-- main.php 고유의 스타일시트 연결 -->
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <header>
            <!-- 공통사용 php문서 외부 추가하기 : 공통 사용하는 php는 lib폴더에 작성 -->
            <?php include "./lib/header.php" ?>
        </header>

        <section>
            <!-- Main Content 문서를 별도로 제작 : 추루 유지보수시의 편리성 -->
            <?php include "./main.php" ?>
        </section>

        <footer>
            <!-- 공통모듈 추가 -->
            <?php include "./lib/footer.php" ?>
        </footer>
        
    </body>
</html>