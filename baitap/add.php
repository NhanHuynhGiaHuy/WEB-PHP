<?php
    require_once("connect_db_php");
    if($_SERVER["REQUEST_METOD"] == "POST"){
        if(isset($_REQUEST["btnsubmit"])){
            $name = $_REQUEST["username"];
            $pass = $_REQUEST["password"];
            $email = $_REQUEST["email"];
            $hoten = $_REQUEST["hoten"];
            $conn = connect_db();
            if($conn){
                $sql = "Inser into quan_tri_vien (ten_dang_nhap, mat_khau, email, ho_ten) VALUES";
                $sql.="('".$name."', '".$pass."', '".$email."', '".$hoten."')";
                if(mysqli_query(mysql: $conn, query: $sql)){
                    echo "Them du lieu thanh cong!";
                }else{
                    echo "Loi thuc thi: $sql <br>".mysqli_error(mysql: $conn);
                }
            }
            mysqli_close(mysql: $conn);
        }
    }
?>