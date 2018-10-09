  <!DOCTYPE html>
  <html>
  <?php require_once  'include/head.php'; ?>
  <body>
    <div class="header">
      <?php require_once  'include/header.php'; ?>
    </div>
    <div class="govde">
      <?php require_once  'include/sidebar.php'; ?>
      <div class="content" >
        <div class="oyunlar" style="background-color: transparent;">
          <?php 
   include("baglanti.php");
                 $gelenId=$_GET['id'];  

  $sql="SELECT * FROM tbl_oyunlar WHERE id=$gelenId" ;
  $sorgula=mysqli_query($vt,$sql);
  while($result=mysqli_fetch_array($sorgula))
  {
    extract($result);
    
    echo "
    <div class='oyunlar-header'>
            <h2>$oyun_adi</h2>
          </div>
          <div class='game-box'>
            <embed allownetworking='internal' allowscriptaccess='never' wmode='opaque' src='http://localhost/enguzeloyunlar/admin/$oyun' quality='high' bgcolor='#ffffff' width='750px' height='563px' name='http://localhost/enguzeloyunlar/admin/$oyun' align='middle' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'>
          </div>";
  }
  $tiklanma_sayisi=($tiklanma+1);
  $artir = "UPDATE tbl_oyunlar SET tiklanma='$tiklanma_sayisi' WHERE id='$gelenId'";
  $result=mysqli_query($vt,$artir);

  ?>
        </div>
        <div class='oyunlar'>
          <div class='oyunlar-header'>
            <h2>Benzer Oyunlar</h2>
          </div>
        <?php 
   include("baglanti.php");
                 

  $sql="SELECT * FROM tbl_oyunlar WHERE kategori_id=$kategori_id Limit 8" ;
  $sorgula=mysqli_query($vt,$sql);
  while($result=mysqli_fetch_array($sorgula))
  {
    extract($result);

    echo "
        
          
          <div class='oyun-kutu'>
            <a href='http://localhost/enguzeloyunlar/aciklama.php?id=$id' title='$oyun_adi'>
              <img src='http://localhost/enguzeloyunlar/admin/$resim' width='145' height='115' alt='' border='0'>
              $oyun_adi
            </a>
          </div>
        ";
      } ?>
      </div>
      <ul class="tab_menu" id="file_tabs"><li><a href="" class="selected">Oyun bilgileri</a></li><li><a href="">Rapor et</a></li></ul>
      <?php 
   include("baglanti.php");
                 $gelenId=$_GET['id'];  


                 $artir = "INSERT INTO tbl_oyunlar(tiklanma) VALUES('$kategori_adi+1')";
                 $result=mysqli_query($vt,$artir);  

  $sql="SELECT * FROM tbl_oyunlar WHERE id=$gelenId" ;
  $sorgula=mysqli_query($vt,$sql);
  while($result=mysqli_fetch_array($sorgula))
  {
    extract($result);
    
    echo "
    <div class='content_box'>
        <div class='relative' style='display: block;'>
          <p class='bold'>
            $oyun_adi
          </p>
          <p><b>Açıklama</b>: $aciklama</p>
          <p class='file_info'>Toplam Oynama: $tiklanma</p>
          <p class='file_info'>Eklenme Tarihi: $ekleme_tarihi</p>
          <p class='file_info'>Ekleyen: admin</p>
          <div class='clear'></div>
          <p id='sosyal_share'>
            <a href='http://twitter.com' rel='nofollow' target='_blank'><img src='./images/twitter.png' title='Twitter' alt='Twitter'></a>  
            <a href='http://www.facebook.com' rel='nofollow' target='_blank'><img src='./images/facebook.png' title='Facebook' alt='Facebook'></a>
          </p>
          <p>
        </div>
         
      <div style='display: none;'>
        <form method='post' action=' id='report_broken_form'>
          <p>Bu Dosya ile ilgili sorun nedir?</p>
          <p>
            <input type='text' class='form-control' name='report_reason'>
            <input type='submit' value='Gönder' class='btn btn-info'>
          </p>
        </form>
      </div>
      </div> ";
  }


  ?>
      

  <?php
  if (isset($_SESSION['k_adi'])) {
    

  ?>
  <?php 
                 include("./baglanti.php");

                 if(isset($_POST['ekle']))
                 {  
                  $yorum=$_POST['comment'];
                 
                  if(!isset($_POST['r_id'])){
                    $r_id=0;
                  }
                  else{
                    $r_id=$_POST['r_id'];
                  }
                  $kullanici_id=$_SESSION['id'];
                  $tarih=date('y-m-d H-i-s');
                  $sql="INSERT INTO tbl_yorumlar(kullanici_id,oyun_id,referans_id,tarih,yorum) VALUES('$kullanici_id','$gelenId','$r_id','$tarih','$yorum')";
                  $result=mysqli_query($vt,$sql);
                
                 }
                 ?>

  <div id="to_comments" class="content_box">
       <div class="page_table"><span class="title">
          Yorumlar:
       </span></div>
       <div class="clear"></div>
        <form action="" method="post" id="comment_form">
          <div id="bb_code"><p><img src="http://www.enguzeloyunlar.org/images/happy.gif" alt=":)" title=":)" class="bb_emoticon"><img src="http://www.enguzeloyunlar.org/images/sad.gif" alt=":(" title=":(" class="bb_emoticon"><img src="http://www.enguzeloyunlar.org/images/wink.gif" alt=";)" title=";)" class="bb_emoticon"><img src="http://www.enguzeloyunlar.org/images/@.gif" alt=":@" title=":@" class="bb_emoticon"><img src="http://www.enguzeloyunlar.org/images/cool.gif" alt=":8" title=":8" class="bb_emoticon"><img src="http://www.enguzeloyunlar.org/images/wave.gif" alt=":wave:" title=":wave:" class="bb_emoticon"><img src="http://www.enguzeloyunlar.org/images/think.gif" alt=":think:" title=":think:" class="bb_emoticon"><img src="http://www.enguzeloyunlar.org/images/clap.gif" alt=":clap:" title=":clap:" class="bb_emoticon"></p></div>
          <div class="line">
          <p class="left">Mesaj:</p>
          <p><textarea name="comment" id="comment" class="form-control" rows="5" cols="55"></textarea></p>
          </div>
          <p id="comment_verification_field"></p>
          <p><input type="submit" name="ekle" value="Yorum ekle" class="btn btn-info"></p>
        </form>
        <div id="comments">
  <?php 
   include("baglanti.php");
                 

  $sql="SELECT * FROM tbl_yorumlar WHERE oyun_id=$gelenId and referans_id=0 order by tarih asc" ;
  $sorgula=mysqli_query($vt,$sql);
  while($result=mysqli_fetch_array($sorgula))
  {
    extract($result);


    echo "
        
          
            <div class='comment2' id='comment_8048'><div class='avatarm'><img src='./images/noavatar.gif' alt='/'></div>
          <p><span class='user'>";echo $_SESSION['k_adi'];echo "</span><span class='date'>($tarih)</span></p><p class='text'>$yorum</p>";
          $kullanici_id=$_SESSION['id'];

$begeni_id=$id;
  $sql="SELECT * FROM tbl_yorumbegeni WHERE kullanici_id=$kullanici_id and yorum_id=$id";


  $sonuc=mysqli_query($vt,$sql);
  if(mysqli_num_rows($sonuc)){
        

  echo "<a href='http://localhost/enguzeloyunlar/begenisil.php?id=$id' class=''>Beğenmekten Vazgeç</a>";
  }
  else{

  echo "<a href='http://localhost/enguzeloyunlar/begeni.php?id=$id' class=''>Beğen</a>";
  }
echo"<a class='yyorum' style='padding:8px;'>Yanıtla</a>
          <div id='yyorum'style='display:none;'>
      <hr class='exampleone'>
          <form action='' method='post' id='comment_form'>
          <input type='hidden' name='r_id' value='$id'>
          <div id='bb_code'><p><img src='http://www.enguzeloyunlar.org/images/happy.gif' alt=':)' title=':)' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/sad.gif' alt=':(' title=':(' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/wink.gif' alt=';)' title=';)' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/@.gif' alt=':@' title=':@' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/cool.gif' alt=':8' title=':8' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/wave.gif' alt=':wave:' title=':wave:' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/think.gif' alt=':think:' title=':think:' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/clap.gif' alt=':clap:' title=':clap:' class='bb_emoticon'></p></div>
          <div class='line'>
          <p class='left'>Mesaj:</p>
          <p><textarea name='comment' id='comment' class='form-control' rows='5' cols='55'></textarea></p>
          </div>
          <p id='comment_verification_field'></p>
          <p><input type='submit' name='ekle' value='Yorum ekle' class='btn btn-info'></p>
        </form>

        </div>
        

        ";
        $a=0; 
        $sorgulanacak_id=$id;

      reccoment($sorgulanacak_id,$a);

    
      
      } ?>
        
        </div>
      </div>

  <?php
  }
  ?>

      </div>
    </div>

        </div>
    <div id="footer">
      <?php require_once  'include/footer.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function(){
      var kontrol=0;
        $("#file_rating span").mouseover(function(){
          var index=$(this).index();
            $("#file_rating .star").css("color","#000")
              for(i=index;i>=0;i--){
                $("#file_rating .star:eq("+i+")").addClass("star_hover");
              }
            })
            $("#file_rating span").mouseout(function(){
              if(kontrol==0){
                $("#file_rating span").removeClass("star_hover");
              }
            })
            $("#file_rating span").click(function(){
              var index=$(this).index()+1;
              kontrol=1;
                for(i=index-1;i>=0;i--){
                  $("#file_rating .star:eq("+(i)+")").removeClass("star_empty star_hover").addClass("star_full");
                  }
                  $(".oy").text(index);
            })
        })
    </script>
    <script type="text/javascript">
      $(document).ready(function(){ 
        $('.yyorum').click(function () {
          $(this).next('#yyorum').toggle();
        })
      });
    </script>
  </body>
  <?php
  function reccoment($sorgulanacak_id,$a) {
     include("baglanti.php");
    
      $sql="SELECT * FROM tbl_yorumlar WHERE referans_id=$sorgulanacak_id order by tarih asc" ;
  $sorgula2=mysqli_query($vt,$sql);

  $sorgusayisi=mysqli_num_rows($sorgula2);
  if($sorgusayisi!=0){


  $a=$a+20;
    
  while($result2=mysqli_fetch_array($sorgula2))
  {
    
    extract($result2);
    echo "
        
          
            <div class='comment' style='padding-left:".$a."px;' id='comment_8048'><div class='avatarm'><img src='./images/noavatar.gif' alt='/'></div>
          <p><span class='user'>dsadd</span><span class='date'>($tarih)</span></p><p class='text'>$yorum</p>";
    $kullanici_id=$_SESSION['id'];


  $sql="SELECT * FROM tbl_yorumbegeni WHERE kullanici_id=$kullanici_id and yorum_id=$id";


  $sonuc=mysqli_query($vt,$sql);
  if(mysqli_num_rows($sonuc)){
        

  echo "<a href='http://localhost/enguzeloyunlar/begenisil.php?id=$id' class=''>Beğenmekten Vazgeç</a>";
  }
  else{

  echo "<a href='http://localhost/enguzeloyunlar/begeni.php?id=$id' class=''>Beğen</a>";
  }

  $sql="SELECT * FROM tbl_yorumbegeni WHERE yorum_id=$id";


  $sonuc=mysqli_query($vt,$sql);
  $sayac=mysqli_num_rows($sonuc); 
  while($result=mysqli_fetch_array($sonuc))
{
  extract($result);
  
    echo "<a class='sayac' href='#open-modal'><img src='./images/like.png'>$sayac</a>
  <div class='container'>
    <div class='interior'>

    </div>
  </div>
  <div id='open-modal' class='modal-window'>
    <div>
      <a href='#modal-close' title='Close' class='modal-close'>Close</a>
      <h1>Beğenenler!</h1>
      <div>
      <div class='avatarm'><img src='./images/noavatar.gif' alt='/'></div><p></p>
      </div>
      </div>
  </div>";
}



  echo "
  <a class='yyorum' style='padding:8px;'>Yanıtla</a>
  <div id='yyorum'style='display:none;'>
      <hr class='exampleone'>
          <form action='' method='post' id='comment_form'>
          <input type='hidden' name='r_id' value='$id'>
          <div id='bb_code'><p><img src='http://www.enguzeloyunlar.org/images/happy.gif' alt=':)' title=':)' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/sad.gif' alt=':(' title=':(' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/wink.gif' alt=';)' title=';)' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/@.gif' alt=':@' title=':@' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/cool.gif' alt=':8' title=':8' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/wave.gif' alt=':wave:' title=':wave:' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/think.gif' alt=':think:' title=':think:' class='bb_emoticon'><img src='http://www.enguzeloyunlar.org/images/clap.gif' alt=':clap:' title=':clap:' class='bb_emoticon'></p></div>
          <div class='line'>
          <p class='left'>Mesaj:</p>
          <p><textarea name='comment' id='comment' class='form-control' rows='5' cols='55'></textarea></p>
          </div>
          <p id='comment_verification_field'></p>
          <p><input type='submit' name='ekle' value='Yorum ekle' class='btn btn-info'></p>
        </form>
        </div></div>
          <div class='clear'></div>
          
        ";
        
        $sorgulanacak_id=$id;
        

        reccoment($sorgulanacak_id,$a+10);
      
  }
  }
    }

   ?>
   <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
      $('.modal').modal();
    });
   </script>
  </html>


