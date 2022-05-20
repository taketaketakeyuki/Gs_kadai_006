<?php

// POSTを受け取る
$name = $_POST['name'];
$mail = $_POST['mail'];
$Universalism = $Universalism1 + $Universalism2 + $Universalism3;
$Goodintentions = $Goodintentions1 + $Goodintentions2 + $Goodintentions3;
$Harmony = $Harmony1 + $Harmony2 + $Harmony3;
$tradition = $tradition1 + $tradition2 + $tradition3;
$safety = $safety1 + $safety2 + $safety3;
$power = $power1 + $power2 + $power3;
$Achievement = $Achievement1 + $Achievement2 + $Achievement3; 
$pleasure = $pleasure1 + $pleasure2 + $pleasure3;
$Stimulation = $Stimulation1 + $Stimulation2 + $Stimulation3;
$Selfdetermination = $Selfdetermination1 + $Selfdetermination2 + $Selfdetermination3;
$ary = ['Universalism', 'Goodintentions', '$Harmony', '$tradition', '$safety', '$power', '$Achievement', '$pleasure', '$Stimulation', '$Selfdetermination'];


//write
$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
// 記入時間
$time = date('Y/m/d H:i:s');
// aモードのファイルオープン
$file = fopen('data/data.txt', 'a');
// ファイルに書き込み
fwrite($file, $time . $name . $birthPlace . "\n");
// ファイルに保存
fclose($file);


//jpgraph

// content="text/plain; charset=utf-8"
require_once ("jpgraph/jpgraph.php");
require_once ("jpgraph/jpgraph_radar.php");

// Some data to plot
$data = array(55,80,26,31,95);

// Create the graph and the plot
$graph = new RadarGraph(250,200);

// Add a drop shadow to the graph
$graph->SetShadow();

// Create the titles for the axis
$titles = $gDateLocale->GetShortMonth();
$graph->SetTitles($titles);

// Add grid lines
$graph->grid->Show();
$graph->grid->SetLineStyle('dashed');

$plot = new RadarPlot($data);
$plot->SetFillColor('lightblue');

// Add the plot and display the graph
$graph->Add($plot);
$graph->Stroke();


?>


<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <li>お名前：<?= ($name) ?></li>
    <li>EMAIL：<?= ($mail) ?></li>
    <li>パスワード：<?= ($password)  ?></li>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
