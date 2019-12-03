<?php
  include "../connect.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cập nhật thông tin Sản Phẩm</title>
<style type="text/css">
<!--

  table {
    border-collapse: collapse;
  }

.style1 {
  color: #FFFFFF;
  font-weight: bold;
}
-->
</style>
</head>

<body>
  <?php
    $tenmoi = $loaitkmoi = $matkhaumoi = $diachimoi= "";
    include "../connect.php";

    $id = $_GET["ma"];
    $query = mysqli_query($conn, "SELECT * FROM thanhvien WHERE ID LIKE '$id'");
    if (mysqli_num_rows($query) > 0){
      while ($row = mysqli_fetch_row($query)) {
        $TenTv = $row[1];
        $LoaiTk = $row[2];
        $MatKhau = $row[3];
        $DiaChi=$row[4];
      
      }
    }
    if (isset($_POST['Submit']) && isset($_POST['TenThV'])  && isset($_POST['LoaiTK']) && isset($_POST['MK']) && isset($_POST['DiaChi'])) {
		$id = $_POST['id'];
        $res = "";
        $tenmoi = $_POST['TenThV'];
        $loaitkmoi = $_POST['LoaiTK'];
        $matkhaumoi = $_POST['MK'];
        $diachimoi =$_POST['DiaChi'];
        $update = "UPDATE thanhvien SET TenThV = '".$tenmoi."', MK = '".$matkhaumoi."',DiaChi='".$diachimoi."' WHERE ID LIKE '".$id."'";

        $resUp = mysqli_query($conn, $update);
        $res = "Cập nhật thành công!";
        $query = mysqli_query($conn, "SELECT * FROM thanhvien WHERE ID LIKE '$id'");
        if (mysqli_num_rows($query) > 0){
          while ($row = mysqli_fetch_row($query)) {
            $TenTv = $row[1];
            $LoaiTk = $row[2];
            $MatKhau = $row[3];
            $DiaChi=$row[4];

            
          }
        }
        
    }
  ?>
<form name="form1" method="post" action="">
  <table wiMKh="500" border="1" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2" bgcolor="#FF9966"><div align="center" class="style1">CẬP NHẬT THÔNG TIN SẢN PHẨM </div></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">TK Thành Viên </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="id" type="text" id="id" value="<?php echo $id?>" size="20" readonly="true" style = "background-color:#00CCFF">
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Tên Thành Viên </td>
      <td bgcolor="#FFCCCC"><input name="TenThV" type="text" id="TenThV" value="<?php echo isset($TenTv) ? $TenTv : ""?>" size="50"></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Loại Thành Viên </td>
      <td bgcolor="#FFCCCC"><input name="LoaiTK" type="text" id="LoaiTK" value="<?php echo isset($LoaiTk) ? $LoaiTk : ""?>" readonly size="50"></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Mật Khẩu </td>
      <td bgcolor="#FFCCCC"><input name="MK" type="text" id="MK" value="<?php echo isset($MatKhau) ? $MatKhau : ""?>"></td>
    </tr>
     <tr>
      <td bgcolor="#FFCCCC">Địa Chỉ </td>
      <td bgcolor="#FFCCCC"><input name="DiaChi" type="text" id="DiaChi" value="<?php echo isset($DiaChi) ? $DiaChi : ""?>" size="50"></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FFCCCC"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Cập nhật">

        </div>
      </label></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><?php echo isset($res) ? $res : "" ?></td>
    </tr>
     <tr>
       <td colspan="2"><a href="../Sua_Xoa_TaiKhoan.php">Quay về</a></td>
    </tr>
  </table>
</form>
</body>
</html>
