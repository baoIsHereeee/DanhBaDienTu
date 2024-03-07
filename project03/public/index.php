<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<!-- HEADER -->
<?php
    require_once ("../app/config.php");
    include (ROOT_PATH . "/public/layout/header.php");
?>

<!-- MAIN CONTENT -->
<main class="container-fluid">

<h1 style="text-align: center; margin-top: 20px">DANH SÁCH DANH BẠ ĐƠN VỊ</h1>

    <?php if(isset($_GET['role']) && isset($_GET['login'])): ?>
        <table class="table mt-5">
                <thead>
                    <tr>
                    <th scope="col">ID Đơn Vị</th>
                    <th scope="col">Tên Đơn Vị</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Trực Thuộc Đơn Vị</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>

                <?php 
                    for ($i=0; $i < 10; $i++) { 
                        echo '
                        <tbody>
                        <tr>
                        <th scope="row">'. $i .'</th>
                        <td>Công Nghệ Thông Tin</td>
                        <td>175 Tây Sơn</td>
                        <td>CNNT@gmail.com</td>
                        <td>0123456789</td>
                        <td>Công Nghệ Phần Mềm</td>
                        <td><a href="" class="text-decoration-none">Sửa</a></td>
                        <td><a href="" class="text-decoration-none">Xóa</a></td>
                        </tr>
                        </tbody>
                        ';
                    }   
                ?>
                
        </table>
    <?php else: ?>
        <table class="table mt-5">
                <thead>
                    <tr>
                    <th scope="col">ID Đơn Vị</th>
                    <th scope="col">Tên Đơn Vị</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Trực Thuộc Đơn Vị</th>
                    </tr>
                </thead>

                <?php 
                    for ($i=0; $i < 10; $i++) { 
                        echo '
                        <tbody>
                        <tr>
                        <th scope="row">'. $i .'</th>
                        <td>Công Nghệ Thông Tin</td>
                        <td>175 Tây Sơn</td>
                        <td>CNNT@gmail.com</td>
                        <td>0123456789</td>
                        <td>Công Nghệ Phần Mềm</td>
                        </tr>
                        </tbody>
                        ';
                    }   
                ?>
                
        </table>      
    <?php endif; ?>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" style="color: black" href="#">Trước</a></li>
            <li class="page-item"><a class="page-link" style="color: black" href="#">1</a></li>
            <li class="page-item"><a class="page-link" style="color: black" href="#">2</a></li>
            <li class="page-item"><a class="page-link" style="color: black" href="#">3</a></li>
            <li class="page-item"><a class="page-link" style="color: black" href="#">Sau</a></li>
        </ul>
    </nav>

</main>

<!-- FOOTER -->
<?php
    require_once ("../app/config.php");
    include (ROOT_PATH . "/public/layout/footer.php");
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

