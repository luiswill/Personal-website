<?php
include_once('../templates/header.php');
?>
<div class="blogPost">
    <div class="container">
        <div class="row">
            <div class="category category--foodSharing col-12 col-sm-4">
                <div class="overlay">
                    <div class="textImage">Food Sharing <br><span class="textImageSubheadline">Android App</span></div>
                </div>
            </div>
            <div class="blog__content col-12 col-sm-8">
                <p>I had the chance to have the time to learn the ecosystem Android on my own. <br>Food Sharing is
                    an app where a user (sign up via Facebook or Google) scans a product's barcode which will be
                    pinned on the map. <br>All users in a radius of 10 minutes walking (calculated via <a href="https://cloud.google.com/maps-platform/?hl=fr">Google Maps API</a>) will get alerted
                    by a notification.<br>Users are able to send messages between them in order to faciliate the
                    product retrieving.</p>
                <h5 class="blogPost__headline">Content</h5>
                <ul class="blogPost__list">
                    <li>HTML/CSS and JavaScript</li>
                    <li><a href="https://ionicframework.com/">Ionic Framework</a></li>
                    <li>Cordova</li>
                    <li>Firebase</li>
                    <li>AdMob</li>
                    <li>User and product database</li>
                    <li>Notification system</li>
                    <li>External API calls</li>
                    <li>Camera scan</li>
                    <li>Messaging system</li>
                    <li>Geolocalization</li>
                    <li>Google Maps API</li>
                    <li>Facebook and Google registration</li>
                </ul>
                <h5 class="blogPost__headline">Other new knowledge</h5>
                <ul class="blogPost__list">
                    <li>User experience</li>
                    <li>App experience</li>
                    <li>Advertisement</li>
                </ul>
                <div class="blogPost__iconContainer"><i class="fab fa-android"></i>
                    <div class="iconContainerText"><a href="https://play.google.com/store/apps/details?id=com.foodsharing.app">Food Sharing on
                            Play Store</a></div>
                </div><br><br>
                <h5 class="blogPost__headline">Other applications I made</h5>
                <div class="blogPost__iconContainer"><i class="fab fa-android"></i>
                    <div class="iconContainerText"><a href="https://play.google.com/store/apps/developer?id=Luis+Willnat">Play Store
                            profile</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once('../templates/footer.php');
?>

</html>