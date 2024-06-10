<?php 
class formchinh_ctrl extends controller{
    private $ds;
    function __construct()
    {
        $this->ds=$this->model('Thigiuaki_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'formchinh_v'
        ]);
    }
    function timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $name=$_POST['txtName'];
            $quequan=$_POST['txtQueQuan'];
            $ngaysinh=isset($_POST['txtNgaySinh']) ? isset($_POST['txtNgaySinh']) : '';
            $dulieu=$this->ds->thi_find($name,$quequan);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinh_v',
                'dulieu'=>$dulieu,
                'name'=>$name,
                'ngaysinh'=>$ngaysinh,
                'quequan'=>$quequan
            ]);
        }
    }
    function timkiem1(){
        
        $name='';
        $quequan='';
        $ngaysinh=isset($_POST['txtNgaySinh']) ? isset($_POST['txtNgaySinh']) : '';
        $dulieu=$this->ds->thi_find($name,$quequan);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[
            'page'=>'formchinh_v',
            'dulieu'=>$dulieu,
            'name'=>$name,
            'ngaysinh'=>$ngaysinh,
            'quequan'=>$quequan
        ]);
    
}
    function xoa($id){
        $kq=$this->ds->thi_del($id);
        if($kq)
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";
        $name=isset($_POST['txtName']) ? isset($_POST['txtName']) : '' ;
        $ngaysinh=isset($_POST['txtNgaySinh']) ? isset($_POST['txtNgaySinh']) : '';
        $quequan=isset($_POST['txtQueQuan']) ? isset($_POST['txtQueQuan']) : '';
        $dulieu=$this->ds->thi_find($name,$quequan);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[
            'page'=>'formchinh_v',
            'dulieu'=>$dulieu,
            'name'=>$name,
            'ngaysinh'=>$ngaysinh,
            'quequan'=>$quequan

        ]);
    }
    function sua($id){
        $this->view('Masterlayout',[
            'page'=>'formsua_v',
            'dulieu'=>$this->ds->thi_find1($id)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtID'];
            $name=$_POST['txtName'];
            $ngaysinh=$_POST['txtNgaySinh'];
            $quequan = $_POST['txtQueQuan'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq=$this->ds->thi_upd($id,$name,$ngaysinh,$quequan);
            
            if($kq){
                echo "<script>alert('Sửa thành công!')</script>";
            }
            else {
                echo "<script>alert('Sửa thất bại!')</script>";
            }
           
            //Gọi lại giao diện và truyền $dulieu ra
            $name=$_POST['txtName'];
            $ngaysinh=$_POST['txtNgaySinh'];
            $quequan = $_POST['txtQueQuan'];
            $dulieu=$this->ds->thi_find($name,$quequan);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinh_v',
                'dulieu'=>$dulieu,
                'name'=>$name,
                'ngaysinh'=>$ngaysinh,
                'quequan'=>$quequan
            ]); // <- Corrected semicolon here
        }
    }
?>    
