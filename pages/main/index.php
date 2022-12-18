<?php

    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*3)-3;
    }
    $sql_select = "Select * from tblkhoahoc,tbldanhmuc where tblkhoahoc.id_danhmuc = tbldanhmuc.id  ORDER BY id_kh DESC LIMIT $begin,3";
    $result_khoahoc = mysqli_query($conn,$sql_select);
?>
h3>New course have: </h3>
<?php
    while($row = mysqli_fetch_array($result_khoahoc)){
?>
        <div class ="col-12 col-sm-6 col-md-4">
            <img src="./admin/modules/quanlysanpham/img/<?php echo $row["anh_kh"];?>" alt="" class="img-course">
            <div class="gray__bg">
                <p class="name-course" >Name Course: <?php echo $row["tenkhoahoc"];?></p>
                <p class="price-course"><?php echo number_format($row["giakhoahoc"],0,',','.'); ?>đ /3 months</p>
                <p class="join-course">About: <?php echo $row["songuoi"];?> persons</p>
                <div class="btn-choose" style="line-height:50px">
                    <a style="text-decoration:none;" href="index.php?quanly=sanpham&id=<?php echo $row["id_kh"];?>" class="btn-course">Choose Course</a>
                </div>
            </div>
        </div>
<?php
    }
?>
<?php

    $sql_trang = "Select * from tblkhoahoc";
    $result_trang = mysqli_query($conn,$sql_trang);
    $count_page = mysqli_num_rows($result_trang);
    $sotrang = ceil($count_page/3);
    // echo $sotrang
?>
<nav aria-label="Page navigation example" class="next-pages">
    <ul class="pagination">
        <?php
            for($i = 1; $i <= $sotrang; $i++){
        ?>
        <li class="page-item"><a class="page-link" href="index.php?trang=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php
            }
        ?>
    </ul>
</nav>
