<?php
    $page_name = "Home page";
    require_once "admin-header.php";
?>
    <div id="window" class = "left">
        <!--Greetings message-->
        <div class = "big_line">
            <div class="title">TestCMS</div>
            <div class = "text">Welcome to TestCMS MainPage. How can you see, there's no information here. But, if everything will go nice, this project'll be finished</div>
        </div>
        <!--Squares of quick access to main functions of CMS-->
        <!--TODO: Написать скрипт для перерасчета размеров квадратов после каждого обновления экрана чтобы при смене разрешений они не теряли формы-->
        <div class = "square left" id = "add_article">
           <div class = "square-text">Add article</div>
        </div>
        <div class = "square left" id = "folder">
            <div class = "square-text">Categories</div>
        </div>
        <div class = "square left" id = "plugin">
            <div class="square-text">Plugins</div>
        </div>
        <div class = "square left" id = "primitives">
            <div class="square-text">Primitives</div>
        </div>
        <div class = "square left" id = "settings">
            <div class="square-text">Settings</div>
        </div>
        <!--Notes rectangle-->
        <div class="rectangle left">
            <div class="top">
                <div class="title">Notes</div>
                <div class="icons right">
                    <div id = "add" class = "left"></div>
                </div>
            </div>
            <div class="window">
                <!-- TODO: Написать скрипт для добавления записей пока хотя бы только на страницу до обновления, потом переписать на php, чтобы добавлялись в БД-->
                <div class="note">Test note</div>
                <div class="note">Test note</div>
                <div class="note">Test note</div>
                <div class="note">Test note</div>
            </div>
        </div>
        <div class = "big-square right">
            <div class="top">
                <div class="title">Last articles</div>
            </div>
            <div class="window">
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
            </div>
        </div>
    </div>
<?php require_once "admin-footer.php"; ?>