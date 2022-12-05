<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <form action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
        <table class="table" border="1" width = "500" style="width:1000px" align="center">
            <thead>
                <!-- <tr>
                    <th scope="col">STT</th>
                    <th><input type="text" name="STT"></th>
                </tr> -->
            </thead>
            <tbody>
                <tr>
                    <th>Ảnh khóa học</th>
                    <th><input style="width: 600px" type="file" name="anhkhoahoc" id=""></th>
                </tr>
                <tr>
                    <th scope="row">Tên khóa học</th>
                    <th><input style="width: 600px" type="text" name="tenkhoahoc"></th>
                </tr>
                <tr>
                    <th scope="row">Giá khóa học</th>
                    <th><input style="width: 600px" type="text" name="giakhoahoc"></th>
                </tr>
                <tr>
                    <th scope="row">Số người tham gia</th>
                    <th><input style="width: 600px" type="text" name="songuoi"></th>
                </tr>
                <tr>
                    <th scope="row">Loại khóa học   </th>
                    <th>
                        <select name="loaidanhmuc" id="">
                            <?php
                                include("../../config/config.php");

                                $sql_select = "Select * from tbldanhmuc";
                                $result_sql = mysqli_query($conn,$sql_select);
                                $nums_result = mysqli_num_rows($result_sql);
                                $stt = 0;
                                while($rows = mysqli_fetch_object($result_sql)){
                                    $stt++;
                                    $id[$stt] = $rows -> id;
                                    $tendanhmuc[$stt] = $rows -> tendanhmuc;
                                }
                            ?>
                            <?php for($i = 1; $i<=$nums_result; $i++){?>
                            <option value="<?php echo $id[$i];?>"><?php echo $tendanhmuc[$i];?></option>
                            <?php } ?>
                        </select>
                    </th>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="btn btn-primary" type="submit" name="themsanpham" value="Thêm khóa học"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>