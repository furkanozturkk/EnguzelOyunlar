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
            $gelenId=$_GET['id'];
if(isset($_POST['yukle']))
               {  
    $gelenId=$_GET['id'];
    $oyun_adi = $_POST['oyun_adi'];
    $oyun_sef=permalink($oyun_adi);
    $aciklama=$_POST['aciklama'];
    $kategori_id=$_POST['kategori_id'];
 

         if(isset($_FILES['oyun']) && !empty($_FILES['oyun']['name'])){
                        $tip = $_FILES['oyun']['type'];
                        $isim = $_FILES['oyun']['name'];
                        $uzanti = explode('.', $isim);
                        $uzanti = $uzanti[count($uzanti)-1];
                  $dosya = $_FILES['oyun']['tmp_name'];
                  $hedefoyun='oyunlar/' . $isim;
                  $FileType = strtolower(pathinfo($hedefoyun,PATHINFO_EXTENSION));
                     if ($FileType != "swf") {
                        header("Refresh:2; url=oyunlar.php");
                        die("Hatalı bir dosya türü seçtiniz.Lütfen bir Swf dosyası seçiniz.");
                     }
                     else{
                        copy($dosya, 'oyunlar/' . $_FILES['oyun']['name']);  
                        unlink($_POST['oyun2']);             
                     }
                        
                }
            else{$hedefoyun=$_POST['oyun2'];}


                if(isset($_FILES['resim']) && !empty($_FILES['resim']['name'])){
               
                  $tip = $_FILES['resim']['type'];
                  $random = rand(0,999999999);
                        $isim =$random . $_FILES['resim']['name'];;
                        $uzanti = explode('.', $isim);
                        $uzanti = $uzanti[count($uzanti)-1];
                  $dosya = $_FILES['resim']['tmp_name'];
                  $hedefresim='img/' . $isim;
                   $info = getimagesize($_FILES['resim']['tmp_name']);
                     if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
                        header("Refresh:2; url=oyunlar.php");
                         die("Hatalı bir dosya türü seçtiniz.Lütfen gif,jpeg yada png dosyası seçiniz.");
                     }
                     else{
                       copy($dosya, $hedefresim);
                        unlink($_POST['resim2']);
                     }
                       
                  }
                else{$hedefresim=$_POST['resim2'];}



    $sql = "UPDATE tbl_oyunlar SET oyun_adi='$oyun_adi',oyun_sef='$oyun_sef', aciklama='$aciklama',kategori_id='$kategori_id',resim='$hedefresim',oyun='$hedefoyun' WHERE id='$gelenId'";
    $sonuc= mysqli_query($vt,$sql);
   header("location:oyunlar.php");
}
else
{
$sql="SELECT * FROM tbl_oyunlar WHERE id=$gelenId";
$sorgula=mysqli_query($vt,$sql);
$satirsay=mysqli_num_rows($sorgula);
if($satirsay>0)
{
   $satir=mysqli_fetch_array($sorgula);
echo' 
<table border="1" align="center">
               <form action="" method="POST" enctype="multipart/form-data" >
                  <tr>
                     <th colspan="3" align="center"> Oyun Güncelle</th>
                  </tr>
                  <tr>
                     <td>Oyun Seç</td>
                     <td><input type="file" name="oyun"/> <input type="hidden"   name="oyun2" value="'.$satir['oyun'].'"/ ></td>
                     <td><input type="text"  name="oyun3" value="'.$satir['oyun'].'" disabled/ ></td>
                  </tr>
                  <tr>
                     <td>Oyun Adı</td>
                     <td colspan="2"><input type="text" name="oyun_adi" value="'.$satir['oyun_adi'].'" required></td>
                  </tr>
                  <tr>
                     <td>Kategori Adı</td>
                     <td colspan="2">'; ?> <select name="kategori_id">
                        <?php 
                           include("..//baglanti.php");
                           $sql="SELECT * FROM tbl_kategoriler ORDER BY kategori_adi ASC";
                           $sorgula=mysqli_query($vt,$sql);
                           
                           while($result=mysqli_fetch_array($sorgula))
                           {
                            extract($result);
                            echo "
                            <option name='kategori_id'";if($satir['kategori_id']==$result['id']){ echo "selected";}  echo" value='".$result['id']."'>$kategori_adi</option>";
                           } 
                          ?>
                        </select>
                        <?php
                         echo '</td>
                  </tr>
                  <tr>
                     <td>Açıklama</td>
                     <td colspan="2"><textarea rows="6" name="aciklama" required>'; echo $satir['aciklama']; echo '</textarea></td>
                  </tr>
                  <tr>
                     <td>Resim</td>
                     <td><input type="file" name="resim"/ > <input type="hidden"  name="resim2" value="'.$satir['resim'].'"/ ></td>
                      <td><input type="text"  name="resim3" value="'.$satir['resim'].'" disabled/ ></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td colspan="2"><input type="submit" name="yukle" value="Ekle"/></td>
                  </tr>
               </form>
            </table>
';

}
}
}
else{
   header("location:index.php");

} ?> 