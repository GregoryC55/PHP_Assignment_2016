<?php include("include/header.php"); ?>
      <div class="article">
      <h2>Are you a master of BattleTech lore?</h2>
          <p>The BattleTech gaming universe is over 30 years old and encompasses over 1000 years of alternate history across
            thousands of star systems.  For those who want to learn more or test their knowledge of the Inner Sphere, please
            participate in this short quiz below.  If you are stumped, click the button next to each question to reveal the answer.
              Good luck!</p>
              <br>
            <div ng-app="quizApp" class="quiz" align="center">
                  <div ng-controller="mainCtrl">
                    <p>When did Natasha Kerensky, the famed Black Widow, die?</p><label>Your Answer!</label><input type="text"/>
                      <button ng-click="widow()">Click here to test your answer!</button>
                  </div>
                  <br>
                  <div ng-controller="secondCtrl">
                    <p>When did the Battle of Tukayyid begin?</p>
                    <label>Your Answer!</label>
                    <input type="text"/>
                      <button ng-click="tukayyid()">Click here to test your answer!</button>
                  </div>
                  <br>
                <div ng-controller="thirdCtrl">
                  <p>What was the first Great House to be founded?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="marik()">Click here to test your answer!</button>
                </div>
                <br>
                <div ng-controller="fourthCtrl">
                  <p>What was the name of the first BattleMech?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="mackie()">Click here to test your answer!</button>
                </div>
                <br>
                <div ng-controller="fifthCtrl">
                  <p>On what planet were the Clans first created?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="strana()">Click here to test your answer!</button>
                </div>
                <br>
                <div ng-controller="sixthCtrl">
                  <p>Who was the First Prince of the Federated Suns in 3012?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="ian()">Click here to test your answer!</button>
                </div>
                <br>
                <div ng-controller="seventhCtrl">
                  <p>Who founded the Draconis Combine?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="shiro()">Click here to test your answer!</button>
                </div>
                <br>
                <div ng-controller="eighthCtrl">
                  <p>Who planet was the largest BattleMech producer in the Lyran Commonwealth?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="hesperus()">Click here to test your answer!</button>
                </div>
              <br>
                <div ng-controller="ninthCtrl">
                  <p>What is the capital world of the Capellan Confederation?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="sian()">Click here to test your answer!</button>
                </div>
              <br>
                <div ng-controller="tenthCtrl">
                  <p>When was the Star League founded?</p>
                  <label>Your Answer!</label>
                  <input type="text"/>
                    <button ng-click="star()">Click here to test your answer!</button>
                </div>
              <br>
            </div>
        </div>
  <?php include("include/footer.php"); ?>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous">
  </script>
  <script src="vendors/angular.js" type="text/javascript"></script>
  <script src="scripts/app.js" type="text/javascript"></script>
</body>
</html>
