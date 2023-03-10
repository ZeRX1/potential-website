<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <meta name="author" content="Bootstrap, anxs, DJOhayo">
    <title>Żółty bambus</title>

    <!-- Favicons -->
    <link rel="icon" href="/res/logo.jpg" sizes="32x32" type="image/png">
    <link rel="icon" href="/res/logo.jpg" sizes="16x16" type="image/png">
    <link rel="icon" href="/res/logo.jpg">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        //var basevalues = JSON.parse('/res/upgc.json');
        var pkt = 0;
        var ppc = 1;
        var upg1c = 10;
        var upg2c = 50;
        var variablename;

        function disablekeys() {
            document.onkeydown = function (e) {
                e.preventDefault();        
            }
        }

        function checkforupgrades (varname) {
            if (pkt < upg1c) {
                document.getElementById('upg1cbtn').disabled = true;
            } else { 
                document.getElementById('upg1cbtn').disabled = false;
            }
            if (pkt < upg2c) {
                document.getElementById('upg2cbtn').disabled = true;
            } else {
                document.getElementById('upg2cbtn').disabled = false;
            }
        }

        function addpkt(ppc) {
            pkt += ppc; 
            document.getElementById("pktid").innerHTML = ("Punkty: " + pkt);
            checkforupgrades();
        };
        function updateinfo(upgradename, x) {
            variablename = upgradename + "btn";
            document.getElementById("pktid").innerHTML = ("Punkty: " + pkt);
            document.getElementById("ppcid").innerHTML = ("Punkty na klikniecie: " + ppc);
            document.getElementById(variablename).innerHTML = ("Ulepszenie o " + x + " (koszt " + window[upgradename] + ")");
        }

        function upgrade(x, y, upgradename) {
            if (pkt >= y) {
                ppc += x;
                pkt -= y;
                variablename = upgradename + "c";
                window[variablename] = window[variablename] * 1.5;
                window[variablename] = Math.round(window[variablename]);
                updateinfo(variablename, x);
                checkforupgrades();
            } else {
                alert("Nie masz wystarczająco punktów!");
            }
        }
    </script>
</head>

<body class="bodyclicker" onload="checkforupgrades(); disablekeys();">
    <div>
        <p>Punkty: </p> 
        <p id="pktid">Punkty: 0</p>
        <p id="ppcid">Punkty na klikniecie: 1</p>
        <button onClick="addpkt(ppc)">Kliknij tutaj!</button> <br> <br>
        <button onClick='upgrade(1, upg1c, "upg1")'  id="upg1cbtn">Ulepszenie o 1 (koszt 10)</button>
        <button onClick="upgrade(2, upg2c, 'upg2')"  id="upg2cbtn">Ulepszenie o 2 (koszt 50)</button>
        
    </div>
</body>

</html>