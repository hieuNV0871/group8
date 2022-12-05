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
