<?php
require("../loader.php");

$layout = new layout();
$layout->pageheader();

?>
    <header id="showcase">
      <section id="sec-1">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent" id="navbar">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">صفحه اصلی</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">آرشیو تصویری</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link " href="#" >آرشیو صوتی</a>
                </li>
                <li class="nav-item">  
                  <a class="nav-link " href="#" >کتابخانه</a>
                </li>
                
                <li class="nav-item">  
                  <a class="nav-link " href="#" >ارتباط با ما</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2 input-text" type="search" placeholder="جستجو" aria-label="Search">
                <button class="btn btn-outline-success button-effect" type="submit">جستجو</button>
              </form>
            </div>
          </div>
        </nav>
        <div class="container-scroll">
          <a href="#slider">
            <div class="scroll-down" id="scroll-down"></div>
          </a>
          <div class="showcase-content">
            <div>
              <div class="showcase_img" id="showcase_img">
                <img src="img/sallalah2.png" class="img" />
                <img src="img/abasaleh (2).png" class="img2" />
                <img src="img/almahdi2.png" class="img3" />
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>

    <section id="slider" >
      <div class="titr"><h3 class="btn2-grad">ویدیوهای مهدویت</h3></div>
     <a id="left-arrow-key" style="top: 32%;" onclick="left('ul-video')">  <i class="bi bi-arrow-right-circle fa-3x "></i></a>
     <a id="right-arrow-key" style="top: 32%;" onclick="right('ul-video')">  <i class="bi bi-arrow-left-circle fa-3x "></i></a>
      <ul id="ul-video" class="cs-hidden" onmouseover="drag('ul-video')" >
        <!--1------------------------------------>
        <li class="item-a">
          <!--box-slider--------------->
          <div class="box">
            <!--img-box---------->
            <div class="slide-img">
              <img alt="8" src="img/raefi.jpg" />
              <!--overlayer---------->
              <div class="overlay">
                <!--buy-btn------>
                <a href="#" class="download from-top">دانلود</a>
              </div>
            </div>
            <!--detail-box--------->
            <div class="detail-box">
              <!--type-------->
              <div class="type">
                <a href="#">Rabbed Cardigan</a>
                <span>Noe Arrival</span>
              </div>
              <!--price-------->
              <a href="#" class="price">$23</a>
            </div>
          </div>
        </li>
        <!--2------------------------------------>
        <li class="item-b">
          <!--box-slider--------------->
          <div class="box">
            <!--img-box---------->
            <div class="slide-img">
              <img alt="8" src="img/raefi.jpg" />
              <!--overlayer---------->
              <div class="overlay">
                <!--buy-btn------>
                <a href="#" class="download from-top">دانلود</a>
              </div>
            </div>
            <!--detail-box--------->
            <div class="detail-box">
              <!--type-------->
              <div class="type">
                <a href="#">Rabbed Cardigan</a>
                <span>Noe Arrival</span>
              </div>
              <!--price-------->
              <a href="#" class="price">$20</a>
            </div>
          </div>
        </li>
        <!--3------------------------------------>
        <li class="item-c">
          <!--box-slider--------------->
          <div class="box">
            <!--img-box---------->
            <div class="slide-img">
              <img alt="8" src="img/raefi.jpg" />
              <!--overlayer---------->
              <div class="overlay">
                <!--buy-btn------>
                <a href="#" class="download from-top">دانلود</a>
              </div>
            </div>
            <!--detail-box--------->
            <div class="detail-box">
              <!--type-------->
              <div class="type">
                <a href="#">Rabbed Cardigan</a>
                <span>Noe Arrival</span>
              </div>
              <!--price-------->
              <a href="#" class="price">$26</a>
            </div>
          </div>
        </li>
        <!--4------------------------------------>
        <li class="item-d">
          <!--box-slider--------------->
          <div class="box">
            <!--img-box---------->
            <div class="slide-img">
              <img alt="8" src="img/raefi.jpg" />
              <!--overlayer---------->
              <div class="overlay">
                <!--buy-btn------>
                <a href="#" class="download from-top">دانلود</a>
              </div>
            </div>
            <!--detail-box--------->
            <div class="detail-box">
              <!--type-------->
              <div class="type">
                <a href="#">Rabbed Cardigan</a>
                <span>Noe Arrival</span>
              </div>
              <!--price-------->
              <a href="#" class="price">$27</a>
            </div>
          </div>
        </li>
           <!--4------------------------------------>
           <li class="item-e">
            <!--box-slider--------------->
            <div class="box">
              <!--img-box---------->
              <div class="slide-img">
                <img alt="8" src="img/raefi.jpg" />
                <!--overlayer---------->
                <div class="overlay">
                  <!--buy-btn------>
                  <a href="#" class="download from-top">دانلود</a>
                </div>
              </div>
              <!--detail-box--------->
              <div class="detail-box">
                <!--type-------->
                <div class="type">
                  <a href="#">Rabbed Cardigan</a>
                  <span>Noe Arrival</span>
                </div>
                <!--price-------->
                <a href="#" class="price">$27</a>
              </div>
            </div>
          </li>
      </ul>
      <div class="more">ویدیوهای بیشتر<span> </span></div>
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
        <li class="item-a">
          <div class="box-book">
            <div class="top-item">
              <img src="img/b3.jpg" draggable="false" id="imm" alt="کتاب مهدویت" />
            </div>
            <div class="type-book">
              <span>کتاب رستاخیز</span>
              <span>نوشته : آیت الله دستغیب</span>

              <a href="#" id="download-book">دانلود</a>
            </div>
          </div>
        </li>
        <li class="item-b">
          <div class="box-book">
            <div class="top-item">
              <img src="img/b3.jpg" draggable="false" id="imm" alt="کتاب مهدویت" />
            </div>
            <div class="type-book">
              <span>کتاب رستاخیز</span>
              <span>نوشته : آیت الله دستغیب</span>

              <a href="#" id="download-book">دانلود</a>
            </div>
          </div>
        </li>
        <li class="item-c">
          <div class="box-book">
            <div class="top-item">
              <img src="img/b3.jpg" draggable="false" id="imm" alt="کتاب مهدویت" />
            </div>
            <div class="type-book">
              <span>کتاب رستاخیز</span>
              <span>نوشته : آیت الله دستغیب</span>

              <a href="#" id="download-book">دانلود</a>
            </div>
          </div>
        </li>
        <li class="item-d">
          <div class="box-book">
            <div class="top-item">
              <img src="img/b3.jpg" draggable="false" id="imm" alt="کتاب مهدویت" />
            </div>
            <div class="type-book">
              <span>کتاب رستاخیز</span>
              <span>نوشته : آیت الله دستغیب</span>

              <a href="#" id="download-book">دانلود</a>
            </div>
          </div>
        </li>
        <li class="item-e">
          <div class="box-book">
            <div class="top-item">
       
              <img src="img/b3.jpg" draggable="false" id="imm" alt="کتاب مهدویت" />
            </div>
            <div class="type-book">
              <span>کتاب رستاخیز</span>
              <span>نوشته : آیت الله دستغیب</span>

              <a href="#" id="download-book">دانلود</a>
            </div>
          </div>
        </li>
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
          
          <li class="item-a" >
           
            <div class=" card m-3 effect " >
              <div class="row g-0 ">
                <div class="col-md-4  ">
                  <img src="img/background-showcase.jpg" draggable="false" class="img-fluid rounded-start  img-music" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">سلام فرمانده</h5>
                    <p class="card-text">موسیقی پر طرفدار این روزهای کشور که درباره دهه نودی و چهارصدی ها ساخته شده  </p>
                    <audio controls class="music-player">
                    
                      <source src="img/Ali.mp3" type="audio/mpeg">
                   مرورگر شما پشتیبانی نمی کند!
                  </audio>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="item-b">
            <div class="card m-3 effect" >
              <div class="row g-0 ">
                <div class="col-md-4 ">
                  <img src="img/background-showcase.jpg" draggable="false" class="img-fluid rounded-start img-music" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">سلام فرمانده</h5>
                    <p class="card-text">موسیقی پر طرفدار این روزهای کشور که درباره دهه نودی و چهارصدی ها ساخته شده  </p>
                    <audio controls class="music-player">
                    
                      <source src="img/Ali.mp3" type="audio/mpeg">
                   مرورگر شما پشتیبانی نمی کند!
                  </audio>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="item-c">
            <div class="card m-3 effect">
              <div class="row g-0 ">
                <div class="col-md-4 ">
                  <img src="img/background-showcase.jpg" draggable="false"  class="img-fluid rounded-start img-music" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">سلام فرمانده</h5>
                    <p class="card-text">موسیقی پر طرفدار این روزهای کشور که درباره دهه نودی و چهارصدی ها ساخته شده  </p>
                    <audio controls class="music-player">
                    
                      <source src="img/Ali.mp3" type="audio/mpeg">
                   مرورگر شما پشتیبانی نمی کند!
                  </audio>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="item-d">
            <div class="card m-3 effect" >
              <div class="row g-0 ">
                <div class="col-md-4 ">
                  <img src="img/background-showcase.jpg" draggable="false"  class="img-fluid rounded-start img-music" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">سلام فرمانده</h5>
                    <p class="card-text">موسیقی پر طرفدار این روزهای کشور که درباره دهه نودی و چهارصدی ها ساخته شده  </p>
                    <audio controls class="music-player">
                    
                      <source src="img/Ali.mp3" type="audio/mpeg">
                   مرورگر شما پشتیبانی نمی کند!
                  </audio>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <div class="more more-book ">صوت های بیشتر<span> </span></div>
        </ul>
      </div>
      </section>
   <?php
      $layout->pagefooter();
 