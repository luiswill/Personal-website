<?php
include_once('templates/header.php');
?>


<div class="container-fluid">

    <div class="row">
        <div class="introHome"><b class="headline">Hi, I'm Luis ✌️</b> <br>
            <p>I'm a passionate software student. I love swimming and tech in general 🏊💻</p>
        </div>
    </div>

    <div class="no-gutters row">
        <?php luis_display_home_block('grenoble', 'Grenoble', 'Master Business Informatics'); ?>

        <?php luis_display_home_block('vi', 'Virtual Identity', 'Internship'); ?>

        <?php luis_display_home_block('philippines', 'Thailand / Philippines', 'Solo trip'); ?>

        <?php luis_display_home_block('foodsharing', 'Food Sharing', 'Android App'); ?>

        <?php luis_display_home_block('isfates', 'Bachelor Computer of Sciences', 'Binational studies'); ?>

        <?php luis_display_home_block('advisa', 'Advisa', '8-month fixed term contract'); ?>

        <?php luis_display_home_block('erasmus', 'ERASMUS', 'Limerick, Ireland'); ?>

        <?php luis_display_home_block('swimming', 'Swimming', 'Coach'); ?>


    </div>
</div>

<?php
include_once('./templates/footer.php');
?>


</html>