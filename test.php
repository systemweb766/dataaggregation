<?php
//error
$err = "";

//ディレクトリパス
$dir = "/data/";

$check_dirs[] = $dir;
$file_paths = [];
while($check_dirs)
{
  $dir_paths = $check_dirs[0];
    // if(is_dir($dir_paths) && $handle = opendir($dir_paths))
    // {
    //   ver_dump($handle);
    //   exit;
    //   // while(($file = readdir($handle)) !== false)
    //   // {
    //   //   if(in_array($file, [".", ".."]))
    //   // }
    // }
  //入力チェック
  if($_POST['year'] == "")
  {
      $err .= "select err!";
  }

  //サニタイズ&POST取得
  $post['year'] = $_POST['year'];

  //ファイル名の西暦取得
  // $data['year'] =

}

 ?>
