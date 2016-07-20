<?php include("include/header.php"); ?>
    <div class="article">
      <h2>Random Unit Generator for the Draconis Combine in 3085</h2>
      <h3>Search For Available Units in 3085</h3>
    <p>Enter the tonnage of the unit you are looking for in the box below.  All tonnages are between 20 and 100 tons in 5 ton increments.
    (i.e. 20, 25, 30, 35, 40, etc)</p>
    <form name="frmSearch" method="post" action="dracgenerator.php">
      <table width="599" border="1">
        <tr>
          <th>Tonnage
          <input name="var1" type="text" id="var1">
          <input type="submit" value="Search"></th>
        </tr>
      </table>
    </form>
    <?php
    $nameofdb = 'lightmechs';
    $dbusername = 'root';
    $dbpassword = '';

    // Connect to MySQL via PDO
    try {
    $dbh = new PDO("mysql:host=localhost;dbname=$nameofdb", $dbusername, $dbpassword);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    }

    if (isset($_POST['var1'])) {
      $var1 = $_POST['var1'];
    } else {
      echo "No unit of that weight available";
    }

    $query = "SELECT * FROM lightmechs WHERE Tonnage = :search";
    $stmt = $dbh->prepare($query);
    $stmt->bindParam(':search', $var1, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchAll();


if (count($result)>0){
    foreach( $result as $row ) {
      echo "<table>";
      echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Variant</th>";
        echo "<th>Tonnage</th>";
        echo "<th>Type</th>";
        echo "<th>Battle Value 2</th>";
        echo "<th>Point Value</th>";
      echo "</tr>";

      echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td>" . $row["Variant"] . "</td>";
        echo "<td>" . $row["Tonnage"] . "</td>";
        echo "<td>" . $row["Type"] . "</td>";
        echo "<td>" . $row["Battle_Value2"] ."</td>";
        echo "<td>" . $row["Point_Value"] . "</td>";
      echo "</tr>";}
    } else {
  echo "No results found";
}
    //var_dump ($row);
    echo "</table>";
    ?>

      <!--<h3>BattleMechs</h3>
      <div class="generator1">
        <p>Click below to generate a random light BattleMech</p>
        <button onclick="dracLightmech()">Random</button>
        <p id="drac1"></p>
        <script>
        function dracLightmech() {
        var lightMechs = ["KBO-7A Kabuto", "JR7-Jenner", "PNT-9R Panther", "SDR-9K Venom", "SDR-C Spider", "PNT-C Panther", "JR7-C3  Jenner", "HM-1r Hitman", "SDR-9KC Venom", "PNT-10K2 Panther", "SDR-7KC Spider", "ZPH-4A Tarantula", "V4-LNT-K7 Valiant", "WFT-1LAW/SC3 Wight", "MON-86 Mongoose", "OW-1 Owens", "Morrigan 2", "PNT-13K Panther", "NX-80C Nyx"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac1").innerHTML = lightMechs[random];
        }
        </script>
      </div>
      <div class="generator2">
        <p>Click below to generate a random medium BattleMech</p>
        <button onclick="dracMediummech()">Random</button>
        <p id="drac2"></p>
        <script>
        function dracMediummech() {
        var mediumMechs = ["CMA-C Chimera", "WTH-K Whitworth", "PXH-1K Phoenix Hawk ", "WFT-C Wolf Trap", "DMO-1K Daimyo", "TSN-C3 Tessen", "WVR-9W2 Wolverine", "WFT-2B Wolf Trap", "DMO-5K Daimyo", "KIM-2C Komodo", "PXH-7K Phoenix Hawk", "BSN-5KC Bishamon ", "FS9-O Firestarter", "SCP-12K Scorpion", "SR1-O Strider", "SKW-2F Shockwave", "GRF-5K Griffin", "BJ2-O Blackjack", "TFT-A9 Thunder Fox"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac2").innerHTML = mediumMechs[random];
        }
        </script>
      </div>
      <div class="generator3">
        <p>Click below to generate a random heavy BattleMech</p>
        <button onclick="dracHeavymech()">Random</button>
        <p id="drac3"></p>
        <script>
        function dracHeavymech() {
        var heavyMechs = ["QKD-C Quickdraw", "JM6-DD JagerMech", "DRG-1G Grand Dragon", "CPLT-K5 Catapult", "CDR-5K Crusader", "OSR-4K Ostroc", "DAI-02 Daikyu", "NDA-2KC No-Dachi", "DRG-9KC Grand Dragon", "MAD-9W2 Marauder", "NJT-3 Ninja-To", "GHR-7K Grasshopper", "BHKU-O Black Hawk-Ku", "SJA-8H Shugenja", "MTR-5K Maelstrom", "AV1-O Avatar", "Ha Otoko 3", "WHM-8K Warhammer", "EXC-CS Excalibur"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac3").innerHTML = heavyMechs[random];
        }
        </script>
      </div>
      <div class="generator4">
        <p>Click below to generate a random assault BattleMech</p>
        <button onclick="dracAssaultmech()">Random</button>
        <p id="drac4"></p>
        <script>
        function dracAssaultmech() {
        var assaultMechs = ["VTR-C Victor", "MAL-C Mauler", "CGR-1A9 Charger", "MR-V2 Cerberus", "CRK-5003-CJ Katana", "HTM-27T Hatamoto-Chi", "AKU-2X Akuma", "CGR-KMZ Charger", "BLR-K3 BattleMaster ", "HTM-28Tr Hatamoto-Chi ", "GUN1-ERD Gunslinger", "AWS-10KM Awesome", "TSH-8S Tai-sho", "NG-C3A Naginata", "OBK-10M O-Bakemono", "SD1-O Sunder ", "NG-C3B Naginata", "Mad Cat Mk II", "AS7-CM Atlas"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac4").innerHTML = assaultMechs[random];
        }
        </script>
      </div>
      <br class="break">
      <h3>Vehicles</h3>
      <div class="generator1">
        <p>Click below to generate a random light Vehicle</p>
        <button onclick="dracLightvehicle()">Random</button>
        <p id="drac5"></p>
        <script>
        function dracLightvehicle() {
        var lightVehicles = ["Skulker (C3M)", "Pegasus", "Scorpion (MRM)", "Saladin", "Saracen", "Scimitar", "Saladin (LB-X)", "Saracen (MRM)", "Crow", "Pegasus", "Saladin (Ultra)", "Scimitar (TAG)", "Crow (C3) ", "Yasha", "Scimitar (C3)", "Yasha (Interdictor)", "Pegasus (X-Pulse) ", "Balac (LRM)", "Svantovit"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac5").innerHTML = lightVehicles[random];
        }
        </script>
        </div>
        <div class="generator2">
        <p>Click below to generate a random medium Vehicle</p>
        <button onclick="dracMediumvehicles()">Random</button>
        <p id="drac6"></p>
        <script>
        function dracMediumvehicles() {
        var mediumVehicles = ["Turhan (C3)", "Vedette", "Prowler (Succession Wars)", "Maxim", "Condor", "Turhan", "Vedette (NETC)", "Maxim (BA Factory)", "Myrmidon", "Maxim (I)", "Hiryo (MRM)", "Maxim (Fire Support)", "Condor (Upgrade)", "Hiryo", "Fulcrum III", "SM1 Tank Destroyer ", "Hiryo (Bloodhound)", "BE700 Joust Tank", "Maxim Mk. II"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac6").innerHTML = mediumVehicles[random];
        }
        </script>
      </div>
      <div class="generator3">
        <p>Click below to generate a random heavy Vehicle</p>
        <button onclick="dracHeavyvehicle()">Random</button>
        <p id="drac7"></p>
        <script>
        function dracHeavyvehicle() {
        var heavyVehicles = ["MRM Carrier", "Bulldog (AC/2)", "Zhukov", "SRM Carrier", "Manticore", "Bulldog ", "MRM Carrier", "Tokugawa TKG-150 ", "Manticore (C3S)", "Tokugawa", "Manticore (C3M)", "Tokugawa (C3)", "LRM Carrier", "Manticore (HPPC)", "Kinnol", "Tokugawa (MRM)", "Tokugawa (Streak)", "Ishtar", "Shoden"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac7").innerHTML = heavyVehicles[random];
        }
        </script>
      </div>
      <div class="generator4">
        <p>Click below to generate a random assault Vehicle</p>
        <button onclick="dracVehicle()">Random</button>
        <p id="drac8"></p>
        <script>
        function dracVehicle() {
        var assaultVehicle = ["Behemoth (Kurita)", "Devastator", "Schrek", "Ontos", "Behemoth", "Schrek", "Demolisher", "Demolisher (MRM)", "Partisan (Cell)", "Schrek (Armor)", "Schrek (C3M)", "Behemoth (Kurita)", "Demolisher (Gauss)", "Schiltron", "J.E.S. II", "Demolisher II", "Schiltron", "Alacorn Mk. VI", "DI Morgan"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac8").innerHTML = assaultVehicle[random];
        }
        </script>
      </div>
        <br class="break">
        <h3>Aerospace Fighers and Dropships</h3>
        <div class="generator1">
        <p>Click below to generate a random light Aerospace Fighter</p>
        <button onclick="dracLightfighter()">Random</button>
        <p id="drac9"></p>
        <script>
        function dracLightfighter() {
        var lightFighters = ["SL-21 Sholagar", "SL-21 Sholagar", "SL-21L Sholagar", "SB-27 Sabre", "SL-21 Sholagar", "S-3 Sai", "F-11 Cheetah", "S-4X Sai", "S-4 Sai", "SL-22 Sholagar", "F-11 Cheetah", "S-8 Sai", "SB-29 Sabre", "SL-22 Sholagar", "S-7 Sai", "F-13 Cheetah", "S-4C Sai", "Bashkir", "SB-31D Sabre"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac9").innerHTML = lightFighters[random];
        }
        </script>
      </div>
      <div class="generator2">
        <p>Click below to generate a random medium Aerospace Fighter</p>
        <button onclick="dracMediumfighters()">Random</button>
        <p id="drac10"></p>
        <script>
        function dracMediumfighters() {
        var mediumFighters = ["SL-17 Shilone", "LCF-R16K Lucifer II", "F-90 Stingray", "SL-17 Shilone", "SL-17 Shilone", "SL-17R Shilone", "F-92 Stingray", "SL-17R Shilone", "LCF-R16KR Lucifer II", "SL-17R Shilone", "ON-1 Oni", "SL-17R Shilone", "F-92 Stingray", "SL-18 Shilone ", "MIK-O Tatsu*", "SL-18 Shilone", "MIK-O Tatsu", "F-95 Stingray", "Ammon"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac10").innerHTML = mediumFighters[random];
        }
        </script>
      </div>
      <div class="generator3">
        <p>Click below to generate a random heavy Aerospace Fighter</p>
        <button onclick="dracHeavyfighter()">Random</button>
        <p id="drac11"></p>
        <script>
        function dracHeavyfighter() {
        var heavyFighters = ["SL-15 Slayer", "SL-15A Slayer", "F-100b Riever", "SL-15 Slayer", "TRB-D36 Thunderbird", "SL-15 Slayer", "SL-15R Slayer", "SL-15R Slayer", "TRB-D36 Thunderbird", "SL-15R Slayer", "F-700 Riever", "SL-15K Slayer", "SL-15K Slayer", "HSCL-1-O Huscarl", "SL-15K Slayer", "F-700a Riever", "SL-15K Slayer", "SU-14 Suzaku", "SU-14 Suzaku"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac11").innerHTML = heavyFighters[random];
        }
        </script>
      </div>
      <div class="generator4">
        <p>Click below to generate a random Dropship</p>
        <button onclick="dracDropship()">Random</button>
        <p id="drac12"></p>
        <script>
        function dracDropship() {
        var dropship = ["Excalibur (2786)", "Triumph (3057)", "Overlord (3056) ", "Union (3055)", "Condor (2801)", "Leopard (2537)", "Nagumo", "Intruder (2655)", "Okinawa", "Vengeance (2782)", "Intruder (3056)", "Rose", "Nagumo", "Achilles (3055)", "Nekohono’o", "Nekohono’o (SCL)", "Nekohono’o (HQ)", "Taihou", "Taihou"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("drac12").innerHTML = dropship[random];
        }
        </script>
      </div>
      <br class="break">
      <h3>Battle Armor</h3>
      <div class="generator1">
        <p>Click below to generate a random Battle Armor Unit</p>
        <button onclick="dracBattlearmor()">Random</button>
        <p id="drac13"></p>
        <script>
        function dracBattlearmor() {
        var battleArmor = ["Raiden (Original)", "Inner Sphere Standard", "Kage (Space)", "Inner Sphere Standard", "Kage", "Raiden", "Kage (Vibro-Claw)", "Void (Minelayer)", "Kage", "Void", "Raiden (Anti-Infantry)", "Kanazuchi", "Void", "Kanazuchi (Upgrade)", "Void (DCA)", "Clan Medium - Rabid", "Kage (DEST)"];
    var random = Math.floor((Math.random() * 17));
    document.getElementById("drac13").innerHTML = battleArmor[random];
        }
        </script>
      </div>
      <br class="break">
      <h3>Draconis Combine 3085</h3>-->
    </div>
   	<?php include("include/footer.php"); ?>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous">
  </script>
</body>
</html>
