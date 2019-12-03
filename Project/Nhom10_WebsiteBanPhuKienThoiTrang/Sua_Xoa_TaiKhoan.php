<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sửa - Xóa Thành Viên</title>
<style type="text/css">
<!--
    td {
      padding: 5px 5px;
    }

    td:nth-child(3) {text-align: center;}
    td:nth-child(7) {text-align: center;}
    td:nth-child(8) {text-align: center;}
    tr:nth-child(even) {background: #FEE0C4}
    tr:nth-child(odd) {background: #FFFFFF}
  .style3 {color: #FF0000; font-weight: bold; }
-->
</style>
</head>

<body>
<h3 align = "center">THÔNG TIN THÀNH VIÊN</h3>
 <table width="1040" border="1" align="center" cellpadding="3" cellspacing="3">
    <tr>
      <td width="100"><div align="center" class="style3">ID </div></td>
      <td width="250"><div align="center" class="style3">Tên Thành Viên </div></td>
      <td width="250"><div align="center" class="style3">Mật Khẩu </div></td>
      <td width="250"><div align="center" class="style3">Địa Chỉ</div></td>            
      <td width="50"><div align="center" class="style3">Loại TK </div></td>


 
        
    </tr>
    <?php
      include"connect.php";
      $query = mysqli_query($conn,"SELECT * FROM thanhvien");
      if(mysqli_num_rows($query) <> 0){
        while ($row = mysqli_fetch_row($query)) {
          $ma = $row[0];
          echo"
            <tr>
              <td>$row[0]</td>
              <td>$row[1]</td>
              <td>$row[3]</td>
              <td>$row[4]</td>
              <td>$row[2]</td>
              <td><a href='KhachHang/SuaKH.php?ma=$ma'><b>Sửa</b></a><br></td>
              <td><a href='KhachHang/XoaKH.php?ma=$ma'><b>Xóa</b></a><br></td>
            </tr>

          ";
        }
      } 
      mysqli_close($conn);

    ?>
<a href="ViewInfo.php" style="float: right;">Quay Về</a>
</body>

</html>