
  <h2>Реклама</h2>

  <?php 
    $banners = getAllBanners();
    for($i=0; $i<count($banners); $i++){
      $code = $banners[$i]["code"];
      include "banner.php";
    }
  ?>
</div>
