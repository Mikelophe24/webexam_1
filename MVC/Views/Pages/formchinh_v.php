<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dd2{width: 400px !important;}
        
    </style>
</head>
<body>
    <form method="post" action="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/formchinh_ctrl/timkiem">
        <div class="form-inline" >
            <label style="width: 100px;">Tên Sinh Viên</label>
            <input type="text" class="form-control dd2" name="txtName" 
            value="<?php isset($data['name']) ? isset($data['name']) : '' ?>">
            <label style="width: 100px;">Quê Quán</label>
            <input type="text" class="form-control dd2" name="txtQueQuan" 
            value="<?php isset($data['quequan']) ? isset($data['quequan']) : '' ?>">
            <br>
            <button type="submit" class="btn btn-success" name="btnTimkiem"><img src="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/Public/Pictures/search.png" alt="">Tìm kiếm</button> &nbsp &nbsp
            <a href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/formthem_ctrl" class="btn btn-success" name="btnTimkiem">Thêm</a>
            <br>
         
        <table class="table table-striped">
            <thead>
                <tr><td></td><td></td></tr>
                <tr style="background: #e9e6e6;">
                    <th>Stt</th>
                    <th>ID</th>
                    <th>Tên Sinh Viên</th>
                    <th>Ngày Sinh</th>
                    <th>Quê Quán</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                        $i=0;
                        while($row=mysqli_fetch_assoc($data['dulieu'])){
                ?>
                        <tr>
                           <td><?php echo (++$i) ?></td>
                           <td><?php echo $row['id'] ?></td>
                           <td><?php echo $row['name'] ?></td>
                           <td><?php echo $row['ngaysinh'] ?></td>
                           <td><?php echo $row['quequan'] ?></td>
                           <td>
                                <a href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/formchinh_ctrl/sua/<?php echo $row['id'] ?>" class="btn btn-outline-primary">Sửa</a> &nbsp;
                                <a href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/formchinh_ctrl/xoa/<?php echo $row['id'] ?>" class="btn btn-outline-danger">Xóa</a>
                           </td>
                        </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        </div>
        
        
    </form>
    
</body>
</html>