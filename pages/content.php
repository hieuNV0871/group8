<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./font/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
<?php
  $sql_select = "Select * from tbldanhmuc ORDER BY id desc";
  $result_sql = mysqli_query($conn,$sql_select);
  $nums_result = mysqli_num_rows($result_sql);
  $stt = 0;
  while($rows = mysqli_fetch_object($result_sql)){
      $stt++;
      $id[$stt] = $rows -> id;
      $tendanhmuc[$stt] = $rows -> tendanhmuc;
      $thutu[$stt] = $rows -> stt;
  }
?>  
<?php
  if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1){
      unset($_SESSION['dangnhap']);
  }
?>             
        <div class="content">
            <div class="name">khoa hoc moi</div>
            <div class="grid">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home Page</a>
              </li>
              <?php
                for($i = 1; $i <= $nums_result; $i++){
              ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?quanly=danhmucsanpham&id=<?php echo $id[$i];?>"><?php echo $tendanhmuc[$i];?></a>
              </li>
              <?php 
                }
              ?>
              </li>
              <?php
                if(isset($_SESSION['dangnhap'])){
                  // setcookie("username",$_COOKIE['dangnhap'],time()+3600,"/");
              ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?dangxuat=1">Log out</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?quanly=thaydoimatkhau">Change Password</a> 
                </li>
              <?php
                }else{
              ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?quanly=dangnhap">Log in</a>
              </li>
              <?php
                }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="index.php?quanly=giohang">Cart Item About Course</a>
              </li>
            </ul>
                 
            </div>
        </div>
</body>
</html>