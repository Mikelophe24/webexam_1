<?php 
class Thigiuaki_m extends connectDB{
    public function thi_ins($id,$name,$ngaysinh,$quequan){
        $sql="INSERT INTO sinh_vien VALUES ('$id','$name','$ngaysinh','$quequan')";
        return mysqli_query($this->con,$sql);
    }
    public function thi_all(){
        $sql="Select * From sinh_vien";
        return mysqli_query($this->con,$sql);
    }
    function checktrungmaid($id){
        $sql="Select * From sinh_vien Where id='$id'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    public function thi_find($name,$quequan){
        $sql="SELECT * FROM sinh_vien WHERE name like '%$name%' 
        AND quequan like '%$quequan%'";
        return mysqli_query($this->con,$sql);
    }
    public function thi_find1($id){
        $sql="SELECT * FROM sinh_vien WHERE id like '%$id%'";
        return mysqli_query($this->con,$sql);
    }
    function thi_del($id){
        $sql="DELETE FROM sinh_vien WHERE id = '$id'";
        return mysqli_query($this->con,$sql);
    }
    function thi_upd($id,$name,$ngaysinh,$quequan){
        $sql="UPDATE sinh_vien SET name='$name',ngaysinh='$ngaysinh',quequan='$quequan'
        WHERE id='$id'";
        return mysqli_query($this->con,$sql);
    }
}
?>