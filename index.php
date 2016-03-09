<?php 
//满足条件跳转

$userInfo = [
  // "dingdingUserId"=>"02375134001386",
  "name"=>"王轻姿",
  "email"=>"qingzi.wang@cq-tct.com"
];

echo $userInfo[dingdingUserId];

if($userInfo[dingdingUserId]) {
  echo "<script>";
  echo "location.href = 'http://172.16.103.9:8888/wiki/dokuwiki-modern-style/doku.php?id=start';";
  echo "</script>";
}else {
  echo "哈哈哈";
}



?>


<script>  
  // location.href = "http://172.16.103.9:8888/wiki/dokuwiki-modern-style/doku.php?id=start";
</script>



