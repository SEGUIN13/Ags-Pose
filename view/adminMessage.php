<?php
ob_start();
?>


 <section class="adminMessage">

    <div class="content-box column-left">

        <div class="content-box-header">

            <h3>Message 1</h3>

        </div>

        <div class="content-box-content">

            <div class="tab-content default-tab">

                <h4>Objet message</h4>
                <p>
                    Message : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
                </p>

            </div>

        </div>

    </div>

    <div class="content-box column-right closed-box">

        <div class="content-box-header"> <!-- Add the class "closed" to the Content box header to have it closed by default -->

            <h3>Message 2</h3>

        </div>

        <div class="content-box-content">

            <div class="tab-content default-tab">

                <h4>Titre message</h4>
                <p>
                    Message : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in porta lectus. Maecenas dignissim enim quis ipsum mattis aliquet. Maecenas id velit et elit gravida bibendum. Duis nec rutrum lorem. Donec egestas metus a risus euismod ultricies. Maecenas lacinia orci at neque commodo commodo.
                </p>

            </div>

        </div>

    </div>
    <div class="clear"></div>
 </section>

<?php
$content= ob_get_clean();?>

<?php require_once "layout.php" ?>