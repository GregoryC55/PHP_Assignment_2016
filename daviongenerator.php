<?php include("include/header.php"); ?>
    <div class="article">
      <h2>Random Unit Generator for the Federated Suns in 3085</h2>
      <p>NOTE: All units are listed by name and variant number/type.</p>
      <h3>BattleMechs</h3>
      <div class="generator1">
        <p>Click below to generate a random light BattleMech</p>
        <button onclick="davionLightmech()">Random</button>
        <p id="davion1"></p>
        <script>
        function davionLightmech() {
        var lightMechs = ["LCT-3D Locust", "VLK-QA Valkyrie", "HNT-151 Hornet", "HNT-171 Hornet", "ALM-7D Fireball", "VLK-QD Valkyrie", "JVN-10P Javelin", "OSR-3D Osiris", "V4-LNT-J3 Valiant", "VLK-QD1 Valkyrie", "JVN-11D Javelin", "VLK-QD4 Valkyrie", "ALM-10D Fireball", "VLK-QD3 Valkyrie", "SCB-9T Scarabus", "OSR-4D Osiris", "JVN-11F Javelin", "GRM-01C Garm", "TLN-6W Talon"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion1").innerHTML = lightMechs[random];
        }
        </script>
      </div>
      <div class="generator2">
        <p>Click below to generate a random medium BattleMech</p>
        <button onclick="davionMediummech()">Random</button>
        <p id="davion2"></p>
        <script>
        function davionMediummech() {
        var mediumMechs = ["SNT-04 Sentry", "DV-7D Dervish", "WTC-4M Watchman", "BJ-2 Blackjack", "PXH-3D Phoenix Hawk", "WVR-7D Wolverine", "ENF-5D Enforcer", "CN9-D Centurion", "LGN-2D Legionnaire", "ENF-6Ma Enforcer III", "BJ-4 Blackjack", "HCT-6D Hatchetman", "HSN-7D Hellspawn", "STH-1D Stealth", "WVR-8D Wolverine", "DV-8D Dervish", "SHD-5D Shadow Hawk", "CN9-D9 Centurion", "FEC-1CM Fennec"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion2").innerHTML = mediumMechs[random];
        }
        </script>
      </div>
      <div class="generator3">
        <p>Click below to generate a random heavy BattleMech</p>
        <button onclick="davionHeavymech()">Random</button>
        <p id="davion3"></p>
        <script>
        function davionHeavymech() {
        var heavyMechs = ["RFL-6D Rifleman", "JM6-DD JagerMech", "RFL-3N Rifleman", "CTS-6Y Cestus", "CES-3R Caesar", "PTR-6S Penetrator", "AGS-2D Argus", "MAD-5D Marauder", "MDG-1Ar Rakshasa", "JM6-D4 JagerMech III", "BKX-8D Battleaxe", "FLC-8R Falconer", "TNS-4S Thanatos", "BHKU-O Black Hawk-Ku", "MTR-5K Maelstrom", "HMH-6D Hammerhands", "AV1-O Avatar", "GLT-7-O Gallant", "HMH-6E Hammerhands"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion3").innerHTML = heavyMechs[random];
        }
        </script>
      </div>
      <div class="generator4">
        <p>Click below to generate a random assault BattleMech</p>
        <button onclick="davionAssaultmech()">Random</button>
        <p id="davion4"></p>
        <script>
        function davionAssaultmech() {
        var assaultMechs = ["GOL-5D Goliath", "STK-5S Stalker", "VTR-9B Victor", "VTR-10D Victor", "STK-7D Stalker", "NSR-9J Nightstar", "LGB-12C Longbow", "SGT-8R Sagittaire", "EMP-6D Emperor", "NSR-9FC Nightstar", "BLR-2D Warlord", "DVS-2 Devastator", "TLR1-O Templar", "MAD-6D Marauder II", "KGC-007 King Crab", "SD1-O Sunder ", "Warhammer IIC8", "AS8-D Atlas", "PDG-1R Pendragon"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion4").innerHTML = assaultMechs[random];
        }
        </script>
      </div>
      <br class="break">
      <h3>Vehicles</h3>
      <div class="generator1">
        <p>Click below to generate a random light Vehicle</p>
        <button onclick="davionLightvehicle()">Random</button>
        <p id="davion5"></p>
        <script>
        function davionLightvehicle() {
        var lightVehicles = ["Darter (BAP)", "Ferret", "Ripper (LPPC)", "J.Edgar", "Striker", "Scorpion (LAC)", "Yellow Jacket", "Striker (3053)", "Yellow Jacket (RAC)", "Striker (3061)", "Minion", "Cavalry", "Pandion", "Fox", "Pandion (C3)", "Skulker Mk. II", "Cavalry Infiltrator", "Balac (LRM)", "Fox (VSP)"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion5").innerHTML = lightVehicles[random];
        }
        </script>
        </div>
        <div class="generator2">
        <p>Click below to generate a random medium Vehicle</p>
        <button onclick="davionMediumvehicles()">Random</button>
        <p id="davion6"></p>
        <script>
        function davionMediumvehicles() {
        var mediumVehicles = ["Musketeer", "Vedette (Cell)", "Myrmidon", "Condor", "Hetzer", "Vedette", "J.E.S. I", "Goblin", "Fulcrum", "Goblin", "Myrmidon (Anti-Infantry)", "Ranger VV1", "Condor (Laser)", "Musketeer", "Ranger VV2", "J.E.S. I (3082)", "Fulcrum (Hybrid)", "Vedette (Cell)", "Fulcrum (Hybrid)"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion6").innerHTML = mediumVehicles[random];
        }
        </script>
      </div>
      <div class="generator3">
        <p>Click below to generate a random heavy Vehicle</p>
        <button onclick="davionHeavyvehicle()">Random</button>
        <p id="davion7"></p>
        <script>
        function davionHeavyvehicle() {
        var heavyVehicles = ["Brutus (HPPC)", "Manticore", "Typhoon", "LRM Carrier", "Rommel", "Patton ", "Typhoon (LB-X)", "Pilum", "Rommel (Gauss)", "Typhoon (RAC)", "LB-2X Carrier", "Patton (Ultra)", "Manticore (HPPC)", "Manteuffel", "Kinnol", "Morningstar", "Manticore (HPPC)", "Axel IIC", "Pilum (Arrow IV)"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion7").innerHTML = heavyVehicles[random];
        }
        </script>
      </div>
      <div class="generator4">
        <p>Click below to generate a random assault Vehicle</p>
        <button onclick="davionVehicle()">Random</button>
        <p id="davion8"></p>
        <script>
        function davionVehicle() {
        var assaultVehicle = ["Challenger XV", "Behemoth", "Sturmfeur", "Partisan", "Demolisher", "Behemoth", "Partisan (Quad RAC)", "Partisan", "Fury", "Challenger XV", "Fury (C3S)", "Challenger X", "J.E.S. II", "Ajax", "Challenger XII", "Heavy NLRM Carrier", "Challenger XI", "Morrigu (Laser)", "DI Morgan"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion8").innerHTML = assaultVehicle[random];
        }
        </script>
      </div>
        <br class="break">
        <h3>Aerospace Fighers and Dropships</h3>
        <div class="generator1">
        <p>Click below to generate a random light Aerospace Fighter</p>
        <button onclick="davionLightfighter()">Random</button>
        <p id="davion9"></p>
        <script>
        function davionLightfighter() {
        var lightFighters = ["SB-27 Sabre", "CNT-1D Centurion", "SYD-Z1 Seydlitz", "SPR-H5 Sparrowhawk", "SPR-H5 Sparrowhawk", "SB-27 Sabre", "SPR-6D Sparrowhawk", "F-11 Cheetah", "SYD-Z4 Seydlitz", "SPR-6D Sparrowhawk", "SPR-6D Sparrowhawk", "SPR-7D Sparrowhawk", "SYD-Z2A Seydlitz", "SPR-7D Sparrowhawk", "DARO-1 Dagger", "F-13 Cheetah", "SPR-7D Sparrowhawk", "SB-29 Sabre", "Bashkir"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion9").innerHTML = lightFighters[random];
        }
        </script>
      </div>
      <div class="generator2">
        <p>Click below to generate a random medium Aerospace Fighter</p>
        <button onclick="davionMediumfighters()">Random</button>
        <p id="davion10"></p>
        <script>
        function davionMediumfighters() {
        var mediumFighters = ["HCT-213S Hellcat", "HCT-213 Hellcat", "CSR-V12 Corsair", "LTN-G15 Lightning", "CSR-V12 Corsair", "CSR-V14 Corsair", "LTN-G15 Lightning", "F-92 Stingray", "LTN-G16D Lightning", "CSR-V14 Corsair", "F-94 Stingray", "CSR-V18 Corsair", "LX-2 Lancer", "CSR-V18 Corsair", "CSR-V18 Corsair", "LTN-G16D Lightning", "LTN-G16D Lightning", "F-95 Stingray", "CSR-12D Corsair"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion10").innerHTML = mediumFighters[random];
        }
        </script>
      </div>
      <div class="generator3">
        <p>Click below to generate a random heavy Aerospace Fighter</p>
        <button onclick="davionHeavyfighter()">Random</button>
        <p id="davion11"></p>
        <script>
        function davionHeavyfighter() {
        var heavyFighters = ["STU-K10 Stuka", "EGL-R6 Eagle", "CHP-W10 Chippewa", "TRB-D36 Thunderbird", "STU-K5 Stuka", "STU-K5 Stuka", "STU-D6 Stuka", "STU-D6 Stuka", "CHP-W7 Chippewa", "STU-D6 Stuka", "TRB-D46 Thunderbird", "STU-D6 Stuka", "VLC-8N Vulcan", "STU-D7 Stuka", "CHP-W7 Chippewa", "STU-D7 Stuka", "HSCL-1-O Huscarl", "STU-D7 Stuka", "TRB-D36b Thunderbird"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion11").innerHTML = heavyFighters[random];
        }
        </script>
      </div>
      <div class="generator4">
        <p>Click below to generate a random Dropship</p>
        <button onclick="davionDropship()">Random</button>
        <p id="davion12"></p>
        <script>
        function davionDropship() {
        var dropship = ["Colossus", "Overlord (3056)", "Aurora", "Union (3055)", "Seeker (3054)", "Leopard (3056)", "Aurora", "Gazelle (3055)", "Leopard CV (3054)", "Conquistador", "Vengeance (3056)", "Arondight (SCC)", "Claymore", "Avenger (3048)", "Arondight", "Arondight (Refit)", "Avenger (3048)", "Excalibur PWS", "Overlord A3"];
    var random = Math.floor((Math.random() * 19));
    document.getElementById("davion12").innerHTML = dropship[random];
        }
        </script>
      </div>
      <br class="break">
      <h3>Battle Armor</h3>
      <div class="generator1">
        <p>Click below to generate a random Battle Armor Unit</p>
        <button onclick="davionBattlearmor()">Random</button>
        <p id="davion13"></p>
        <script>
        function davionBattlearmor() {
        var battleArmor = ["Tunnel Rad IV (Vehicle)", "Inner Sphere Standard (3058U-C)", "Infiltrator Mk.1", "Gray Death Scout", "Sloth (Interdictor)", "Cavalier", "Cavalier", "Cavalier", "Infiltrator Mk. II (Magnetic)", "Infiltrator Mk. II", "Grenadier", "Hauberk", "Grenadier (Hunter-Killer)", "Hauberk II", "Infiltrator Mk. II (Sensor)", "Grenadier (3075)", "Clan Medium Rabid"];
    var random = Math.floor((Math.random() * 17));
    document.getElementById("davion13").innerHTML = battleArmor[random];
        }
        </script>
      </div>
      <br class="break">
      <h3>Federated Suns 3085</h3>
      </div>
   	<?php include("include/footer.php"); ?>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous">
  </script>
</body>
</html>
