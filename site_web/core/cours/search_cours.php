<?php
session_start();
$lvl=(isset($_SESSION['level']))?(int) $_SESSION['level']:1;
$id=(isset($_SESSION['id']))?(int) $_SESSION['id']:0;
$pseudo=(isset($_SESSION['pseudo']))?$_SESSION['pseudo']:'';
if ($id>0) 
{
	echo $_SESSION['pseudo'];
	echo '    -     ';
}
?>


<script type="text/javascript" src="search_script.js"></script>
</head>
<body>
    <div class="wrap">
        <div class="search">
            <input type="text" name="recherche" class="text" id="recherche"/>
        </div>
        <div class="resultat" id="resultat"></div>
    </div>
