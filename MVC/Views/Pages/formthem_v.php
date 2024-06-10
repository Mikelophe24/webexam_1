<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<link rel="stylesheet" href="./Public/Css/bootstrap.min.css">
<link rel="stylesheet" href="./Public/Css/dinhdang7.css">
<script src="./Public/Js/jquery-3.3.1.slim.min.js"></script>
<script src="./Public/Js/popper.min.js"></script>
<script src="./Public/Js/bootstrap.min.js"></script>

<body>
<form method="post" action="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/formthem_ctrl/themmoi">
    <div class="form-group">
        <label for="myID">ID Sinh Viên</label>
        <input type="text" id = "myID" class="form-control dd1" placeholder="ID sinh viên" name="txtID" value="<?php if(isset($data['id'])) echo $data['id'] ?>" required>
        <label for="myMaMon">Mã môn học</label>
        <input type="text" id = "myName" class="form-control dd1" placeholder="Tên Sinh Viên" name="txtName" value="<?php if(isset($data['name'])) echo $data['name'] ?>" required>
        <label for="myNgaySinh">Ngày Sinh</label>
        <input type="date" id="myNgaySinh" class="form-control" placeholder="Ngày Sinh" name="txtNgaySinh" value="<?php if(isset($data['ngaysinh'])) echo $data['ngaysinh'] ?>" required>
        <label for="myQueQuan">Số Tín Chỉ</label>
        <input type="text" id="myQueQuan" class="form-control" placeholder="Quê Quán" name="txtQueQuan" value="<?php if(isset($data['quequan'])) echo $data['quequan'] ?>" required>
        <br>
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>   
        <a href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/formchinh_ctrl/timkiem1"  class="btn btn-primary" name="btnQuayLai">Quay Lại</a>                      
    </div>
</form>
</body>
</html>