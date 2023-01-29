<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style type="text/css">
    a{
        text-decoration: none;
        color: black;
    }
    .dados{
        display: flex;
        padding: 10px;  
        align-items: center;
        transition: 0.2s;
        cursor: pointer;
        border-bottom: 1px solid #ddd;
    }
    .dados:hover{
        background: #efefef;
    }
    .dados h1{
        margin-bottom: 0;
    }
    .dados span{
        font-size: 7pt;
        color: rgb(90,90,90);
    }
    .dados #nome{
        font-size: 9pt;
        color: black;
    }
    .dados i{
        font-size: 15pt;
        background: #ddd;
        padding: 18px;
        border-radius: 7px;
        margin-right: 15px;
    }
</style>
<?php
$search = $_GET["search"];
$folder = "./php/files/";
$files = scandir($folder);
$output = "";
foreach ($files as $file) {
  if ($file === '.' || $file === '..' || !strstr($file, $search)) {
    continue;
  }
  $fileType = mime_content_type($folder.$file);
  $fileType2 = pathinfo($file, PATHINFO_EXTENSION);
  $fileName = pathinfo($file, PATHINFO_FILENAME);
  $fileSize = filesize($folder.$file);
  $fileDate = date('d-m-Y H:i:s', filectime($folder.$file));

  $icon = "<i class='bx bx-menu'></i>";
  $output .= "<a href='$folder$file' target='_blank'><div class='dados'>";
  if($fileType2 == "mp4"){
    $icon = "<i class='bx bx-video'></i><br>";
  }
  if($fileType2 == "mp3" || $fileType2 == "wov" || $fileType2 == "ogg"){
    $icon = "<i class='bx bx-music'></i><br>";
  }
  if($fileType2 == "pdf"){
    $icon = "<i class='bx bx-book'></i><br>";
  }
  if($fileType2 == "png" || $fileType2 == "jpeg" || $fileType2 == "jpg" || $fileType2 == "gif"){
    $icon = "<i class='bx bx-video'></i><br>";
  } 
  $output .= $icon;
  $output .= "<div>";
  $output .= "<span id='nome'>$fileName</span></br>";  
  $output .= "<span>Type: <strong>$fileType</strong></span><br>"; 
  $output .= "<span>Size: <strong>$fileSize bytes</strong></span><br>";
  $output .= "<span>Date: <strong>$fileDate</strong> </span>";
  $output .= "<br>";
  $output .= "</div>";
  $output .= "</div></a>";
}
echo $output;
?>