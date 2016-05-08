<?php
    $page_name = "Articles";
    require_once "admin-header.php";
?>
    <div id="window">
        <div class="big_line">
            <div class="title"><?=$page_name?></div>
            <div class="text">Here you can controll all of your articles. Enjoy! :)</div>
        </div>
        <div class="squareArticle" id = "add_article">
            <div class="square-text">Add article</div>
        </div>
        <div class="squareArticle" id = "list">
            <div class="square-text">List of articles</div>
        </div>
        <div class="squareArticle" id = "pattern">
            <div class="square-text">List of patterns</div>
        </div>
    </div>
<?php require_once "admin-footer.php"; ?>