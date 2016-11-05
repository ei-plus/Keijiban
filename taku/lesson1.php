<?php 
  header("Content-Type: text/html; charset=UTF-8");
  for($s=1; $s<=100; $s++){
    if($s%2==0 and $s%3!==0){
      echo"<span style='color:red'>$s</span>";
    }elseif($s%6==0){
      echo"<span style='color:green'>$s</span>";
    }else{
      echo"<span style='color:blue'>$s</span>";
    }
  }

