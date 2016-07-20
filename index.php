<?php include("include/header.php"); ?>
      <div class="article">
        <h2>Welcome to the Hiring Hall!</h2>
            <p>Here you will find the details of the ongoing campaigns and units for our BattleTech
              group located in Louisville, KY and Southern Indiana.  Click on the banners below to reveal more infomration.
              Please feel free to explore our site and rundowns of our past games.  We hope you enjoy your stay!</p>
        <h3>News and Events</h3>
	         <h3>Battle Report: Survivors Rescued from Baker 3 by Grimm's Grinders!</h3>
            <div class="secret">
             <p>Feb 28, 2016, Grimm's Grinders successfully escorted the survivors of a doomed Lyran raid off the world of Baker 3 against determined opposition from Clan Jade Falcon.  Grimm's Grinders has carved the first battle entry into our ongoing campaign!  Who will be the next to make their own history in the Inner Sphere?</p>
            </div>
           <h3>New Ongoing Mercenary Campaign begins February 2016!</h3>
            <div class="secret">
              <p>We will be starting our new campaign in the beginning of the new year.  For full details, please click <a href="../pdf/Ongoing_Mercenary_Campaign.pdf">here</a>.</p>
            </div>
          <h3>Fall 2015 Championship Ends! - December 2015</h3>
            <div class="secret">
             <p>After two and a half months we have a new Louisville Champion.  Thank you to all the participating players and we will update everyone once the new plaque has been installed declaring our champion.</p>
           </div>
          <h3>Fall 2015 Championship Begins! - October 2015</h3>
            <div class="secret">
             <p>So who is the best MechWarrior in the Louisville?  Let's find out!</p>
        	   <p>Players will construct a unit of up to 6 machines with 10,000 BV points based upon the faction lists from Field Manual:3085.  Opponents will be assigned by myself.  The player with the most wins by the end of the tourny will have their name put on a plaque and hung in our local store to declare their glory!</p>
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
