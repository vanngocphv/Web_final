<?php
  include "connect.php";
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
    $tenmoi = $giamoi = $hinhmoi = "";
    include "connect.php";

    if (isset($_POST['hinh'])){
      $hinh = $_POST['hinh'];
    }
      if (isset($_FILES["file"])) {
      $hinhmoi = $_FILES["file"]["name"];
      if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){
              $path = realpath($_FILES["file"]["name"]);
          }
      
    }

    $id = $_GET["ma"];
    $query = mysqli_query($conn, "SELECT * FROM sanpham WHERE ID LIKE '$id'");
    if (mysqli_num_rows($query) > 0){
      while ($row = mysqli_fetch_row($query)) {
        $TenSP = $row[1];
        $Gia = $row[2];
        $hinh = $row[3];
      
      }
    }
    if (isset($_POST['Submit']) && isset($_POST['TenSP'])  && isset($_POST['Gia']) && isset($_POST['hinh'])) {
        $res = "";
        $tenmoi = $_POST['TenSP'];
        $giamoi = $_POST['Gia'];
        $hinhmoi = $_POST['file'];
		if ($hinhmoi == "" || $hinhmoi == " "|| !$hinhmoi) $hinhmoi = $hinh;
        $update = "UPDATE sanpham SET TenSP = '$tenmoi', Gia = '$giamoi', fileIMG = '$hinhmoi' WHERE ID LIKE '$id'";
        
        $resUp = mysqli_query($conn, $update);
        $res = "Cập nhật thành công!";
        $query = mysqli_query($conn, "SELECT * FROM sanpham WHERE ID LIKE '$id'");
        if (mysqli_num_rows($query) > 0){
          while ($row = mysqli_fetch_row($query)) {
            $TenSP = $row[1];
            $Gia = $row[2];
            $hinh = $row[3];
            
          }
        }
        
    }
  ?>
<form name="form1" method="post" action="">
  <table wihinhh="500" border="1" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2" bgcolor="#FF9966"><div align="center" class="style1">CẬP NHẬT THÔNG TIN SẢN PHẨM </div></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Id Sản phẩm </td>
      <td bgcolor="#FFCCCC"><label>
        <input name="id" type="text" id="id" value="<?php echo $id?>" size="20" readonly="true" style = "background-color:#00CCFF">
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Tên Sản Phẩm </td>
      <td bgcolor="#FFCCCC"><input name="TenSP" type="text" id="TenSP" value="<?php echo isset($TenSP) ? $TenSP : ""?>" size="50"></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Giá Sản Phẩm </td>
      <td bgcolor="#FFCCCC"><input name="Gia" type="text" id="Gia" value="<?php echo isset($Gia) ? $Gia : ""?>" size="50"></td>
    </tr>
    <tr>
      <td bgcolor="#FFCCCC">Hình Ảnh </td>
      <td bgcolor="#FFCCCC"><input name="hinh" type="text" id="hinh" value="<?php echo isset($hinh) ? $hinh : ""?>"><input type="file" name="file" id="file"></input></td>
    </tr>
	<tr>
		<td bgcolor="#FFCCCC">Lưu Ý </td>
		<td bgcolor="#FFCCCC">Muốn thay đổi hình ảnh, trước tiên phải upload ảnh lên<a href = "upload.php">Upload ảnh </a><br>Nếu không làm theo như trên, ảnh sẽ bị lỗi</td>
	
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
       <td colspan="2"><a href="Thongtinsanpham.php">Quay về</a></td>
    </tr>
  </table>
</form>
</body>
</html>
