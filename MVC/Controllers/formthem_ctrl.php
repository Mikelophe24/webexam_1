<?php 
class formthem_ctrl extends controller{
    public $nutthem;
    function __construct()
    {
        $this->nutthem=$this->model('Thigiuaki_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'formthem_v'
        ]);
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtID'];
            $name=$_POST['txtName'] ;
            $ngaysinh=$_POST['txtNgaySinh'];
            $quequan=$_POST['txtQueQuan'];
            //Kiểm tra trùng mã tác giả
            $kq1=$this->nutthem->checktrungmaid($id);
            if($kq1){
                echo "<script>alert('Trùng mã id!')</script>";
            }
            else{
                //gọi hàm thêm dl thi_ins trong model
                $kq=$this->nutthem->thi_ins($id,$name,$ngaysinh,$quequan);
                
                if($kq){
                    echo "<script>alert('Thêm mới thành công!')</script>";
                }
                else
                    echo "<script>alert('Thêm mới thất bại!')</script>";
            }
            $this->view('Masterlayout',[
                'page'=>'formthem_v',
                'id'=>$id,
                'name'=>$name,
                'ngaysinh'=>$ngaysinh,
                'quequan'=>$quequan
            ]);  
        }
        
    }
}
?>