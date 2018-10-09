<?php session_start();

if(isset($_SESSION["isim"]))
{
   ?>
<!DOCTYPE html>
<html>
   <?php require_once  'include/head.php'; ?>
   <body>
      <div class="header">
         <?php require_once  'include/header.php'; ?>
      </div>
      <div class="govde">
         <?php require_once 'include/sidebar.php'; ?>
         <div class="content">
            <?php 
                           include("..//seflink.php");
               include("..//baglanti.php");

               if(isset($_POST['yukle']))
               {	
               	$kategori_adi=$_POST['kategori_adi'];
                  $kategori_sef=permalink($kategori_adi);
               	$sql="INSERT INTO tbl_kategoriler(kategori_adi,kategori_sef) VALUES('$kategori_adi','$kategori_sef')";
               	$result=mysqli_query($vt,$sql);
               	echo $result;
               	if($result)
               	{
               		header("location:kategoriler.php");
               	}
               }
               ?>
            <table border="1" align="center">
               <form action="kategoriekle.php" method="POST" enctype="multipart/form-data">
                  <tr>
                     <th colspan="2" align="center"> Kategori Ekle</th>
                  </tr>
                  <tr>
                     <td>Kategori Adı</td>
                     <td><input type="text" name="kategori_adi"/ required></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td><input type="submit" name="yukle" value="Ekle"/></td>
                  </tr>
               </form>
            </table>
         </div>
      </div>
   </body>
</html>
<?php
}
else{
   header("location:index.php");

} ?> 