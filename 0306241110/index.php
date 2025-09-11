<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<>
    <h1>Nhập Thông Tin Sinh Viên</h1>
    
    <a>MSSV: </a>
    <input type="text" name="mssv" /> <br/>
    
    <a>Họ tên: </a>
    <input type="text" name="hoten" /> <br/>
    
    <a>Gioi tính </a>
    <label><input type="radio" name="gioitinh" > Nam </label>
    <label><input type="radio" name="gioitinh" > Nữ </label> <br/>
    
    <a>Ngôn ngữ lập trình: </a>
    <label><input type="radio" name="ngonngu" > C++ </label>
    <label><input type="radio" name="ngonngu" > PHP </label> <br/>

    <a>Thành phố: </a>
    <select name="thanhpho">
        <option value="1" > Hà Nội </option>
        <option value="2" > Vũng Tàu </option>
        <option value="3" > Hồ Chí Minh </option>
    </select> <br/>

    <a>Tin nhan</a><br/>
        <textarea row="50" cols="20"></textarea>
</body>
</html>