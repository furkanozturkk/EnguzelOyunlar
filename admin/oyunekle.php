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
               	$oyun_adi=addslashes($_POST['oyun_adi']);
                  $aciklama=addslashes($_POST['aciklama']);
               	$kategori_id=$_POST['kategori_id'];
                  $ekleme_tarihi=date('Y.m.d');
                  $oyun_sef=permalink($oyun_adi);          
               
               
               	if(isset($_FILES['oyun'])){
               

               		$tip = $_FILES['oyun']['type'];
                        $isim = addslashes($_FILES['oyun']['name']);
                        $uzanti = explode('.', $isim);
                        $uzanti = $uzanti[count($uzanti)-1];
               		$dosya = $_FILES['oyun']['tmp_name'];

               		$hedefoyun='oyunlar/' . $isim;
                      $FileType = strtolower(pathinfo($hedefoyun,PATHINFO_EXTENSION));
                     if ($FileType != "swf") {
                        header("Refresh:1; url=oyunekle.php");
                        die("Hatalı bir dosya türü seçtiniz.Lütfen bir Swf dosyası seçiniz.");
                     }
                     else{
                        copy($dosya, 'oyunlar/' . $_FILES['oyun']['name']);
                     }
                        
               
               	}
               	
               
               if(isset($_FILES['resim'])){
               
               		$tip = $_FILES['resim']['type'];
               		$random = rand(0,999999999);
                        $isim =$random . $_FILES['resim']['name'];
                        $uzanti = explode('.', $isim);
                        $uzanti = $uzanti[count($uzanti)-1];
               		$dosya = $_FILES['resim']['tmp_name'];
               		$hedefresim='img/' . $random . '.' . $uzanti;
                     
                     $info = getimagesize($_FILES['resim']['tmp_name']);
                     if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
                        header("Refresh:1; url=oyunekle.php");
                         die("Hatalı bir dosya türü seçtiniz.Lütfen gif,jpeg yada png dosyası seçiniz.");
                     }
                     else{
                        copy($dosya, $hedefresim);
                     }
                    } 

                    
               	$sql="INSERT INTO tbl_oyunlar(oyun_adi,oyun_sef,aciklama,kategori_id,ekleme_tarihi,resim,oyun) VALUES('$oyun_adi','$oyun_sef','$aciklama','$kategori_id','$ekleme_tarihi','$hedefresim','$hedefoyun')";
               	$result=mysqli_query($vt,$sql);
               	echo $result;
               	if($result)
               	{
                     header("location:oyunlar.php");
               	}
               }
               ?>
            <table border="1" align="center">
               <form action="oyunekle.php" method="POST" enctype="multipart/form-data">
                  <tr>
                     <th colspan="2" align="center"> Oyun Ekle</th>
                  </tr>
                  <tr>
                     <td>Oyun Seç</td>
                     <td><input type="file" name="oyun"/ required></td>
                  </tr>
                  <tr>
                     <td>Oyun Adı</td>
                     <td><input type="text" name="oyun_adi"/ required></td>
                  </tr>
                  <tr>
                     <td>Kategori Adı</td>
                     <td>
                        <select name="kategori_id">
                        <?php
                           include("..//baglanti.php");
                           $sql="SELECT * FROM tbl_kategoriler ORDER BY kategori_adi ASC";
                           $sorgula=mysqli_query($vt,$sql);
                           
                           while($result=mysqli_fetch_array($sorgula))
                           {
                           	extract($result);
                           	echo "
                           	<option  value='".$result['id']."'>$kategori_adi</option>";
                           } 
                           ?>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td>Açıklama</td>
                     <td>
                        <textarea rows="6" name="aciklama" required></textarea>
                  </tr>
                  <tr>
                     <td>Resim</td>
                     <td>
                        <input type="file" name="resim"/ required>
                     </td>
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