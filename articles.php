<?php
    $page_name = "Articles";
    require_once "admin-header.php";
?>
    <div id="window">
        <div class="big_line">
            <div class="title"><?=$page_name?></div>
            <div class="text">Here you can control all of your articles. Enjoy! :)</div>
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
        <div class="rectangle">
            <div class="top">
                <div class="title">New article: <textarea name = "input-title" placeholder = "Write title of your text here" required form = "new-article" cols = "60" rows = "1"></textarea></div>
            </div>
            <div class="window">
                <form id = "new_article">
                    <textarea name = "input-text" rows = "20" name = "article_text" placeholder="Write your text here." required ></textarea>
                </form>
            </div>
        </div>
        <div class="big-square-right">
            <div class="top">
                <div class="title">Special tags</div>
            </div>
            <div class="window">
                <div  id = "add_1_title" class="control-squares">
                    Add a 1 level title
                </div>
                <div  id = "add_2_title" class="control-squares">
                    Add a 2 level title
                </div>
                <div id = "add_3_title" class="control-squares">
                    Add a 3 level title
                </div>
                <div id = "add_4_title" class="control-squares">
                    Add a 4 level title
                </div>
                <div id = "add_5_title" class="control-squares">
                    Add a 5 level title
                </div>
                <div id = "add_p" class="control-squares">
                    Add a paragraph
                </div>
                <div  id = "add_b" class="control-squares">
                    Makes text bold
                </div>
                <div  id = "add_i" class="control-squares">
                    Makes text italic
                </div>
                <div id = "add_u" class="control-squares">
                    Makes line under text
                </div>
                <div id = "add_s" class="control-squares">
                    Makes text strikethrough
                </div>
                <div id="add_img" class="control-squares">
                    Add an image
                </div>
                <div id = "add_href" class = "control-squares">
                    Add a link to another page
                </div>
                <div id = "add_blockquote" class = "control-squares">
                    Add a quotes
                </div>
                <div id = "add_abbr" class = "control-squares">
                    Add an abbreviations
                </div>
                <div id="add_sup" class="control-squares">
                    Makes text superscript
                </div>
            </div>
        </div>
    </div>
<?php require_once "admin-footer.php"; ?>