<?php
//error
$err = "";

//入力チェック
if($_POST['year'] == "")
{
  $err .= "select err!";
}
//サニタイズ&POST取得
$post['year'] = $_POST['year'];
//ディレクトリパス
$dir = "./data/";

var_dump(fileAndPathSearcher($dir));


  //ファイル名の西暦取得
  $data['year'] = substr($file, 0, 4);
  if($data['year'] === $post['year']){
    echo $data['year'];
  }







// funcitons

function fileAndPathSearcher($dir){
  //ディレクトリパス
  $directory = $dir;
  $check_dirs = [$directory];
  $data['file'][] = "";
  $data['path'][] = "";

  while($check_dirs)
  {
    $dir_paths = $check_dirs[0];
      if(is_dir($dir_paths) && $handle = opendir($dir_paths))
      {
        while(($file = readdir($handle)) !== false)
        {
          if(in_array($file, [".", ".."]) !== false)
          {
            continue;
          }
          //ファイルパス作成
          $path = rtrim($dir_paths , "/") . "/" . $file;
          if(filetype($path) === "dir") {
            $check_dirs[] = $path;
          }
          else {
            $data['file'][] = $file;
            $data['path'][] = $path;
          }
        }
      }
  array_shift($check_dirs);
  }
  return $data;
}
 ?>
