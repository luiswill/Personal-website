<?php
include_once('templates/header.php');
?>


<div class="container-fluid">

    <div class="row">
        <div class="introHome"><b class="headline">Hi, I'm Luis ✌️</b> <br>
            <p>I'm a passionate software student. I love to eat, swim and <a href="https://www.marmiton.org/recettes/recette_la-vraie-tartiflette_17634.aspx">tartiflette</a> 🏊</p>
        </div>
    </div>

    <div class="no-gutters row">
        <?php luis_display_home_block('grenoble', 'Grenoble', 'Business Informatics'); ?>

        <?php luis_display_home_block('vi', 'Virtual Identity', 'Front-end Internship'); ?>

        <?php luis_display_home_block('geocashing', 'Geo Cashing', 'NativeScript / Angular hybrid app'); ?>

        <?php luis_display_home_block('elife', 'Elife', 'Angular 9 / Firebase'); ?>

        <?php luis_display_home_block('philippines', 'Thailand / Philippines', 'Solo trip'); ?>

        <?php luis_display_home_block('godot', 'Godot', 'Game development'); ?>

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