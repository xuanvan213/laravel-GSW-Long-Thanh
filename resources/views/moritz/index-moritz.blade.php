@extends('layout.master-moritz')

        @section('hero-section')
        <div class="hero-section background-is-dark">
            <div class="wrapper">
                <div class="hero-title">
                    <div class="container">
                        <h1 class="animate">Hãy Sẵn Sàng.<br>Chúng Tôi Đang Hoàn Thành</h1>
                        <form class="animate" action="{{ url('subcribes')}}" id="form-hero" method="post">
                        @csrf
                            <label for="form-hero-email">Nhập email của bạn để biết tin tức mới nhất</label>
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="form-hero-email" name="emailSubcribes" placeholder="Email" required="">
                                        
                                        <input type="submit" classe="btn btn-subcribes" style="color: black; padding: 3px;" value="subcribes">
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </form>
                        <!--end form-hero-->
                    </div>
                    <!--end container-->
                </div>
                <!--end hero-title-->
            </div>
            <!--end wrapper-->
            <div class="owl-carousel" data-owl-dots="0" data-owl-nav="1" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="/images/cam_04_day.jpg" alt="hình ảnh dự án moritz"></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="/images/cam11_night_blue.jpg" alt="hình ảnh dự án moritz"></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="/images/cam_08_day.jpg" alt="hình ảnh dự án moritz"></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="/images/cam_02_day.jpg" alt="hình ảnh dự án moritz"></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="/images/cam_10_day.jpg" alt="hình ảnh dự án moritz"></div>
                </div>
                <div class="hero-slide">
                    <div class="bg-transfer"><img src="/images/cam12_day.jpg" alt="hình ảnh dự án moritz"></div>
                </div>
            </div>
            <!--end owl-carousel-->
        </div>
        @endsection
        <!--end hero-section -->
    <!--end page-header-->

    @section('page-content')
    <div id="page-content">

        <div class="block background-is-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter left and move 20px">
                            <i class="icon"><img class="lazy" data-src="/images/icon-white-shield.png" alt="hình ảnh dự án moritz"></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Cuộc sống hiện đại & an toàn</h3>
                                <p>căn hộ ST.Moritz được trang bị như một khu văn phòng chuyên nghiệp với lối vào riêng, sảnh lễ tân, hệ thống thang máy dành riêng cho khách văn phòng…Vấn đề an ninh an toàn cho cộng đồng dân cư sinh sống luôn được chủ đầu tư ST.Moritz Đất Xanh đề cao, khi trạng bị hệ thống kiểm soát an ninh 24/24 và các dịch vụ quản lý tòa nhà chuyên nghiệp…
                                </p>
                                <a href="https://anzbds.com/du-an/2/st-moritz" class="btn btn-default btn-rounded arrow">Đọc thêm</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter bottom and move 20px">
                            <i class="icon"><img class="lazy" data-src="/images/icon-white-pin.png" alt="hình ảnh dự án moritz"></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Vị trí yên tĩnh</h3>
                                <p>Chung cư ST Moritztọa lạc tại khu dân cư hiện hữu, sầm uất, văn minh an toàn, tách biệt với những ồn ào bên ngoài, giúp cho gia đình bạn có được sự riêng tư, đồng thời cùng sở hữu những tiện ích tuyệt vời tại đây. Hứa hẹn sẽ là một môi trường đáng sống , đáng mơ ước cho gia đình bạn.
                                </p>
                                <a href="https://anzbds.com/du-an/2/st-moritz" class="btn btn-default btn-rounded arrow">Đọc thêm</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="feature has-icon" data-scroll-reveal="enter right and move 20px">
                            <i class="icon"><img class="lazy" data-src="/images/icon-white-wallet.png" alt="hình ảnh dự án moritz"></i>
                            <!--end icon-->
                            <div class="description">
                                <h3>Giá khởi điểm tuyệt vời</h3>
                                <p>Giá bán: 54 Triệu VND/M2
                                </p>
                                <a href="https://anzbds.com/du-an/2/st-moritz" class="btn btn-default btn-rounded arrow">Đọc thêm</a>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end feature-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="bg-transfer opacity-15">
                    <img class="lazy" data-src="/images/sanh_can_ho1.jpg" alt="sảnh căn hộ dự án moritz">
                </div>
                <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->

        <div class="block about" id="gioi-thieu-du-an-moritz">
            <div class="container">
                <h2>GIỚI THIỆU DỰ ÁN </h2>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h2>DỰ ÁN CĂN HỘ ST MORITZ PHẠM VĂN ĐỒNG THỦ ĐỨC</h2>
                        <p>ST Moritz (Saint Moritz) là dự án căn hộ chung cư tại Mặt tiền đường Phạm Văn Đồng, Phường Hiệp Bình Chánh, Quận Thủ Đức, Tp.HCM. Căn hộ ST.Moritz do Tập đoàn Đất Xanh Group làm chủ đầu tư sau nhiều thành công với chuỗi dự án Opal như: Opal Riverside, Opal Garden, Opal Skyview, Opal City, Opal Boulevard. Dự án ST Moritz với quy mô  3326 m2 với 1 block căn hộ cao 21 tầng với căn hộ chung cư & Officetel.
                        </p><br>
                           Dự án ST Moritz –  Biểu tượng thượng lưu trên đại lộ Phạm Văn Đồng.<br>
                            ST Moritz – Dự án khu căn hộ và văn phòng hạng sang với pháp lý hoàn chỉnh.<br>
                            Dự án văn phòng & căn hộ khách sạng 5 sao đầu tiên trên đại lộ Phạm Văn Đồng.<br>
                            Dự án căn hộ & văn phòng hạng sang đầu tiên trên đại lộ Phạm Văn Đồng.<br>
                            Tên dự án: ST.Moritz.<br>
                            Tên cũ: Opal SkyView.<br>
                            Vị trí dự án: Mặt tiền Phạm Văn Đồng, P. Hiệp Bình Chánh, Q. Thủ Đức, Tp.HCM.<br>
                            Chủ đầu tư: Đất Xanh Group.<br>
                            Nhà thầu chính: Công Ty Cổ Phần Xây Dựng Phước Thành.<br>
                            Tư vấn giám sát: Công Ty TNHH DV DT Và XD Quốc Tế ICIC.<br>
                            Tư vấn thiết kế: Công ty Cổ phần Tư Vấn Xây Dựng Ánh Sáng Phương Nam.<br>
                            Tư vấn thẩm tra: Công Ty CP TV Thiết Kế Công Nghiệp Và Dân Dụng IDCO.<br>
                            Đơn vị thẩm định: Cục Quản Lý Hoạt Động Xây Dựng – Bộ Xây Dựng.<br>
                            Quy mô dự án: 2,400.6 m².<br>
                            Tổng Diện tích Sàn xây dựng: 22,328.37 m².<br>
                            Tổng chiều cao: 73,8m.<br>
                            Mật độ xây dựng: 43,7% (khối đế) và 42% (khối tháp).<br>
                            Sản phẩm: Căn hộ 2 phòng ngủ, căn hộ 3 phòng ngủ và Officetel & Shophouse.<br>
                            Số block: 1 block chung cư.<br>
                            Số tầng: 21 tầng nổi & 2 tầng hầm.<br>
                            Tổng số lượng căn hộ: 170 căn (4 căn Shophouse – 63 căn Officetel – 103 căn hộ).<br>
                            Tiện ích nội khu: Hồ bơi Skyview, Khu công viên nội khu, Phòng gym & Café sân vườn, Camera an ninh, Hệ thống thẻ từ căn hộ, Hệ thống Video Call,..<br>
                            Khởi công ngày: 29/02/2020.<br>
                            Ngày hoàn thành: 20/08/2021.<br>
                            Pháp lý dự án: Giấy phép xây dựng số 21/GPXD  do sở xây dựng cấp ngày 25/02/2020.<br>
                        <!--end ul-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="row project-status">
                    <div class="col-md-3 col-sm-3">
                        <div class="stage completed" data-scroll-reveal="enter left and move 20px">
                            <div class="icon">
                                <i class="icon_check"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>1. Giai đoạn</h3>
                                <h2>Lập kế hoạch</h2>
                                <figure>Đã hoàn thành</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage completed" data-scroll-reveal="enter left and move 20px after 0.2s">
                            <div class="icon">
                                <i class="icon_check"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>2. Giai đoạn</h3>
                                <h2>Xây dựng</h2>
                                <figure>Trong tiến trình</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage in-progress" data-scroll-reveal="enter left and move 20px after 0.4s">
                            <div class="icon">
                                <i class="icon_hourglass"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>3. Giai đoạn</h3>
                                <h2>Hoàn thành công việc</h2>
                                <figure>Trong tiến trình</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="stage not-completed" data-scroll-reveal="enter left and move 20px after 0.6s">
                            <div class="icon">
                                <i class="icon_close"></i>
                            </div>
                            <!--end icon-->
                            <div class="description">
                                <h3>4. Giai đoạn</h3>
                                <h2>Dự án đã hoàn thành</h2>
                                <figure>Chưa hoàn thành</figure>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end stage-->
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <div class="detail left-align">
                    <div class="title">
                        <h3 class="framed">Sảnh Căn Hộ</h3>
                    </div>
                    <!--end title-->
                    <div class="row ">
                        <div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter left and move 20px after">
                                <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img class="lazy" data-src="/images/sanh_can_ho1.jpg" alt="sảnh căn hộ dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_can_ho2.jpg" alt="sảnh căn hộ dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_can_ho3.jpg" alt="sảnh căn hộ dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_can_ho4.jpg" alt="sảnh căn hộ dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_can_ho5.jpg" alt="sảnh căn hộ dự án moritz">
                                </div>
                            </div>
                            <!--end gallery-->
                        </div>
                        <!--end col-md-7-->
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter right and move 20px">
                                <h3>Các chức năng căn hộ</h3>
                                <ul>
                                    <li>Phòng khách</li>
                                    <li>Phòng ngủ</li>
                                    <li>Gian bếp</li>
                                    <li>Phòng ăn</li>
                                    <li>Khu vực sân phơi và lô gia</li>
                                    <li>Một số căn hộ được thiết kế góc học tập hoặc phòng đọc sách đảm bảo không gian riêng biệt.</li>
                                </ul>
                                <h3>vật liệu xây dựng cao cấp</h3>
                                <ul>
                                    <li>Gạch Granite nhân tạo 60×60</li>
                                    <li>Sàn gỗ</li>
                                    <li>Cửa gỗ chống cháy</li>
                                    <li>Thiết bị vệ sinh cao cấp của các thương hiệu Toto, American Standard, Johnson Suisse hoặc thương hiệu khác tương đương.</li>
                                </ul>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-5-->
                    </div>
                    <!--end row-->
                </div>
                <!--end detail-->
                <div class="detail right-align">
                    <div class="title">
                        <h3 class="framed">Sảnh Văn Phòng</h3>
                    </div>
                    <!--end title-->
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter left and move 20px after">
                                <h4>Tiện ích nội khu dự án ST Moritz</h4>
                                <p>Đặc biệt, mỗi căn hộ đều được trang bị hệ thống khóa từ thông minh, hệ thống liên lạc nội bộ – intercom giúp đảm bảo an ninh tuyệt đối, giúp cư dân an tâm sinh sống và làm việc tại đây.
                                Đối với căn hộ officetel ST.Moritz có diện tích nhỏ trung bình từ 43 – 56 m2 nhằm tối ưu hóa công năng và diện tích sử dụng. Sự đa năng của mô hình căn hộ văn phòng đảm bảo mang lại lợi ích kinh tế cho chủ nhân sở hữu, đồng thời tạo điều kiện để người làm việc phát huy tối đa năng suất và gia tăng thời gian làm việc.
                                </p>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-5-->
                        <div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter right and move 20px">
                                <div class="owl-carousel one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img class="lazy" data-src="/images/sanh_van_phong1.jpg" alt="sảnh văn phòng dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong2.jpg" alt="sảnh văn phòng dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong3.jpg" alt="sảnh văn phòng dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong4.jpg" alt="sảnh văn phòng dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong5.jpg" alt="sảnh văn phòng dự án moritz">
                                </div>
                            </div>
                            <!--end gallery-->
                        </div>
                        <!--end col-md-7-->
                    </div>
                    <!--end row-->
                </div>
                <!--end detail-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block" id="hinh-anh-du-an-moritz">
            <div class="container">
                <h2>Thư Viện.</h2>
            </div>
            <div class="owl-carousel big-gallery" data-owl-items="3" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-center="1" data-owl-loop="1" data-owl-nav-container="#big-gallery-nav">
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/cam12_day.jpg" alt="hình ảnh dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Tòa Nhà</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/cam_02_day.jpg" alt="hình ảnh dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Tòa Nhà</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/cam_04_day.jpg" alt="hình ảnh dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Tòa Nhà</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/cam_08_day.jpg" alt="hình ảnh dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Tòa Nhà</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/san_vuon_camera_011.jpg" alt="sân vườn dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Sân Vườn</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/san_vuon_camera014.jpg" alt="sân vườn dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Sân Vườn</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/san_vuon_camera013.jpg" alt="sân vườn dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Sân Vườn</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/san_vuon_camera010.jpg" alt="sân vườn dự án moritz">
                        <div class="description">
                            <h3 class="framed">View Sân Vườn</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_3phongngu.jpg" alt="phòng ngủ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Mặt Bằng 3 phòng ngủ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_3phongngu_2.jpg" alt="phòng ngủ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Mặt Bằng 3 phòng ngủ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_3phongngu_3.jpg" alt="phòng ngủ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Mặt bằng 3 phòng ngủ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_3phongngu_4.jpg" alt="mặt bằng 3 phòng ngủ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Mặt bằng 3 phòng ngủ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_2phongngu_1.jpg" alt="mặt bằng 2 phòng ngủ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Mặt Bằng 2 phòng ngủ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_2phongngu_2.jpg" alt="mặt bằng 2 phòng ngủ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Mặt Bằng 2 phòng ngủ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_2phongngu_3.jpg" alt="sảnh căn hộ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Sảnh căn hộ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
                <div class="slide">
                    <div class="container">
                        <img class="lazy" data-src="/images/matbang_2phongngu_4.jpg" alt="sảnh căn hộ dự án moritz">
                        <div class="description">
                            <h3 class="framed">Sảnh căn hộ</h3>
                        </div>
                    </div>
                    <!--end container-->
                </div>
                <!--end slide-->
            </div>
            <!--end big-gallery-->
            <div class="container">
                <div class="owl-nav-wrapper">
                    <div class="owl-nav" id="big-gallery-nav"></div>
                </div>
                <!--end owl-nav-wrapper-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block" id="gia-du-an-moritz">
            <div class="container">
                <h2>Giá Bán</h2>
                <div class="row">
                    <div class="pricing-boxes">
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box description">
                                <h3>Chọn Căn Hộ Của Bạn</h3>
                                <div class="price">Giá Mới</div>
                                <div class="values">
                                    <figure>Diện tích xây dựng</figure>
                                    <figure>Phòng ngủ Master</figure>
                                    <figure>Phòng ngủ con</figure>
                                    <figure>Nơi Đỗ Xe</figure>
                                    <figure>Không gian chung</figure>
                                </div>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box framed" data-scroll-reveal="enter bottom and move 20px">
                                <h3>Căn Hộ 2 Phòng Ngủ</h3>
                                <div class="price">54 Triệu VND/m<sup>2</sup></div>
                                <div class="values">
                                    <figure>66.28m<sup>2</sup> - 75.33m<sup>2</sup></figure>
                                    <figure>15.52m<sup>2</sup></figure>
                                    <figure>11.52m<sup>2</sup></figure>
                                    <figure class="available"><i class="icon_check"></i></figure>
                                    <figure>35.29m<sup>2</sup></figure>
                                </div>
                                <a href="#" class="btn btn-rounded btn-framed btn-light-frame btn-primary" data-toggle="modal" data-target="#gia-ban-can-ho-2-phong-ngu-moritz">Chi tiết căn hộ</a>
                                <div class="price-box-footer">
                                    <a href="#lien-he-du-an-moritz" class="btn btn-rounded btn-primary">Liên Hệ</a>
                                </div>
                            </div>
                            <!--end price-box-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box framed promoted" data-scroll-reveal="enter bottom and move 20px after 0.2s">
                                <div class="promotion-title"><span>Được ưa chuộng</span></div>
                                <h3>Căn Hộ 3 Phòng Ngủ</h3>
                                <div class="price">54 Triệu VND/m<sup>2</sup></div>
                                <div class="values">
                                    <figure>108.23m<sup>2</sup> - 137.0m<sup>2</sup></figure>
                                    <figure>22m<sup>2</sup></figure>
                                    <figure>11.51m<sup>2</sup></figure>
                                    <figure class="available"><i class="icon_check"></i></figure>
                                    <figure>58.45m<sup>2</sup></figure>
                                </div>
                                <a href="#" class="btn btn-rounded btn-framed btn-light-frame btn-primary" data-toggle="modal" data-target="#gia-ban-can-ho-3-phong-ngu-moritz">Chi tiết căn hộ</a>
                                <div class="price-box-footer">
                                    <a href="#lien-he-du-an-moritz" class="btn btn-rounded btn-primary">Liên Hệ</a>
                                </div>
                            </div>
                            <!--end price-box-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="price-box framed" data-scroll-reveal="enter bottom and move 20px after 0.4s">
                                <h3>Văn Phòng</h3> <br>
                                <div class="price">54 Triệu VND/m<sup>2</sup></div>
                                <div class="values">
                                    <figure>43m<sup>2</sup> - 56m<sup>2</sup></figure>
                                    <figure>0m<sup>2</sup></figure>
                                    <figure>0m<sup>2</sup></figure>
                                    <figure class="available"><i class="icon_check"></i></figure>
                                    <figure>43m<sup>2</sup> - 56m<sup>2</sup></figure>
                                </div>
                                <a href="#" class="btn btn-rounded btn-framed btn-light-frame btn-primary" data-toggle="modal" data-target="#gia-ban-can-van-phong-moritz">Chi tiết căn hộ</a>
                                <div class="price-box-footer">
                                    <a href="#lien-he-du-an-moritz" class="btn btn-rounded btn-primary">Liên Hệ</a>
                                </div>
                            </div>
                            <!--end price-box-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block">
            <div class="container">
                <h2>Câu Hỏi Thường Gặp.</h2>
                <div class="row">
                    <div class="col-md-8 col-sm-8 equal-height">
                        <div class="panel-group background-solid" id="faq" role="tablist" aria-multiselectable="true" data-scroll-reveal="enter left and move 20px after">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq1">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer1" aria-expanded="true" aria-controls="answer1">Vị trí yên tĩnh gần thiên nhiên</a>
                                    </h4>
                                </div>
                                <div id="answer1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq1">
                                    <div class="panel-body">
                                        <p>Dự án Căn hộ ST Moritz Thủ Đức hội tụ ưu thế về vị trí lẫn tiện ích sống hiện đại được đánh giá cao trên thị trường bất động sản khu Đông TP HCM. Căn hộ ST.Moritz sở hữu 3 lợi thế chiến lược về vị trí của một dự án bất động sản đắc địa là: cận thị nằm trong nội đô, cận giang – hướng sông và cận lộ – gần những tuyến đường lớn.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq2">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer2" aria-expanded="true" aria-controls="answer2">Trung tâm mua sắm và thể dục ngay trong khu phức hợp</a>
                                    </h4>
                                </div>
                                <div id="answer2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                    <div class="panel-body">
                                        <ul class="check-marks">
                                            <li>Hồ bơi SkyView</li>
                                            <li>Công viên Sân vườn</li>
                                            <li>Khu BBQ & Nhà hàng</li>
                                            <li>Phòng gym và Yoga</li>
                                            <li>Khu trung tâm thương mại Shophouse</li>
                                            <li>Bãi đậu xe…</li>
                                        </ul>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="faq3">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#faq" href="#answer3" aria-expanded="true" aria-controls="answer3">Nhiều chỗ đậu xe, ngay cả cho khách của bạn</a>
                                    </h4>
                                </div>
                                <div id="answer3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                    <div class="panel-body">
                                        <p>Dự án có 2 tầng hầm để sử dụng làm bãi đậu xe cho cả ô tô  và xe máy. Đảm bảo chỗ đậu xe cho cư dân và khách của cư dân.
                                        </p>
                                    </div>
                                    <!--/ .panel-body-->
                                </div>
                                <!--/ .panel-collapse-->
                            </div>
                            <!--/ .panel-->
                        </div>
                        <!--/ .panel-group-->
                    </div>
                    <div class="col-md-4 col-sm-4 equal-height form-questions" >
                        <div class="framed vertical-aligned-wrapper" data-scroll-reveal="enter right and move 20px">
                            <form class="inputs-underline vertical-aligned-element middle" method="post" action="{{ url('subcribes') }}">
                                @csrf
                                <label>Đăng ký bản tin của chúng tôi để nhận thông tin mới nhất</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="emailSubcribes" placeholder="Email">
                                    <input type="submit" classe="btn btn-subcribes" style="color: black; padding: 3px;" value="subcribes">
                                </div><!-- /input-group -->
                                <p class="note">*Chỉ thông tin có liên quan, không có thư rác</p>
                            </form>
                            <!--end form-->
                        </div>
                        <!--end framed-->
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <div class="block" id="lien-he-du-an-moritz">
            <div class="container">
                <h2>Liên Hệ.</h2>
                <div class="contact map">
                    <div class="row">
                        <div class="col-md-6 col-sm-6"  data-scroll-reveal="enter bottom and move 20px">
                            <h3>Bản Đồ</h3>
                            <div class="map" id="map"></div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <h3>Địa Chỉ</h3>
                                    <address>
                                        Đường Phạm Văn Đồng, phường Hiệp Bình Chánh, Quận Thủ Đức
                                        <br>
                                        0917 998 688 <br>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" data-scroll-reveal="enter top and move 20px">
                            <h3>Liên Hệ</h3>
                            <form id="form-contact" action="{{ url('/contact') }}" method="post" class="clearfix inputs-underline">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Họ Tên" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Email" required>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-6 col-sm-6 -->
                                </div>
                                <!--end row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" id="form-contact-message" rows="8" name="content" placeholder="Tin Nhắn" required></textarea>
                                        </div>
                                        <!--end form-group -->
                                    </div>
                                    <!--end col-md-12 -->
                                </div>
                                <!--end row -->
                                <!-- <div class="form-group clearfix">
                                    <button type="submit" class="btn pull-right btn-primary btn-rounded" id="form-contact-submit">Gửi</button>
                                </div> -->
                                <input type="submit" classe="btn pull-right btn-primary btn-rounded" style="color: black; padding: 3px;" value="Gửi">
                                <!--end form-group -->
                                <div id="form-contact-status"></div>
                            </form>
                            <!--end form-contact -->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end contact map-->
            </div>
            <!--end container-->
        </div>
        <!--end block-->


    </div>
    @endsection
    <!--end page-content-->

<!--end page-wrapper-->

<!--modal gia-ban-can-ho-2-phong-ngu-moritz-->
<div class="modal fade apartment-selector" id="gia-ban-can-ho-2-phong-ngu-moritz" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h4>Tòa nhà A</h4>
                    <h3>Tầng 10 - 18</h3>
                    <h1 class="modal-title">Căn hộ 01</h1>
                    <h2>Liên hệ</h2>
                </div>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="left">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#modal-gia-ban-can-ho-2-phong-ngu-moritz" aria-controls="gia-ban-can-ho-2-phong-ngu-moritz" role="tab" data-toggle="tab">Cấu trúc</a></li>
                        <li role="presentation"><a href="#modal-gallery-1" aria-controls="modal-gallery-1" role="tab" data-toggle="tab">Thư viện</a></li>
                    </ul>
                    <!--end nav-tabs-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="modal-gia-ban-can-ho-2-phong-ngu-moritz">
                            <a href="/images/matbang_2phongngu_1.jpg" class="image-popup"><img class="lazy" data-src="/images/matbang_2phongngu_1.jpg" alt="hình ảnh dự án moritz"></a>
                            <div class="note">Chọn để phóng to</div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="modal-gallery-1">
                            <div class="gallery">
                                <div class="one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img class="lazy" data-src="/images/matbang_2phongngu_2.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_2phongngu_3.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_2phongngu_4.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_2phongngu_5.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_2phongngu_6.jpg" alt="hình ảnh dự án moritz">
                                </div>
                            </div>
                            <!--end gallery-->
                            {{-- <a href="http://vimeo.com/24506451" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i>Click to take a video tour</a> --}}
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
                <!--end left-->
                <div class="right">
                    <h3>Thông số</h3>
                    <dl>
                        <dt>Phòng ngủ Master</dt>
                        <dd>15.52m<sup>2</sup></dd>
                        <dt>Phòng ngủ Master</dt>
                        <dd>11.52m<sup>2</sup></dd>
                        <dt>Toilet 1</dt>
                        <dd>4.57m<sup>2</sup></dd>
                        <dt>Toilet 2</dt>
                        <dd>3.83m<sup>2</sup></dd>
                        <dt>Không gian chung</dt>
                        <dd>35.29m<sup>2</sup></dd>
                        <dt>Sân phơi</dt>
                        <dd>2.75m<sup>2</sup></dd>
                    </dl>
                    {{-- <h3>Mô Tả</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula mauris at finibus efficitur.
                        Nulla facilisi. Proin sodales nibh id consequat mattis. Phasellus eu consequat nunc.
                    </p> --}}
                    <hr>
                   {{--  <figure><a href="#" class="icon"><i class="fa fa-file-pdf-o"></i>Download PDF</a></figure>
                    <figure><a href="#" class="icon"><i class="fa fa-file-image-o"></i>Download Brochure</a></figure> --}}
                </div>
                <!--end right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->

<!--modal gia-ban-can-ho-3-phong-ngu-moritz-->
<div class="modal fade apartment-selector" id="gia-ban-can-ho-3-phong-ngu-moritz" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h4>Tòa nhà A</h4>
                    <h3>Tầng 19</h3>
                    <h1 class="modal-title">Căn hộ 01</h1>
                    <h2>Liên hệ</h2>
                </div>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="left">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#modal-gia-ban-can-ho-3-phong-ngu-moritz" aria-controls="modal-gia-ban-can-ho-3-phong-ngu-moritz" role="tab" data-toggle="tab">Cấu trúc</a></li>
                        <li role="presentation"><a href="#modal-gallery-2" aria-controls="modal-gallery-2" role="tab" data-toggle="tab">Thư viện</a></li>
                    </ul>
                    <!--end nav-tabs-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="modal-gia-ban-can-ho-3-phong-ngu-moritz">
                            <a href="/images/matbang_3phongngu.jpg" class="image-popup"><img class="lazy" data-src="/images/matbang_3phongngu.jpg" alt="hình ảnh dự án moritz"></a>
                            <div class="note">Chọn để phóng to</div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="modal-gallery-2">
                            <div class="gallery">
                                <div class="one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img class="lazy" data-src="/images/matbang_3phongngu.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_3phongngu_2.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_3phongngu_3.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_3phongngu_4.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/matbang_3phongngu_5.jpg" alt="hình ảnh dự án moritz">
                                </div>
                            </div>
                            <!--end gallery-->
                            {{-- <a href="http://vimeo.com/24506451" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i>Click to take a video tour</a> --}}
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
                <!--end left-->
                <div class="right">
                    <h3>Thông số</h3>
                    <dl>
                        <dt>Nhà bếp</dt>
                        <dd>24m<sup>2</sup></dd>
                        <dt>Phòng ngủ Master</dt>
                        <dd>58m<sup>2</sup></dd>
                        <dt>Phòng ngủ 2</dt>
                        <dd>11.51m<sup>2</sup></dd>
                        <dt>Phòng ngủ 3</dt>
                        <dd>11.31m<sup>2</sup></dd>
                        <dt>Ban công</dt>
                        <dd>67m<sup>2</sup></dd>
                        <dt>Toilet 1</dt>
                        <dd>4.32m<sup>2</sup></dd>
                        <dt>Toilet 2</dt>
                        <dd>4.93m<sup>2</sup></dd>
                        <dt>Không gian chung</dt>
                        <dd>58.45m<sup>2</sup></dd>
                        <dt>Sân phơi</dt>
                        <dd>4.05m<sup>2</sup></dd>
                    </dl>
                    {{-- <h3>Mô Tả</h3>
                        <ul class="check-marks">
                            <li>Phòng khách</li>
                            <li>Phòng ngủ</li>
                            <li>Gian bếp</li>
                            <li>Phòng ăn</li>
                            <li>Khu vực sân phơi và lô gia</li>
                            <li>Một số căn hộ được thiết kế góc học tập hoặc phòng đọc sách đảm bảo không gian riêng biệt.</li>
                            <li>Gạch Granite nhân tạo 60×60</li>
                            <li>Sàn gỗ</li>
                            <li>Cửa gỗ chống cháy</li>
                            <li>Thiết bị vệ sinh cao cấp của các thương hiệu Toto, American Standard, Johnson Suisse hoặc thương hiệu khác tương đương.</li>
                        </ul>
                        --}}
                    <hr>
                   {{--  <figure><a href="#" class="icon"><i class="fa fa-file-pdf-o"></i>Download PDF</a></figure>
                    <figure><a href="#" class="icon"><i class="fa fa-file-image-o"></i>Download Brochure</a></figure> --}}
                </div>
                <!--end right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->
<!--modal gia-ban-can-ho-2-phong-ngu-moritz-->
<div class="modal fade apartment-selector" id="gia-ban-can-van-phong-moritz" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h4>Tòa nhà A</h4>
                    <h3>Tầng 03 - 09</h3>
                    <h1 class="modal-title">Văn Phòng</h1>
                    <h2>Liên hệ</h2>
                </div>
            </div>
            <!--end modal-header-->
            <div class="modal-body">
                <div class="left">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#modal-gia-ban-can-van-phong-moritz" aria-controls="modal-gia-ban-can-van-phong-moritz" role="tab" data-toggle="tab">Cấu trúc</a></li>
                        <li role="presentation"><a href="#modal-gallery-3" aria-controls="modal-gallery-3" role="tab" data-toggle="tab">Thư viện</a></li>
                    </ul>
                    <!--end nav-tabs-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="modal-gia-ban-can-van-phong-moritz">
                            <a href="/images/sanh_van_phong1.jpg" class="image-popup"><img class="lazy" data-src="/images/sanh_van_phong1.jpg" alt="hình ảnh dự án moritz"></a>
                            <div class="note">Chọn để phóng to</div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="modal-gallery-3">
                            <div class="gallery">
                                <div class="one-item-carousel" data-owl-items="1" data-owl-margin="0" data-owl-nav="0" data-owl-dots="1">
                                    <img class="lazy" data-src="/images/sanh_van_phong1.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong2.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong3.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong4.jpg" alt="hình ảnh dự án moritz">
                                    <img class="lazy" data-src="/images/sanh_van_phong5.jpg" alt="hình ảnh dự án moritz">
                                </div>
                            </div>
                            <!--end gallery-->
                            {{-- <a href="http://vimeo.com/24506451" class="video-tour video-popup"><i class="play-icon arrow_triangle-right"></i>Click to take a video tour</a> --}}
                        </div>
                    </div>
                    <!--end tab-content-->
                </div>
                <!--end left-->
                <div class="right">
                    <h3>Thông số</h3>
                    <dl>
                        <dt>Không gian sử dụng</dt>
                        <dd>43m<sup>2</sup> - 56m<sup>2</sup></dd>
                    </dl>
                    {{-- <h3>Mô Tả</h3>
                    <p>
                    Đối với căn hộ officetel ST.Moritz có diện tích nhỏ trung bình từ 43 – 56 m2 nhằm tối ưu hóa công năng và diện tích sử dụng. Sự đa năng của mô hình căn hộ văn phòng đảm bảo mang lại lợi ích kinh tế cho chủ nhân sở hữu, đồng thời tạo điều kiện để người làm việc phát huy tối đa năng suất và gia tăng thời gian làm việc.
                    </p> --}}
                    <hr>
                   {{--  <figure><a href="#" class="icon"><i class="fa fa-file-pdf-o"></i>Download PDF</a></figure>
                    <figure><a href="#" class="icon"><i class="fa fa-file-image-o"></i>Download Brochure</a></figure> --}}
                </div>
                <!--end right-->
            </div>
            <!--end modal-body-->
        </div>
        <!--end modal-content-->
    </div>
    <!--end modal-dialog-->
</div>
<!--end modal-->
