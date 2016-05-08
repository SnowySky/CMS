<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Slide left menu block -->
    <div id="menu">
        <div class = "title">
            Menu
        </div>
        <div class="links">
            <div class="link">
                Home Page
            </div>
            <div class="link">
                Articles
                <div class="sub-links">
                    <div class="sub-link">New article</div>
                    <div class="sub-link">List of articles</div>
                    <div class="sub-link">List of drafts</div>
                </div>
            </div>
            <div class="link">
                Categories
                <div class="sub-links">
                    <div class="sub-link">New category</div>
                    <div class="sub-link">List of categories</div>
                    <div class="sub-link">Styles of categories</div>
                </div>
            </div>
            <div class="link">
                Plugins
            </div>
            <div class="link">
                Primitives
                <div class="sub-links">
                    <div class="sub-link">New primitive</div>
                    <div class="sub-link">List of primitives</div>
                </div>
            </div>
            <div class="link">
                Notes
                <div class="sub-links">
                    <div class="sub-link">New note</div>
                    <div class="sub-link">List of notes</div>
                </div>
            </div>
            <div class="link">Settings</div>
        </div>
    </div>
    <!-- Main window block -->
    <div id="window">
        <!--Greetings message-->
        <div class = "big_line">
            <div class="title">TestCMS</div>
            <div class = "text">Welcome to TestCMS MainPage. How can you see, there's no information here. But, if everything will go nice, this project'll be finished</div>
        </div>
        <!--Squares of quick access to main functions of CMS-->
        <!--TODO: Написать скрипт для перерасчета размеров квадратов после каждого обновления экрана чтобы при смене разрешений они не теряли формы-->
        <div class = "square" id = "add_note">
           <div class = "square-text">Add article</div>
        </div>
        <div class = "square" id = "folder">
            <div class = "square-text">Categories</div>
        </div>
        <div class = "square" id = "plugin">
            <div class="square-text">Plugins</div>
        </div>
        <div class = "square" id = "primitives">
            <div class="square-text">Primitives</div>
        </div>
        <div class = "square" id = "settings">
            <div class="square-text">Settings</div>
        </div>
        <!--Notes rectangle-->
        <div class="rectangle">
            <div class="top">
                <div class="title">Notes</div>
                <div class="icons">
                    <div id = "add"></div>
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
        <div class = "big-square">
            <div class="top">
                <div class="title">Last articles</div>
            </div>
            <div class="window">
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
                <div class="article">Test article</div>
            </div>
        </div>
    </div>
</body>
</html>