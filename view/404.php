<?php
ob_start();
?>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>Oops!</h1>
                <h2>404 - The Page can't be found</h2>
            </div>
            <a href="home.php">Go TO Homepage</a>
        </div>
    </div>


<?php
$content= ob_get_clean();?>

<?php require_once "layout.php"?>