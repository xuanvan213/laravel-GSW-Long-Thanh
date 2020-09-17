
@extends('layout.master')
     <!-- Start revolution slider -->
     @section('revolution-slider')
      <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
          <ul>

            <!-- Slide 1 -->
            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="700" data-fsmasterspeed="700">

              <!-- Main image-->
              <img src="/images/khu_do_thi.jpg" data-bgparallax="5"  alt="hình ảnh dự án Gem Sky Work Long Thành" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 7 -->
              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600;">
                  <a href="#phohoanghon" class="popup-with-zoom-anim link-arrow"> Xem chi tiết <i class="icon ion-ios-arrow-thin-right"></i>
                </a>
              </div>
            </li>

            <!-- Slide 2 -->
            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="700" data-fsmasterspeed="700">

              <!-- Main image-->
              <img src="/images/khu_do_thi2.jpg"  data-bgparallax="5" alt="hình ảnh dự án Gem Sky Work Long Thành" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 7 -->
              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600;">
                  <a href="#truongquocte" class="popup-with-zoom-anim link-arrow">Xem chi tiết <i class="icon ion-ios-arrow-thin-right"></i>
                </a>
              </div>
            </li>

            <!-- Slide 3 -->
            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="700" data-fsmasterspeed="700">

              <!-- Main image-->
              <img src="/images/khu_do_thi3.jpg"  data-bgparallax="5" alt="hình ảnh dự án Gem Sky Work Long Thành" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 7 -->
              <div class="slider-title tp-caption" 
                data-x="['left']" data-hoffset="['156']"  
                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                data-textAlign="['left']"
                data-fontsize="['18']"
                data-lineheight="['20']"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1500" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 
                data-elementdelay="0.05" style="font-weight:600; ">
                  <a href="#khuvuichoi" class="popup-with-zoom-anim link-arrow">Xem chi tiết <i class="icon ion-ios-arrow-thin-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    @endsection

      <!-- Section About -->
      @section('about')
      <section id="gioi-thieu-du-an-Gem-Sky-World" class="section section-about">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <strong class="section-subtitle">Giới Thiệu</strong>
              <h2 class="section-title section-about-title">Gem Sky World</h2>
              <p>
              Dự án Gem Sky World Long Thành là siêu đô thị thông minh lớn nhất từ trước đến nay nằm vị trí độc tôn liền kề Sân bay Quốc tế Long Thành. Chủ đầu tư và phát triển của dự án là Công ty Cổ phần Đầu tư Kinh doanh Bất động sản Hà An (Trực thuộc Công ty Cổ phần Tập đoàn Đất Xanh - Đất Xanh Group).<br>
              TỔNG THỂ DỰ ÁN KHU ĐÔ THỊ GEM SKY WORLD <br>
              Tên dự án: Khu Đô Thị Thương Mại Giải Trí Gem Sky World<br>
              • Chủ đầu tư và phát triển: Đất Xanh Group<br>
              • Vị trí: Khu dân cư Long Đức, Long Thành, Đồng Nai<br>
              • Tổng diện tích: 92.2 ha<br>
              • Quy mô dân số: 18-18.8 ngàn<br>
              • Mật độ xây dựng toàn khu: <=50%<br>
              • Tầng cao xây dựng:<br>
                - Nhà ở riêng lẻ: 2-4 tầng<br>
                - Nhà chung cư: 5-6 tầng<br>
                - Công trình dịch vụ: <=3 tầng<br>
              • Số lượng sản phẩm của Dự án Gem SkyWorld là 4.022, bao gồm:<br>
                - Đất nền: Nhà phố liên kế, Biệt thự song lập, Biệt thự đơn lập<br>
                - Nhà phố xây sẵn: Nhà phố liên kế, Shophouse<br>
                + Giá bán: LIÊN HỆ HOTLINE CÓ GIÁ TỐT.<br>
                + Ưu đãi: LIÊN HỆ HOTLINE CÓ GIÁ TỐT..<br>
              Hotline chủ đầu tư: 0917 99 86 88<br>
              Chuyên viên tư vấn đầu tư bất động sản - gia tăng giá trị bền vững<br>
              </p>
            </div>
            <div class="col-md-4">
              <!-- <div class="dots-image">
                <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="about-img img-responsive" src="/images/phoi_canh.jpg">
                <div class="dots"></div>
              </div> -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="dots-image">
                <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="about-img img-responsive" src="/images/phoi_canh.jpg">
                <div class="dots"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection

      <!-- Section info -->
      @section('utilities')
      <section id="tien-ich-du-an-Gem-Sky-World" class="section bg-dots">       
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="section-info">
                <div class="title-hr wow fadeInLeft"></div>
                <h4>Tiện ích của dự án</h4>
              </div>
            </div>
            <div class="col-md-10">
              <div class="row-team row">
                <div class="col-service col-sm-6 col-lg-6 wow fadeInUp">
                  <div class="team-profile">
                    <a href="#tien_ich1" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/tien_ich_01.png"> </a>                                   
                  </div>
                </div>
                <div class="col-service col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="team-profile">
                    <a href="#tien_ich2" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/tien_ich_02.png"> </a>
                  </div>
                </div>
                <div class="col-service col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                  <div class="team-profile">
                    <a href="#tien_ich3" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/tien_ich_03.png"> </a>
                  </div>
                </div>
                <div class="col-service col-sm-6 col-lg-6 wow fadeInUp">
                  <div class="team-profile">
                    <a href="#tien_ich4" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/tien_ich_04.png"> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tien_ich1" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/tien_ich_01.png"></div>
          </div>
        </div>
        <div id="tien_ich2" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/tien_ich_02.png"></div>
          </div>
        </div>
        <div id="tien_ich3" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/tien_ich_03.png"></div>
          </div>
        </div>
        <div id="tien_ich4" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/tien_ich_04.png"></div>
          </div>
        </div>
      </section>
      @endsection

      <!-- Section Projects -->
      @section('projects')
      <section id="thu-vien-du-an-Gem-Sky-World" class="section-projects section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="filter-content">
                <ul class="filter-carousel filter pull-lg-left js-filter-carousel">
                  <li class="active"><h2 data-filter="*">THƯ VIỆN</h2></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

         <!-- tiện ích 5 sao -->
        <div class="project-carousel owl-carousel">         
          <!-- Project Carousel Item 1 -->
          <a href="#congvien" class="project-item item-shadow popup-with-zoom-anim tien-ich" >
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/cong_vien.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Công viên<br>Sky Park</h3>
              </div>
            </div>
          </a>
          
          <!-- Project Carousel Item 2 -->
          <a href="#khucongvien" class="project-item item-shadow popup-with-zoom-anim tien-ich" >
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/cong_vien_night.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Khu công viên<br>Sky Park<br>tại nội khu dự án</h3>
              </div>
            </div>
          </a>
          
          <!-- Project Carousel Item 3 -->
          <a href="#quangtruong" class="project-item item-shadow popup-with-zoom-anim tien-ich">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/quang_truong.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Quảng trường <br>Sky Park <br>tại nội khu dự án</h3>
              </div>
            </div>
          </a>

          <!-- Project Carousel Item 4 -->
          <a href="#khuvuichoi" class="project-item item-shadow popup-with-zoom-anim tien-ich">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/khu_tre_em.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Khu vui chơi <br>trẻ em</h3>
              </div>
            </div>
          </a>

          <!-- Project Carousel Item 5 -->
          <a href="#phobinhminh" class="project-item item-shadow popup-with-zoom-anim tien-ich">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/pho_binh_minh.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Phố Bình Minh</h3>
              </div>
            </div>
          </a>

          <!-- Project Carousel Item 6 -->
          <a href="#phohoanghon" class="project-item item-shadow popup-with-zoom-anim tien-ich">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/pho_hoang_hon.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Phố Hoàng Hôn</h3>
              </div>
            </div>
          </a>

          <!-- Project Carousel Item 7 -->
          <a href="#truongquocte" class="project-item item-shadow popup-with-zoom-anim tien-ich">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/truong_hoc.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Trường Quốc Tế</h3>
              </div>
            </div>
          </a>

          <!-- Project Carousel Item 8 -->
          <a href="#duquay" class="project-item item-shadow popup-with-zoom-anim tien-ich">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/du_quay_khong_lo.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Đu Quay<br>Khổng Lồ</h3>
              </div>
            </div>
          </a>
          
          <a href="#tienich-nk" class="project-item item-shadow popup-with-zoom-anim tien-ich" >
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/tien_ich_ngoai_khu.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Tiện Ích<br>Ngoại Khu</h3>
              </div>
            </div>
          </a>

          <!-- Thiết kế mặt bằng -->
          <!-- mặt bằng tong-the -->
          <a href="#mb-tong-the" class="project-item item-shadow popup-with-zoom-anim building" >
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/mb_tong_the.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Mặt bằng Tổng thể <br> Khu đô thị<br> Gem Sky World</h3>
              </div>
            </div>
          </a>
          
          <!-- mặt bằng Phan khu  -->
          <a href="#mb-phan-khu" class="project-item item-shadow popup-with-zoom-anim building" >
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/mb_phan_khu.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Mặt bằng Phân khu<br> Garnet Town & Pearl Town</h3>
              </div>
            </div>
          </a>
          
          <!-- mặt bằng Item 3 -->
          <a href="#truc-chinh-kdt" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/truc_chinh_khu_do_thi.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Trục chính Dự án <br>Khu đô thị <br>Gem SkyWorld </h3>
              </div>
            </div>
          </a>

          <!-- mặt bằng Item 4 -->
          <a href="#shophouse" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/nha_pho_thuong_mai.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Nhà phố Thương mại <br>Shophouse Gem Sky World</h3>
              </div>
            </div>
          </a>

          <!-- Pmặt bằng Item 5 -->
          <a href="#khu-nha-1-mai" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/nha_pho_1_mai.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Khu Nhà phố liên kế <br>1 mái</h3>
              </div>
            </div>
          </a>

          <!-- mặt bằng Item 6 -->
          <a href="#khu-nha-2-mai" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/nha_pho_lien_ke_2_mai.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Khu Nhà phố liên kế <br>2 mái</h3>
              </div>
            </div>
          </a>

          <!-- mặt bằng Item 7 -->
          <a href="#nha-pho-lien-ke" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/nha-pho-lien-ke-gem-skyworld.jpg">
            <div class="project-hover">
              <div class="project-hover-content">
                <h3 class="project-title">Phối cảnh Nhà phố <br>liên kê</h3>
              </div>
            </div>
          </a>

          <!-- mặt bằng Item 8 -->
          <a href="#pc-shophouse" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/khu-shophouse-thuong-mai-gem-sky-world.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Phối cảnh Nhà phố <br>thương mại<br> Shophouse</h3>
                </div>
              </div>
          </a>
           <!-- khu biet thu song lap -->
           <a href="#kbt-song-lap" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/khu-biet-thu-song-lap-gem-sky-world.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Phối cảnh Khu Biệt thự<br> Song lập</h3>
                </div>
              </div>
          </a>
          <!-- khu biet thu don lap -->
          <a href="#kbt-song-lap" class="project-item item-shadow popup-with-zoom-anim building">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" class="img-responsive" src="/images/khu-biet-thu-don-lap-gem-sky-world.jpg">
              <div class="project-hover">
                <div class="project-hover-content">
                  <h3 class="project-title">Phối cảnh Khu Biệt thự<br> Đơn lập</h3>
                </div>
              </div>
          </a>
        </div>

        <!-- Project Modal Công Viên -->
        <div id="congvien" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/cong_vien.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Công viên Sky Park</h3>
              <p class="project-detail-text">việc bố trí các tiện ích nội khu khoa học, phát triển mạnh về mảng cây xanh để cung cấp lượg không khí dồi dào cũng được chủ đầu tư đặc biệt quan tâm. Dự án Gem Sky World mang đến nguồn không khí trong lành, không khói bụi và lối sống hoà nhập với thiên nhiên.</p>
            </div>
          </div>
        </div>

        <!-- Project Modal Khu công viên -->
        <div id="khucongvien" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/khu_cong_vien.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Khu công viên Sky Park tại nội khu dự án</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project Modal quãng trường -->
        <div id="quangtruong" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/quang_truong.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Quảng trường Sky Park tại nội khu dự án</h3>
              <p class="project-detail-text"></p>
              <!-- <ul class="project-detail-list text-white">
                <li>
                  <span class="left">Clients:</span>
                  <span class="right">Ethan Hunt, John Doe</span>
                </li>
                <li>
                  <span class="left">Completion:</span>
                  <span class="right">February 5th, 2019</span>
                </li>
                <li>
                  <span class="left">Project Type:</span>
                  <span class="right">Villa, Residence</span>
                </li>
                <li>
                  <span class="left">Architects:</span>
                  <span class="right">Logan Cee, Paul</span>
                </li>
                <li>
                  <span class="left">Budget:</span>
                  <span class="right">$1 200 000</span>
                </li>
              </ul> -->
            </div>
          </div>
        </div>

        <!-- Project Modal khu vui chơi -->
        <div id="khuvuichoi" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/khu_tre_em.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Khu vui chơi trẻ em</h3>
              <p class="project-detail-text"></p>
              
            </div>
          </div>
        </div>

        <!-- Project Modal phố bình minh -->
        <div id="phobinhminh" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/pho_binh_minh.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Phố Bình Minh</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project Modal phố hoàng hôn -->
        <div id="phohoanghon" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/pho_hoang_hon.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Phố Hoàng Hôn</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project Modal Trường quốc tế -->
        <div id="truongquocte" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/truong_hoc.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Trường học</h3>
              <p class="project-detail-text">              
            </div>
          </div>
        </div>

        <!-- Project Modal Đu Quay khổng lồ -->
        <div id="duquay" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/du_quay_khong_lo.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Đu quay khổng lồ</h3>
              <p class="project-detail-text"></p>             
            </div>
          </div>
        </div>

        <!-- Project Modal tiện ích ngoại khu liên kết -->
        <div id="tienich-nk" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/tien_ich_ngoai_khu.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Tiện ích liên kết vùng Dự án Gem Sky World</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project Modal mặt bằng tổng thể -->
        <div id="mb-tong-the" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/mb_tong_the.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Mặt bằng Tổng thể toàn Khu đô thị Gem Sky World</h3>
              <p class="project-detail-text">Khu vực xây dựng được xây thành 6 phân khu chính bao gồm</p>
              <ul class="project-detail-list text-white">
                <li>
                 Khu công viên xanh là nơi để thư giãn sau những chuỗi thời gian làm việc vất vả, được bao phủ bởi nhiều cây cối để cung cấp lượng oxy dồi dào cho người dân
                </li>
                <li>
                  Khu phố thương mại với các gian hàng đa dạng sản phẩm, là nơi diễn ra hoạt động mua sắm, shopping, trải nghiệm dịch vụ hàng ngày
                </li>
                <li>
                  Khu nhà ở liền kề dành cho các hộ dân sinh hoạt
                </li>
                <li>
                Khu biệt thự với thiết kế sân vườn thoáng đãng và một phong cách sống đậm chất thượng lưu
                </li>
                <li>
                  Khu thương mại – dịch vụ đi kèm các công trình hạ tầng kỹ thuật
                </li>
                <li>
                  Khu dân cư với sức chứa lên đến hơn 18.000 người dân, tổng số sản phẩm cung ứng ra thị trường lên đến 4.000 căn hộ.               
                </li>
              </ul>
              <div class="project-detail-meta">
                <span class="left text-white hidden-xs pull-sm-left">Share:</span>
                <div class="social-list pull-sm-right">
                  <a href="" class="icon ion-social-twitter"></a>
                  <a href="" class="icon ion-social-facebook"></a>
                  <a href="" class="icon ion-social-googleplus"></a>
                  <a href="" class="icon ion-social-linkedin"></a>
                  <a href="" class="icon ion-social-dribbble-outline"></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project modal mặt bằng phân khu -->
        <div id="mb-phan-khu" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/mb_phan_khu.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Mặt bằng Phân khu Garnet Town & Pearl Town dự án Gem Sky World</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project modal trục chính khu đô thị -->
        <div id="truc-chinh-kdt" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/truc_chinh_khu_do_thi.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Trục chính Dự án Khu đô thị Gem SkyWorld Long Đức Long Thành Đồng Nai</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project modal shophouse-->
        <div id="shophouse" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_pho_thuong_mai2.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Nhà phố Thương mại Shophouse Gem Sky World Đồng Nai</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project modal khu nhà 1 mái-->
        <div id="khu-nha-1-mai" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_pho_1_mai.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Phối cảnh Khu Nhà phố liên kế 1 mái tại dự án Gem Sky World</h3>
              <p class="project-detail-text"></p>/
            </div>
          </div>
        </div>

        <!-- Project modal khu nhà 2 mái-->
        <div id="khu-nha-2-mai" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_pho_lien_ke_2_mai.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Nhà phố liên kế 2 mái Gem Sky World Long Thành</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project modal nhà phố liên kế-->
        <div id="nha-pho-lien-ke" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha-pho-lien-ke-gem-skyworld.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Phối cảnh Nhà phố liên kế</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project modal phối cảnh shophouse-->
        <div id="pc-shophouse" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/khu-shophouse-thuong-mai-gem-sky-world.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Phối cảnh Nhà phố thương mại Shophouse tại dự án</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project modal khu biệt thự song lập -->
        <div id="kbt-song-lap" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/khu-biet-thu-song-lap-gem-sky-world.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Phối cảnh Khu Biệt thự Song lập Gem Sky World</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>

        <!-- Project modal khu biệt thự đơn lập -->
        <div id="kbt-don-lap" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-8"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/khu-biet-thu-don-lap-gem-sky-world.jpg"></div>
            <div class="col-lg-4">
              <h3 class="project-detail-title">Phối cảnh Khu Biệt thự Đơn lập Gem Sky World</h3>
              <p class="project-detail-text"></p>
            </div>
          </div>
        </div>


      </section>
      @endsection

      @section('house-template')
      <section id="can-ho-mau-du-an-Gem-Sky-World" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr wow fadeInLeft"></div>
                
                <h4>Căn Hộ Mẫu</h4>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4 wow fadeIn">
                  <div class="team-profile">
                    <a href="#nha-mau1" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/nha_mau_01.jpg"> </a>                                   
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="team-profile">
                    <a href="#nha-mau2" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/nha_mau_02.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.6s">
                  <div class="team-profile">
                    <a href="#nha-mau3" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/nha_mau_03.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn">
                  <div class="team-profile">
                    <a href="#nha-mau4" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/nha_mau_04.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="team-profile">
                    <a href="#nha-mau5" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/nha_mau_05.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="team-profile">
                    <a href="#nha-mau6" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/nha_mau_06.jpg"> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="nha-mau1" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_mau_01.jpg"></div>
          </div>
        </div>
        <div id="nha-mau2" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_mau_02.jpg"></div>
          </div>
        </div>
        <div id="nha-mau3" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_mau_03.jpg"></div>
          </div>
        </div>
        <div id="nha-mau4" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_mau_04.jpg"></div>
          </div>
        </div>
        <div id="nha-mau5" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_mau_05.jpg"></div>
          </div>
        </div>
        <div id="nha-mau6" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/nha_mau_06.jpg"></div>
          </div>
        </div>
      </section>
      @endsection

      <!-- Section Team -->
      @section('status')
      <section id="tien-do-du-an-Gem-Sky-World" class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="section-info">
                <div class="title-hr wow fadeInLeft"></div>
                <h4>TIẾN ĐỘ THI CÔNG DỰ ÁN</h4>
              </div>
            </div>
            <div class="col-md-9">
              <div class="row-team row">
                <div class="col-team col-xs-6 col-md-4 wow fadeIn">
                  <div class="team-profile">
                    <a href="#tien-do1" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/td_01.jpg"> </a>                                   
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="team-profile">
                    <a href="#tien-do2" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/td_02.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.6s">
                  <div class="team-profile">
                    <a href="#tien-do3" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/td_03.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn">
                  <div class="team-profile">
                    <a href="#tien-do4" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/td_04.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="team-profile">
                    <a href="#tien-do5" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/td_05.jpg"> </a>
                  </div>
                </div>
                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                  <div class="team-profile">
                    <a href="#tien-do6" class="project-item item-shadow popup-with-zoom-anim"><img alt="hình ảnh dự án Gem Sky Work Long Thành" src="/images/td_06.jpg"> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tien-do1" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/td_01.jpg"></div>
          </div>
        </div>
        <div id="tien-do2" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/td_02.jpg"></div>
          </div>
        </div>
        <div id="tien-do3" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/td_03.jpg"></div>
          </div>
        </div>
        <div id="tien-do4" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/td_04.jpg"></div>
          </div>
        </div>
        <div id="tien-do5" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/td_05.jpg"></div>
          </div>
        </div>
        <div id="tien-do6" class="container zoom-anim-dialog mfp-hide">
          <div class="row">
            <div class="col-lg-12"><img alt="hình ảnh dự án Gem Sky Work Long Thành" class="project-detail-img" src="/images/td_06.jpg"></div>
          </div>
        </div>
      </section>
      @endsection

      
      <!-- Section Contacts -->
      @section('contacts')
      <section id="lien-he-du-an-Gem-Sky-World">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0037039353415!2d106.95882521488537!3d10.811027592298023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317511d3f6a01e2f%3A0x3d7cc27666558427!2sGem%20Sky%20World!5e0!3m2!1svi!2s!4v1599757125752!5m2!1svi!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="section bg-dots">
          <section>
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr wow fadeInLeft"></div>
                    <h4>Liên Hệ với chúng tôi</h4>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="row-contact row">
                    <div class="col-contact col-lg-6">
                      <h3 class="contact-title contact-top">Tp. Hồ Chí Minh,  Việt Nam</h3>
                      <p class="contact-address text-black"><strong>41 đường 20, Phường Hiệp Bình Chánh, Quận Thủ Đức, Tp. Hồ Chí Minh, Việt Nam</strong></p>
                      <p class="contact-row"><strong class="text-dark">Email: info@anzbds.com</strong></p>
                    </div>
                    <div class="col-contact col-lg-6">
                      <p class="contact-top"><strong class="text-dark">Hotline</strong></p>
                      <p class="phone-lg text-dark">0917 99 86 88</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="section-message">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <div class="section-info">
                    <div class="title-hr wow fadeInLeft"></div>
                    <h4>Form liên hệ</h4>
                  </div>
                </div>
                <div class="col-md-9">
                  <form class="js-form">
                    <div class="row">
                      <div class="form-group col-sm-6 col-lg-4">
                        <input class="input-gray" type="text" name="name" required placeholder="Họ Tên*">
                      </div>
                      <div class="form-group col-sm-6 col-lg-4">
                        <input class="input-gray" type="email" name="email" placeholder="Email">
                      </div>
                      <div class="form-group col-sm-12 col-lg-4">
                        <input class="input-gray" type="text" name="subject" placeholder="Tiêu Đề (Không bắt buộc)">
                      </div>
                      <div class="form-group col-sm-12">
                        <textarea class="input-gray" name="message"  required  placeholder="Tin Nhắn*"></textarea>
                      </div>
                      <div class="col-sm-12"><button type="submit" class="btn-upper btn-yellow btn">Gửi</button></div>
                    </div>
                    <div class="success-message"><i class="fa fa-check text-primary"></i> Cảm ơn quý khách đã liên hệ với chúng tôi. Chúng tôi sẽ liên lạc với quý khách trong thời gian sớm nhất!</div>
                    <div class="error-message">Xin lỗi, tin nhắn chưa được gửi đi!</div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section> 
      @endsection
