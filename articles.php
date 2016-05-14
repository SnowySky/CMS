<?php
    $page_name = "Articles";
    require_once "admin-header.php";
?>
    <div id="window">
        <div class="big_line">
            <div class="title"><?=$page_name?></div>
            <div class="text">Here you can control all of your articles. Enjoy! :)</div>
        </div>
        <div class="squareArticle left" id = "add_article">
            <div class="square-text">Add article</div>
        </div>
        <div class="squareArticle left" id = "list">
            <div class="square-text">List of articles</div>
        </div>
        <div class="squareArticle left" id = "pattern">
            <div class="square-text">List of patterns</div>
        </div>
        <div class="rectangle left" id = "make_new_article">
            <div class="top">
                <div class="title">New article: <textarea name = "article-title" placeholder = "Write title of your text here" required form = "new-article" cols = "60" rows = "1"></textarea></div>
            </div>
            <div class="window">
                <form id = "new_article">
                    <textarea name = "input-text" rows = "17" name = "article_text" placeholder="Write your text here." required ></textarea>
                </form>
            </div>
        </div>
        <div class="big-square right">
            <div class="top">
                <div class="title">Special tags</div>
            </div>
            <div class="window">
                <div  id = "add_1_title" class="control-squares left">
                    Add a 1 level title
                </div>
                <div  id = "add_2_title" class="control-squares left">
                    Add a 2 level title
                </div>
                <div id = "add_3_title" class="control-squares left">
                    Add a 3 level title
                </div>
                <div id = "add_4_title" class="control-squares left">
                    Add a 4 level title
                </div>
                <div id = "add_5_title" class="control-squares left">
                    Add a 5 level title
                </div>
                <div id = "add_p" class="control-squares left">
                    Add a paragraph
                </div>
                <div  id = "add_b" class="control-squares left">
                    Makes text bold
                </div>
                <div  id = "add_i" class="control-squares left">
                    Makes text italic
                </div>
                <div id = "add_u" class="control-squares left">
                    Makes line under text
                </div>
                <div id = "add_s" class="control-squares left">
                    Makes text strikethrough
                </div>
                <div id="add_img" class="control-squares left">
                    Add an image
                </div>
                <div id = "add_href" class = "control-squares left">
                    Add a link to another page
                </div>
                <div id = "add_blockquote" class = "control-squares left">
                    Add a quotes
                </div>
                <div id = "add_abbr" class = "control-squares left">
                    Add an abbreviations
                </div>
                <div id="add_sup" class="control-squares left">
                    Makes text superscript
                </div>
            </div>
        </div>
        <div class="rectangle left">
            <div class="top">
                <div class="title">Enter the SEO information</div>
            </div>
            <div class="window">
                <form id = "meta_inf">
                    <div class = "meta_text">Title: </div><textarea name = "meta_title" required form="new_article" placeholder = "Write here a title, which would used by search engines to indentificate your article"></textarea>
                    <div class = "meta_text">Description: </div><textarea name = "meta_desc" required form="new_article" placeholder="Write here a text, which shortly describe this article"></textarea>
                    <div class = "meta_text">Keywords: </div><textarea name = "meta_keywords" required form="new_article" placeholder="Write here 3 - 5 words, which would used by search engines to found your article"></textarea>
                    <div class = "meta_text">Author: </div><textarea name = "meta_author" required form="new_article" placeholder = "Write here your name, nickname, etc"></textarea>
                </form>
            </div>
        </div>
        <div class="big-square right">
            <div class="top">
                <div class="title">Save</div>
            </div>
            <div class="window">
                <!--TODO: Скрипт, который переключает состояния locked и unlocked (если заполнены все поля - то класс должен быть unlocked, иначе - locked) -->
                <div class="locked"></div>
            </div>
        </div>
        <div class="rectangle left" id = "list_of_articles">
            <div class="top">
                <div class="title">List of articles</div>
            </div>
            <div class="window">
            </div>
        </div>
        <div class="big-square right">

        </div>
    </div>
<?php require_once "admin-footer.php"; ?>