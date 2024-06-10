<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/Css/dinhdang7.css">
    <script src="./Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="./Public/Js/popper.min.js"></script>
    <script src="./Public/Js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="header1">
            <img src="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/Public/Pictures/logo.png" alt="">
        </div>
        <div class="menu1" style="background: green; height:58px; font-size:18px; width:100%;">
            <nav class="navbar navbar-expand-sm navbar-dark bg-primary rounded">
                <ul class="navbar-nav mr-autoavbar">
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="http://localhost/thi%20gi%e1%bb%afa%20h%e1%bb%8dc%20k%c3%ac%20%c4%91%e1%bb%81%201/formchinh_ctrl">Danh Sách Sinh Viên</a>
                    </li>
                </ul>
      </nav>
        </div>
        <div class="row">
                <table>
                    <tr>
                        
                        <td style="width: 80%;vertical-align: top; padding-top:10px;">
                            <div class="content1">
                                <?php 
                                        include_once './MVC/Views/Pages/'.$data['page'].'.php';
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
        </div>            
        <div class="footer1">
              
        </div>
    </div>
    
</body>
</html>