<?php include_once('../header.php'); ?>


<body>
  <!-- Simulate a smartphone / tablet -->
  <div>


    <?php include_once('../nav.php'); ?>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <div class="content">
    <h3>Accueil</h3>
    <p>Hello ! <br />
      Les différents groupes sont dans le menu en haut à droite :)
    </p>
  </div>


  <!-- Menu Toggle Script -->
  <script>
    function myFunction() {
      var x = document.getElementById("myLinks");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>

</body>

</html>