<?php
include_once('templates/header.php');
?>


<div class="container-fluid">

    <div class="row">
        <div class="introHome"><b class="headline">Hi, I'm Luis <i class="fas fa-hand-peace"></i></b> <br>
            <p>I'm a passionate software student. I love swimming and tech in general <i class="fas fa-swimmer"></i><i class="fas fa-laptop"></i></p>
        </div>
    </div>

    <div class="no-gutters row">
        <?php luis_display_home_block('vi', 'Virtual Identities', 'Internship'); ?>

        <div class="col-12 col-sm-6 col-lg-3"><a href="pages/philippines.html">
                <div class="category category--philippines">
                    <div class="overlay">
                        <div class="textImage">Thailand / Philippines <br><span class="textImageSubheadline">Solo
                                trip</span></div>

                    </div>
                </div>
            </a></div>

        <div class="col-12 col-sm-6 col-lg-3"><a href="pages/isfates.html">
                <div class="category category--isfates">
                    <div class="overlay">
                        <div class="textImage">Bachelor Computer of Sciences <br><span class="textImageSubheadline">Binational
                                studies</span></div>

                    </div>
                </div>
            </a></div>
        <div class="col-12 col-sm-6 col-lg-3"><a href="pages/advisa.html">
                <div class="category category--advisa">
                    <div class="overlay">
                        <div class="textImage">ADVISA<br><span class="textImageSubheadline">8-month fixed term
                                contract</span></div>

                    </div>
                </div>
            </a></div>

        <div class="col-12 col-sm-6 col-lg-3"><a href="pages/erasmus.html">
                <div class="category category--erasmus">
                    <div class="overlay">
                        <div class="textImage">ERASMUS <br><span class="textImageSubheadline">Limerick,
                                Ireland</span></div>

                    </div>
                </div>
            </a></div>

        <div class="col-12 col-sm-6 col-lg-3"><a href="pages/foodSharing.html">
                <div class="category category--foodSharing">
                    <div class="overlay">
                        <div class="textImage">Food Sharing <br><span class="textImageSubheadline">Android
                                App</span></div>
                    </div>
                </div>
            </a></div>
    </div>
</div>


<?php
include_once('./templates/footer.php');
?>

</html>