<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <form action="modules/quanlydanhmucsanpham/xuly.php" method="POST">
        <table class="table" border="1" width = "500" style="width:500px" align="center">
            <thead>
                <!-- <tr>
                    <th scope="col">STT</th>
                    <th><input type="text" name="STT"></th>
                </tr> -->
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Tên danh mục</th>
                    <th><input type="text" name="tenkhoahoc" style="width: 300px;"></th>
                </tr>
                <tr>
                    <th scope="row">Số thứ tự</th>
                    <th ><input type="text" name="giakhoahoc" style="width: 300px;"></th>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="themdanhmuc" value="Thêm khóa học"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>