<div class="main">
    <?php 
            
    ?>
    <div class="row" style="margin-left: 0px; margin-right: 0px;">
        <?php
            if(isset($_GET["quanly"])){
                $chon = $_GET["quanly"];
            }else{
                $chon = "";
            }
            if($chon == 'danhmucsanpham'){
                include("./pages/main/danhmuc.php");
            }else if($chon == 'giohang'){
                    include("./pages/main/giohang.php");
            }else if($chon == 'sanpham'){
                include("./pages/main/sanpham.php");
            }else if($chon == 'dangky'){
                include("./pages/main/dangky.php");
            }else if($chon == 'dangnhap'){
                include("./pages/main/dangnhap.php");
            }else if($chon == 'thanhtoan'){
                include("./pages/main/thanhtoan.php");
            }else if($chon == 'timkiem'){
                include("./pages/main/timkiem.php");
            }else if($chon == 'thongbao'){
                include("./pages/main/thongbao.php");
            }else if($chon == 'thaydoimatkhau'){
                include("./pages/main/thaydoimatkhau.php");
            }else{
                include("./pages/main/index.php");
            }
        ?>
        <!-- <?php

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
                <li class="page-item"><a class="page-link" href="Trangchu.php?trang=<?php echo $i;?>"><?php echo $i;?></a></li>
                <?php
                    }
                ?>
            </ul>
        </nav> -->
    </div>
</div>