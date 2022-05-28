<?php
require("../loader.php");
load_models("video");
load_models("book");
load_models("music");

$video_list = new video();
$result_video =$video_list->SelectFromTable(6);

$book_list = new book();
$result_book =$book_list->SelectFromTable(6);

$music_list =new music();
$result_music = $music_list->SelectFromTable(6);
/**
 * 
 * 
 * 
 */
$layout = new layout();
$layout->pageheader();

?>
  
<main>
    <section id="slider" >
      <div class="titr"><h3 class="btn2-grad">ویدیوهای مهدویت</h3></div>
     <a id="left-arrow-key" style="top: 32%;" onclick="left('ul-video')">  <i class="bi bi-arrow-right-circle fa-3x "></i></a>
     <a id="right-arrow-key" style="top: 32%;" onclick="right('ul-video')">  <i class="bi bi-arrow-left-circle fa-3x "></i></a>
      <ul id="ul-video" class="cs-hidden" onmouseover="drag('ul-video')" >

      <?php 
      while ($row = mysqli_fetch_assoc($result_video)){
        ?>
        <li class="item-a">
        <!--box-slider--------------->
        <div class="box">
          <!--img-box---------->
          <div class="slide-img">
            <img alt="8" src="<?php echo $row['img']?>" />
            <!--overlayer---------->
            <div class="overlay">
              <!--buy-btn------>
              <a href="<?php echo $row['link']?>  " class="download from-top">دانلود</a>
            </div>
          </div>
          <!--detail-box--------->
          <div class="detail-box">
            <!--type-------->
            <div class="type">
              <a href="#"><?php echo $row['title']?></a>
              <span><?php echo $row['descrip']?></span>
            </div>
            <!--price-------->
           
          </div>
        </div>
      </li>
<?php
      }
?>      
  <div class="more">ویدیوهای بیشتر<span> </span></div>
      </ul>
     
      <a href="#section2">
        <div class="scroll-down"></div>
      </a>
    </section>

    <section id="section2">
      <div class="titr "><h5 class="btn2-grad">کتاب های مهدویت</h5></div>
      <div class="caontainer-book" id="caontainer-book">
      <a id="right-arrow-key" onclick="right('book-list')"><i class="bi bi-arrow-left-circle fa-3x   "></i></a>
      <a id="left-arrow-key" onclick="left('book-list')"><i class="bi bi-arrow-right-circle fa-3x  "></i></a>
      <ul id="book-list" class="ul-book " onmouseover="drag('book-list')">
      <?php 
      while ($row_book = mysqli_fetch_assoc($result_book)){
        ?>
        <li class="item-a">
          <div class="box-book">
            <div class="top-item">
              <img src="<?php echo $row_book['img']?>" draggable="false" id="imm" alt="کتاب مهدویت" />
            </div>
            <div class="type-book">
              <span><?php echo $row_book['title']?></span>
              <span><?php echo $row_book['author']?></span>

              <a href="<?php echo $row_book['link'] ?>" id="download-book" target="_blank"> <?php echo $row_book['type']  ?></a>
            </div>
          </div>
        </li>
<?php
      }
      ?>
        <div class="more more-book">کتاب های بیشتر<span> </span></div>
      </ul>
    </div>
    </section>
      <section id="section3"  >
        <div class="titr "><h5 class="btn2-grad">صوت های مهدویت</h5></div>
        <div class="caontainer-book" id="caontainer-book">
        <a id="right-arrow-key" onclick="right('music-list')"><i class="bi bi-arrow-left-circle fa-3x"></i></a>
        <a id="left-arrow-key" onclick="left('music-list')"><i class="bi bi-arrow-right-circle fa-3x"></i></a>
        <ul id="music-list" class="ul-music" onmouseover="drag('music-list')">
        <?php
           while ($row_music = mysqli_fetch_assoc($result_music)){
             
             ?>
          <li class="item-a" >
        
            <div class=" card m-3 effect " >
              <div class="row g-0 ">
                <div class="col-md-4  ">
                  <img src="<?php echo $row_music['img'] ?>" draggable="false" class="img-fluid rounded-start  img-music" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row_music['title']  ?></h5>
                    <p class="card-text"><?php echo $row_music['descrip']  ?></p>
                    <audio controls class="music-player">
                      <source src="<?php echo  $row_music['link']  ?>" type="audio/mpeg">
                   مرورگر شما پشتیبانی نمی کند!
                  </audio>
                  </div>
                </div>
              </div>
            </div>
            </li>
          <?php 
          
        }

          ?>
            
          <div class="more more-book ">صوت های بیشتر<span> </span></div>
        </ul>
      </div>
      </section>
      </main>
   <?php
      $layout->pagefooter();
 