
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pages</title>
    <link rel="stylesheet" href="styleAdmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <div class="header">
            <p class="header-page">Admin Page</p>
            <div class="menu">
                <ul class="nav">
                    <li><a class = "list-items nav-link nav-item" href="index.php?action=quanlydanhmucsanpham">Quản lý danh mục sản phẩm</a></li>
                    <li><a class = "list-items nav-link nav-item" href="index.php?action=quanlysanpham">Quản lý sản phẩm</a></li>
                    <li><a class = "list-items nav-link nav-item" href="index.php?action=quanlydonhang">Quản lý đơn hàng</a></li>
                    <li><a class = "list-items nav-link nav-item" href="index.php?action=dangxuat">Đăng xuất</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <?php 
                if(isset($_GET['action'])){
                    $click = $_GET['action'];
                }else{
                    $click = "";
                }
                if($click == 'quanlydanhmucsanpham'){
                    include("./modules/quanlydanhmucsanpham/them.php");
                    include("./modules/quanlydanhmucsanpham/lietke.php");
                }else if($click == 'quanlysanpham'){
                    include("./modules/quanlysanpham/them.php");
                    include("./modules/quanlysanpham/lietke.php");               
                }else if($click == 'dangxuat'){
                    unset($tk);
                    header("Location: login.php");
                }else{
                    include("dashboard.php");
                }
               
            ?>
        </div>
        <div class="footer">

        </div>
    </div>

</body>
</html>