<?php include("include/header.php"); ?>
    <div class="article">
      <h2>Active Units</h2>
      <p>Here is a list of all the active units that are currently participating
        in our ongoing mercenary campaign.  You can view the units composition and
        battle history by clicking on the unit names.  Units that have been
        deactivated are listed at the bottom of the page.</p>
      <h3>Grimm's Grinders</h3>
        <div class="secret">
          <img class="image" src="../images/grinders.png" alt="Grimm's Grinders Logo">
          <div class="units">
            <a href="grinders_tro.php">Unit Composition</a>
            <a href="grinders_battles.php">Battle History</a>
          </div>
        </div>
      <h3>Misc Battles</h3>
          <div class="secret">
            <p>Not every game we play is part of a campaign!  Here is a link to
              various games we have played.</p>
            <div class="units">
              <a href="aar.php">Battle History</a>
            </div>
          </div>
    </div>
  	<?php include("include/footer.php"); ?>
  </div>
  <script>
      $(document).ready(function(){
        $("h3").click(function(){
          $(this).next('div').toggle();
        });
      });
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous">
  </script>
</body>
</html>
