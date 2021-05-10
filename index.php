<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!---->
<div class="uk-section-xsmall uk-background-muted">
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid uk-toggle="cls: uk-grid-match; mode: media; media: @m">
            <div class="uk-width-expand">
                <div class="uk-grid-small uk-margin-small" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-cover-container uk-margin-small">
                            <img src="https://thanhhoa.gov.vn/portal/Photos/2021-04/_w/99eff37a75b30deda1_JPG.jpg" alt="" uk-cover>
                            <canvas width="900" height="520"></canvas>
                        </div>
                        <div class="uk-margin-small">
                            <h5 class="uk-h5 uk-margin-remove fix2__boxLeft__box2__title"><a href="">Đoàn đại biểu tỉnh Thanh Hóa dâng hương tưởng nhớ Chủ tịch Hồ Chí Minh, Mẹ Việt Nam Anh hùng và các Anh hùng liệt sĩ.</a></h5>
                        </div>
                        <div class="fix2__boxLeft__box2__desc line-clamp-3">Nhân kỷ niệm 46 năm Ngày giải phóng hoàn toàn miền Nam thống nhất đất nước (30/4/1975 – 30/4/2021), 135 năm Ngày Quốc tế Lao động (1/5/1886 – Nhân kỷ niệm 46 năm Ngày giải phóng hoàn toàn miền Nam thống nhất đất nước (30/4/1975 – 30/4/2021), 135 năm Ngày Quốc tế Lao động (1/5/1886 –</div>
                    </div>
                    <div class="uk-width-2-5@m uk-visible@m">
                        <div class="uk-margin-small">
                            <h3 class="uk-h3 uk-margin-remove fix3__title1">TIN TỨC NỔI BẬT</h3>
                        </div>
                        <div class="uk-grid-collapse" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/mdf_reovdl/2021_02_28/lay_mau.jpg',
                                    'title' => 'Đoàn đại biểu tỉnh Thanh Hóa dâng hương tưởng nhớ Chủ tịch Hồ Chí Minh, Mẹ Việt Nam Anh hùng và các Anh hùng liệt sĩ.',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/zdhwqwqd2/2021_02_18/2021_02_08T121306Z_1530549362_RC2COL9QTPB6_RTRMADP_3_HEALTH_CORONAVIRUS_CHINA.JPG',
                                    'title' => 'Chủ tịch UBND tỉnh ban hành Chỉ thị tăng cường thực hiện các giải pháp bảo đảm trật tự, an toàn giao thông nhằm hạn chế, giảm...',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/cqjlqcqjx/2021_02_28/benhvien13__1.jpg',
                                    'title' => 'Hội nghị nghiên cứu, học tập quán triệt triển khai thực hiện Nghị quyết Đại hội đại biểu toàn quốc lần thứ XIII của Đảng.',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/rohunuk/2021_02_28/Lay_may_tai_TSN_10.jpg',
                                    'title' => 'Lấy ý kiến dự thảo và ban hành Quy chuẩn kỹ thuật địa phương về chất lượng nước sạch sử dụng cho mục đích sinh hoạt trên địa...',
                                ),
                                array(
                                    'src' => 'https://i-raovat.vnecdn.net/2021/04/29/56bef9d5_1619658271.jpg?w=268&h=160&q=100&dpr=1&rt=fill&g=ce&s=ftmSuUXLh6BvusUO5nFUJw',
                                    'title' => 'Công điện khẩn của Chủ tịch UBND tỉnh về việc tăng cường công tác phòng, chống dịch Covid-19.',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/kbd_ivdb/2021_02_28/thi_the.jpg',
                                    'title' => 'Thi thể nam thanh niên nổi trên sông Sài Gòn',
                                ),
                            );
                            foreach ($data as $k => $v): ?>
                            <div class="uk-width-1-1">
                                <div class="uk-padding-small fix2__boxLeft__box1 <?= ($k == 0) ? 'uk-active' : '' ?>">
                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="uk-cover-container">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                <canvas width="75" height="50"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <h6 class="uk-h6 uk-margin-remove fix2__boxLeft__box1__title line-clamp-3"><a href=""><?= $v['title'] ?></a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class=" uk-margin-small">
                    <a href=""><img class="uk-width-1-1" src="https://thanhhoa.gov.vn/portal/ImageAds/707094ddf82c8dedBANNER%20BAU%20CU-01.jpg" alt=""></a>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-card uk-card-default fix2__card2" uk-slider>
                    <div class="fix2__card2__header uk-card-header uk-padding-small">
                        <div class="uk-child-width-auto uk-flex-between" uk-grid>
                            <div>
                                <span class="fix2__card2__header__txt">Tình huống nổi bật</span>
                            </div>
                            <div>
                                <a class="" href="#" uk-slider-item="previous" uk-icon="icon: chevron-left; ratio: 1"></a>
                                <a class="" href="#" uk-slider-item="next" uk-icon="icon: chevron-right; ratio: 1"></a>
                            </div>
                        </div>
                    </div>
                    <div class="fix2__card2__body uk-card-body uk-padding-remove">
                        <div class="uk-overflow-hidden">
                            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                                <ul class="uk-slider-items uk-child-width-1-1">
                                    <?php for ($i=0;$i<=3;$i++): ?>
                                        <li>
                                            <div class="uk-cover-container">
                                                <img src="images/Layer90.png" alt="" uk-cover>
                                                <canvas width="324" height="223"></canvas>
                                            </div>
                                            <div class="fix3__box1">
                                                <h6 class="uk-h6 uk-margin-remove fix3__box1__title"><a href="">Xử lý vi phạm pháp luật trong phòng, chống
                                                        dịch bệnh</a></h6>
                                            </div>
                                        </li>
                                    <?php endfor; ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-flex uk-flex-column uk-card-default uk-margin-small fix2__card1">
                    <div class="uk-card-header uk-padding-small fix2__card1__header">
                        <span class="fix2__card1__header__txt">SỰ KIỆN</span>
                    </div>
                    <div class="uk-card-body uk-padding-small fix2__card1__body" uk-toggle="cls: uk-flex-1; mode: media; media: @m">
                        <marquee behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();" direction="up" scrollamount="1" style="">
                            <?php
                            $data = array(
                                'Phê duyệt quyết toán dự án hoàn thành công trình: Trung tâm Giới thiệu việc làm Thanh Hóa',
                                'Xóa nợ tiền phạt chậm nộp, tiền chậm nộp đối với ông Nguyễn Văn Tuấn.',
                                'Hủy bỏ Quyết định số 909/QĐ-UBND ngày 18/3/2015 của Chủ tịch UBND tỉnh về việc ban hành Quy định về quản lý và bảo vệ kết cấu hạ tầng giao thông đường bộ trên địa bàn tỉnh Thanh Hóa',
                                'Phê duyệt điều chỉnh cục bộ quy hoạch chi tiết xây dựng tỷ lệ 1/500 Khu đô thị mới Đông Sơn, thành phố Thanh Hóa',
                                'Đoàn đại biểu tỉnh Thanh Hóa dâng hương tưởng nhớ Chủ tịch Hồ Chí Minh, Mẹ...',
                                'Hội nghị nghiên cứu, học tập quán triệt triển khai thực hiện Nghị quyết Đại...',
                                'Kỳ họp thứ 15 Hội đồng nhân dân tỉnh khóa XVII nhiệm kỳ 2016 – 2021.',
                                'Gặp gỡ các ứng cử viên đại biểu Quốc hội khóa XV và đại biểu HĐND tỉnh Thanh...',
                            );
                            foreach ($data as $k => $v): ?>
                            <div class="fix2__card1__body__item">
                                <a href=""><?= $v ?></a>
                            </div>
                            <?php endforeach; ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/-->

<!--CHỦ ĐỀ NỔI BẬT-->
<div class="home__block02 home__block02--c1 uk-section-small">
    <div class="uk-container">
        <div hidden class="home__block02__box2 uk-visible@s uk-border-rounded uk-margin-bottom uk-box-shadow-small">
            <span class="home__block02__box2__txt" hidden>TIN NỔI BẬT: <span id="typed"></span></span>
            <div class="uk-grid-10" uk-grid>
                <div class="uk-width-auto@s">
                    <span class="home__block02__box2__txt">TIN NỔI BẬT:</span>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider="autoplay: true;">

                        <ul class="uk-slider-items uk-child-width-1-1">
                            <?php
                            $data = array(
                                "Vì sao vaccine Covid-19 ở Việt Nam có giá 60.000 đồng một liều?",
                                "Nhiều phụ nữ nước ngoài tố cáo bị quấy rối tình dục ở hồ Tây",
                                "'Mong Tổng bí thư nhiều sức khỏe để vững tay chèo lái'",
                            );
                            foreach ($data as $k => $v): ?>
                            <li>
                                <span class="home__block02__box2__txt"><a href=""><?= $v ?></a></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <script>
          var typed = new Typed("#typed", {
            strings: [
              'Tăng cường tuyên truyền, phổ biến pháp luật trước, trong và sau Tết 2021',
              'You know what you should do?',
              'Use your own!',
              'Have a great day!'
            ],
            stringsElement: null,
            typeSpeed: 40,
            backSpeed: 40,
            backDelay: 500,
            startDelay: 250,
            loop: true,
            shuffle: false,
            fadeOut: false,
            contentType: 'html',
            loopCount: Infinity,
            onComplete: function(){ },
            resetCallback: function() { },
            onTypingPaused: function() { },
            onTypingResumed: function() { }
          });
        </script>
        <h2 class="home__title uk-h2 uk-text-left uk-margin">Chủ đề nổi bật</h2>
        <div class="mb-40" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-small uk-grid-25-m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/yqdxwpjwq/2021_02_28/thumb_2.jpg',
                                'title' => 'Pháp luật với người dân và doanh nghiệp',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/yzizh/2021_02_28/thumb.jpg',
                                'title' => 'Pháp luật về Lao động và An sinh xã hội',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/lce_qjlcv/2021_02_27/rrret.jpg',
                                'title' => 'Pháp luật Dân sự',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/yqdxwpjwq/2021_02_24/pin_2_1.jpg',
                                'title' => 'Pháp luật về ANTT và phòng, chống tệ nạn xã hội',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/liqpwivo/2021_02_28/allihead_1.jpg',
                                'title' => 'Pháp luật về phòng, chống tham nhũng',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/uqvpbpci/2021_02_28/58caf6ad4894bbcae285.jpg',
                                'title' => 'Pháp luật về HNGĐ và phòng, chống bạo lực gia đình',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w360/Uploaded/neg_efjpyye/2020_02_23/Cuoc_doi_va_su_nghiep_Warren_Buffett_11.jpg',
                                'title' => 'Pháp luật về phòng, chống dịch bệnh',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                        <li>
                            <div class="uk-cover-container mb-7">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                <canvas width="550" height="310"></canvas>
                            </div>
                            <h5 class="uk-h5 line-clamp-2 uk-margin-remove fix1__box1__title"><a href=""><?= $v['title'] ?></a></h5>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

        </div>


        <div class="uk-card uk-hidden fix1__card uk-margin uk-visible@m" uk-slider uk-toggle="cls: uk-margin-medium; mode: media; media: @l">
            <div class="uk-padding-small fix1__card__header uk-padding-remove-left uk-padding-remove-right">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="home__title uk-h2 uk-text-left uk-text-uppercase uk-margin-remove">TÌNH HUỐNG pháp luật NỔI BẬT</h2>
                    </div>
                    <div class="uk-width-auto">
                        <a class="" href="#" uk-icon="icon: chevron-left; ratio: 1" uk-slider-item="previous"></a>
                        <a class="" href="#" uk-icon="icon: chevron-right; ratio: 1" uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
            <div>

                <div class="uk-position-relative">

                    <div class="uk-slider-container-offset uk-light">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-25-m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/mdf_reovdl/2021_02_28/lay_mau.jpg',
                                    'title' => 'Thêm 16 ca Covid-19, 4 người nhập cảnh',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/zdhwqwqd2/2021_02_18/2021_02_08T121306Z_1530549362_RC2COL9QTPB6_RTRMADP_3_HEALTH_CORONAVIRUS_CHINA.JPG',
                                    'title' => 'Tình tiết mới về bệnh nhân số 0 ở Vũ Hán',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/cqjlqcqjx/2021_02_28/benhvien13__1.jpg',
                                    'title' => 'Giải thể Bệnh viện dã chiến số 1 ở Hải Dương',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/rohunuk/2021_02_28/Lay_may_tai_TSN_10.jpg',
                                    'title' => 'Thêm ca mắc Covid-19, Đồng Tháp họp khẩn',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/natmzz/2021_02_28/2021_02_28T124055Z_1352417996_UP1EH2S0Z87S4_RTRMADP_3_SOCCER_ENGLAND_LEI_ARS_REPORT.JPG',
                                    'title' => 'Leicester 1-3 Arsenal: Pepe tỏa sáng',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/kbd_ivdb/2021_02_28/thi_the.jpg',
                                    'title' => 'Thi thể nam thanh niên nổi trên sông Sài Gòn',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/aohunkx/2020_12_25/8d8d1318940e6850311f.jpg',
                                    'title' => 'Giá vàng còn giảm sâu vào tuần tới?',
                                ),
                            );
                            foreach ($data as $k => $v): ?>
                                <li>
                                    <div class="uk-card uk-position-relative uk-card-default home__block01__box uk-border-rounded uk-overflow-hidden">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                            <canvas width="327" height="237"></canvas>
                                        </div>
                                        <div class="uk-card-body uk-padding-small home__block01__box__body">
                                            <h4 class="uk-h4 uk-text-uppercase home__block01__box__title"><a href=""><?= $v['title'] ?></a></h4>
                                            <div class="uk-grid-5" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="uk-cover-container uk-border-circle">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                        <canvas width="24" height="24"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <span class="home__block01__box__txt"><a href="">Quy định xử phạt vi phạm giao thông</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-position-bottom home__block02__box1__bg2"><img src="images/boxshadow2.png" alt=""></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!--
                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    -->

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

            </div>
        </div>
        <div class="uk-card fix1__card uk-margin" uk-slider uk-toggle="cls: uk-margin-medium; mode: media; media: @l">
            <div class="uk-padding-small fix1__card__header uk-padding-remove-left uk-padding-remove-right">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="home__title uk-h2 uk-text-left uk-margin-remove">Có thể bạn quan tâm</h2>
                    </div>
                    <div class="uk-width-auto">
                        <a class="" href="#" uk-icon="icon: chevron-left; ratio: 1" uk-slider-item="previous"></a>
                        <a class="" href="#" uk-icon="icon: chevron-right; ratio: 1" uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
            <div>

                <div class="uk-position-relative">

                    <div class="uk-slider-container-offset uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-25-m" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/mdf_reovdl/2021_02_28/lay_mau.jpg',
                                    'title' => 'Thêm 16 ca Covid-19, 4 người nhập cảnh',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/zdhwqwqd2/2021_02_18/2021_02_08T121306Z_1530549362_RC2COL9QTPB6_RTRMADP_3_HEALTH_CORONAVIRUS_CHINA.JPG',
                                    'title' => 'Tình tiết mới về bệnh nhân số 0 ở Vũ Hán',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/cqjlqcqjx/2021_02_28/benhvien13__1.jpg',
                                    'title' => 'Giải thể Bệnh viện dã chiến số 1 ở Hải Dương',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/rohunuk/2021_02_28/Lay_may_tai_TSN_10.jpg',
                                    'title' => 'Thêm ca mắc Covid-19, Đồng Tháp họp khẩn',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/natmzz/2021_02_28/2021_02_28T124055Z_1352417996_UP1EH2S0Z87S4_RTRMADP_3_SOCCER_ENGLAND_LEI_ARS_REPORT.JPG',
                                    'title' => 'Leicester 1-3 Arsenal: Pepe tỏa sáng',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/kbd_ivdb/2021_02_28/thi_the.jpg',
                                    'title' => 'Thi thể nam thanh niên nổi trên sông Sài Gòn',
                                ),
                                array(
                                    'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/aohunkx/2020_12_25/8d8d1318940e6850311f.jpg',
                                    'title' => 'Giá vàng còn giảm sâu vào tuần tới?',
                                ),
                            );
                            foreach ($data as $k => $v): ?>
                                <li>
                                    <div class="uk-card uk-position-relative uk-card-default home__block01__box uk-border-rounded uk-overflow-hidden">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                            <canvas width="327" height="237"></canvas>
                                        </div>
                                        <div class="uk-card-body uk-padding-small home__block01__box__body">
                                            <h4 class="uk-h4 home__block01__box__title"><a href=""><?= $v['title'] ?></a></h4>
                                            <div class="uk-grid-5" uk-grid>
                                                <div class="uk-width-auto">
                                                    <div class="uk-cover-container uk-border-circle">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                        <canvas width="24" height="24"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <span class="home__block01__box__txt"><a href="">Quy định xử phạt vi phạm giao thông</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-position-bottom home__block02__box1__bg2"><img src="images/boxshadow2.png" alt=""></div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!--
                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    -->

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

            </div>
        </div>
        <div class="uk-card fix1__card uk-margin" uk-slider uk-toggle="cls: uk-margin-medium; mode: media; media: @l">
            <div class="uk-padding-small fix1__card__header uk-padding-remove-left uk-padding-remove-right">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h2 class="home__title uk-h2 uk-text-left uk-margin-remove">Tài liệu phổ biến pháp luật</h2>
                    </div>
                    <div class="uk-width-auto">
                        <a class="" href="#" uk-icon="icon: chevron-left; ratio: 1" uk-slider-item="previous"></a>
                        <a class="" href="#" uk-icon="icon: chevron-right; ratio: 1" uk-slider-item="next"></a>
                    </div>
                </div>
            </div>
            <div>

                <div class="uk-position-relative">

                    <div class="uk-slider-container-offset uk-light">
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-25-m" uk-grid>
                            <?php for ($i=0;$i<=10;$i++): ?>
                                <li>
                                    <div class="uk-position-relative">
                                        <div class="uk-card uk-position-relative uk-card-default home__block01__box home__block01__box--c1 uk-border-rounded uk-overflow-hidden">
                                            <div class="uk-card-body uk-padding-small home__block01__box__body home__block01__box__body--c1">
                                                <h4 class="uk-h4 uk-margin-small home__block01__box__title"><a href="">Nghị định quy định niên hạn sử dụng đối với xe ô tô chở hàng và xe ô tô chở người</a></h4>
                                                <div class="uk-margin-small">
                                                    <div class="home__block01__box__txt1">Số hiệu: 95/2009/NĐ-CP</div>
                                                    <div><span class="home__block01__box__txt home__block01__box__txt--c1">20-12-2009</span></div>
                                                </div>
                                                <div><span class="home__block01__box__txt"><a href="">Văn bản quy phạm pháp luật</a></span></div>
                                            </div>
                                        </div>
                                        <div class="uk-position-bottom home__block02__box1__bg3"><img src="images/boxshadow3.png" alt=""></div>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>

                    <!--
                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>
                    -->

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

            </div>
        </div>

    </div>
</div>
<!--/CHỦ ĐỀ NỔI BẬT-->

<!--TÌNH HUỐNG NỔI BẬT-->
<div class="uk-hidden home__block01 uk-section-small uk-background-muted">
    <div class="uk-container home__block01__container">
        <h2 class="home__title uk-h2 uk-text-center uk-text-uppercase uk-margin">TÌNH HUỐNG pháp luật NỔI BẬT</h2>
        <div class="home__block01__slider" uk-slider="autoplay: false">
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small uk-grid-24-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w960/Uploaded/mdf_reovdl/2021_02_28/lay_mau.jpg',
                            'title' => 'Thêm 16 ca Covid-19, 4 người nhập cảnh',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/zdhwqwqd2/2021_02_18/2021_02_08T121306Z_1530549362_RC2COL9QTPB6_RTRMADP_3_HEALTH_CORONAVIRUS_CHINA.JPG',
                            'title' => 'Tình tiết mới về bệnh nhân số 0 ở Vũ Hán',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w480/Uploaded/cqjlqcqjx/2021_02_28/benhvien13__1.jpg',
                            'title' => 'Giải thể Bệnh viện dã chiến số 1 ở Hải Dương',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/rohunuk/2021_02_28/Lay_may_tai_TSN_10.jpg',
                            'title' => 'Thêm ca mắc Covid-19, Đồng Tháp họp khẩn',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/natmzz/2021_02_28/2021_02_28T124055Z_1352417996_UP1EH2S0Z87S4_RTRMADP_3_SOCCER_ENGLAND_LEI_ARS_REPORT.JPG',
                            'title' => 'Leicester 1-3 Arsenal: Pepe tỏa sáng',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/kbd_ivdb/2021_02_28/thi_the.jpg',
                            'title' => 'Thi thể nam thanh niên nổi trên sông Sài Gòn',
                        ),
                        array(
                            'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/aohunkx/2020_12_25/8d8d1318940e6850311f.jpg',
                            'title' => 'Giá vàng còn giảm sâu vào tuần tới?',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <li>
                            <div class="uk-card uk-position-relative uk-card-default home__block01__box uk-border-rounded uk-overflow-hidden">
                                <div class="uk-cover-container">
                                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                    <canvas width="327" height="237"></canvas>
                                </div>
                                <div class="uk-card-body uk-padding-small home__block01__box__body">
                                    <h4 class="uk-h4 uk-text-uppercase home__block01__box__title"><a href=""><?= $v['title'] ?></a></h4>
                                    <div class="uk-grid-5" uk-grid>
                                        <div class="uk-width-auto">
                                            <div class="uk-cover-container uk-border-circle">
                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                <canvas width="24" height="24"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <span class="home__block01__box__txt"><a href="">Quy định xử phạt vi phạm giao thông</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-position-bottom home__block02__box1__bg2"><img src="images/boxshadow2.png" alt=""></div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!--
                <a class="uk-position-center-left home__block01__slider__nav uk-position-small uk-hidden-hover1" href="#" uk-slider-item="previous"><span uk-icon="icon: chevron-left; ratio: 1.5"></span></a>
                <a class="uk-position-center-right home__block01__slider__nav uk-position-small uk-hidden-hover1" href="#" uk-slider-item="next"><span uk-icon="icon: chevron-right; ratio: 1.5"></span></a>
                -->

            </div>

            <ul class="uk-slider-nav home__block01__slider__dot home__block01__slider__dot--c1 uk-dotnav uk-flex-center uk-margin-small-top"></ul>

        </div>
    </div>
</div>
<!--/TÌNH HUỐNG NỔI BẬT-->

<!--VĂN BẢN TÀI LIỆU-->
<div class="uk-hidden home__block02 home__block02--c2 uk-section-small">
    <div class="uk-container">
        <h2 class="home__title uk-h2 uk-text-center uk-text-uppercase uk-margin">VĂN BẢN - TÀI LIỆU</h2>
        <div class="home__block01__slider" uk-slider="autoplay: true">
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small uk-grid-20-m" uk-grid>
                    <?php for ($i=0;$i<=10;$i++): ?>
                        <li>
                            <div class="uk-position-relative">
                                <div class="uk-card uk-position-relative uk-card-default home__block01__box home__block01__box--c1 uk-border-rounded uk-overflow-hidden">
                                    <div class="uk-card-body uk-padding-small home__block01__box__body home__block01__box__body--c1">
                                        <h4 class="uk-h4 uk-margin-small uk-text-uppercase home__block01__box__title"><a href="">Nghị định quy định niên hạn sử dụng đối với xe ô tô chở hàng và xe ô tô chở người</a></h4>
                                        <div class="uk-margin-small">
                                            <div class="home__block01__box__txt1">Số hiệu: 95/2009/NĐ-CP</div>
                                            <div><span class="home__block01__box__txt home__block01__box__txt--c1">20-12-2009</span></div>
                                        </div>
                                        <div><span class="home__block01__box__txt"><a href="">Văn bản quy phạm pháp luật</a></span></div>
                                    </div>
                                </div>
                                <div class="uk-position-bottom home__block02__box1__bg3"><img src="images/boxshadow3.png" alt=""></div>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>

            </div>

            <ul class="home__block01__slider__dot home__block01__slider__dot--c1 uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>
<!--/VĂN BẢN TÀI LIỆU-->

<!--TIN HOẠT ĐỘNG-->
<div class="home__block03 uk-section-small uk-background-muted">
    <div class="uk-container">
        <div class="uk-grid-20-m uk-margin" uk-grid>
            <div class="uk-width-expand">
                <!--
                <div class="uk-margin-small home__block03__box1">
                    <h3 class="home__block03__box1__title home__block03__box1__title--c1 uk-h3 uk-text-uppercase uk-margin-remove uk-display-inline-block"><a href="">TIN HOẠT ĐỘNG</a></h3>
                </div>
                <div class="uk-grid-small uk-grid-20-m uk-grid-match" uk-grid>
                    <div class="uk-width-expand">
                        <div class="home__block03__box2 uk-card uk-card-default uk-border-rounded uk-overflow-hidden">
                            <div class="uk-cover-container">
                                <img src="https://znews-photo.zadn.vn/w960/Uploaded/ngotgs/2021_02_28/150871474_256865649303023_6285164231682596137_n_2818_2.jpg" alt="" uk-cover>
                                <canvas width="673" height="315"></canvas>
                            </div>
                            <div class="uk-card-body home__block03__box2__body">
                                <h3 class="uk-h3 home__block03__box2__title"><a href="">Người cứu bé gái rơi từ tầng 12A: 'Tôi đang run vì hạnh phúc'</a></h3>
                                <p class="home__block03__box2__desc">"Con gái tôi cũng 3 tuổi, bằng bé gái đó. Lúc đó, tôi nghĩ người đang cheo leo trên ban công tầng 12A kia là con gái mình", anh Mạnh nhớ lại lúc cứu cháu bé rơi từ chung cư.</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                            <div>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-3 uk-width-1-1@m">
                                        <div class="uk-cover-container uk-margin-small uk-border-rounded">
                                            <img src="https://znews-photo.zadn.vn/w360/Uploaded/mdf_drokxr/2021_02_28/mbappe_thumb_1.jpg" alt="" uk-cover>
                                            <canvas width="329" height="173"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-h4 uk-margin-small home__block01__box__title"><a href="">Mbappe từng được Zidane mời đi xe khi đến Real</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-3 uk-width-1-1@m">
                                        <div class="uk-cover-container uk-margin-small uk-border-rounded">
                                            <img src="https://znews-photo.zadn.vn/w360/Uploaded/lce_cjvcc/2021_02_28/2021_mercedes_benz_s_class_australia_10.jpg" alt="" uk-cover>
                                            <canvas width="329" height="173"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-h4 uk-margin-small home__block01__box__title"><a href="">Bà Diệp thừa nhận sai khi đem nhà đất 185 Hai Bà Trưng thế chấp cho Sacombank lúc chưa giải quyết xong vấn đề nhà 57 Cao Thắng với Agribank.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-small">
                    <img src="images/banner.png" alt="">
                </div>
                <div class="uk-margin uk-card uk-card-default uk-border-rounded home__block01__box--c1">
                    <div class="uk-card-body uk-padding-small">
                        <div class="uk-margin-small home__block03__box1">
                            <h3 class="home__block03__box1__title uk-h3 uk-margin-remove uk-display-inline-block">Sự kiện</h3>
                        </div>
                        <div uk-slider>

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                                        <?php for ($i=1;$i<=2;$i++): ?>
                                        <li>
                                            <div class="uk-cover-container uk-border-rounded uk-margin-small">
                                                <img src="https://znews-photo.zadn.vn/w360/Uploaded/qxjrcqjwq/2021_02_28/EvQ01o6XYAEKhco_1.jpg" alt="" uk-cover>
                                                <canvas width="465" height="262"></canvas>
                                            </div>
                                            <h4 class="uk-h4 uk-margin-small home__block01__box__title"><a href="">Cầu thủ trẻ nhất đội hình Barca kiến tạo cho Messi</a></h4>
                                            <div class="uk-grid-5 uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <div class="uk-cover-container uk-border-circle">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                        <canvas width="24" height="24"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-cover-container uk-border-rounded uk-margin-small">
                                                <img src="https://znews-photo.zadn.vn/w360/Uploaded/unvjuas/2021_02_28/photo_1_1572485193509704303286_1602046846_519_width640height480.jpg" alt="" uk-cover>
                                                <canvas width="465" height="262"></canvas>
                                            </div>
                                            <h4 class="uk-h4 uk-margin-small home__block01__box__title"><a href="">Những lần nghệ sĩ Việt kể chuyện mưu sinh vất vả tại Mỹ</a></h4>
                                            <div class="uk-grid-5 uk-grid" uk-grid="">
                                                <div class="uk-width-auto uk-first-column">
                                                    <div class="uk-cover-container uk-border-circle">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                        <canvas width="24" height="24"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>

                                <div class="uk-hidden@s uk-light" hidden>
                                    <a class="uk-position-center-left uk-position-small" href="#"  uk-icon="icon: chevron-left; ratio: 1.5" uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small" href="#"  uk-icon="icon: chevron-right; ratio: 1.5" uk-slider-item="next"></a>
                                </div>

                                <div class="uk-position-top-right" style="bottom: calc(100% + 10px);top: inherit;">
                                    <a class="" href="#" uk-icon="icon: chevron-left; ratio: 1.5" uk-slider-item="previous"></a>
                                    <a class="" href="#" uk-icon="icon: chevron-right; ratio: 1.5" uk-slider-item="next"></a>
                                </div>

                            </div>

                            <ul class="uk-slider-nav home__block01__slider__dot uk-dotnav uk-flex-center uk-margin uk-hidden"></ul>

                        </div>
                        <div class="uk-child-width-1-2@m uk-hidden" uk-grid>
                            <div>
                                <div class="uk-cover-container uk-border-rounded uk-margin-small">
                                    <img src="https://znews-photo.zadn.vn/w360/Uploaded/qxjrcqjwq/2021_02_28/EvQ01o6XYAEKhco_1.jpg" alt="" uk-cover>
                                    <canvas width="465" height="262"></canvas>
                                </div>
                                <h4 class="uk-h4 uk-margin-small home__block01__box__title"><a href="">Cầu thủ trẻ nhất đội hình Barca kiến tạo cho Messi</a></h4>
                                <div class="uk-grid-5 uk-grid" uk-grid="">
                                    <div class="uk-width-auto uk-first-column">
                                        <div class="uk-cover-container uk-border-circle">
                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                            <canvas width="24" height="24"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <span class="home__block01__box__txt">Sở giao giao thông vận tải</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-cover-container uk-border-rounded uk-margin-small">
                                    <img src="https://znews-photo.zadn.vn/w360/Uploaded/unvjuas/2021_02_28/photo_1_1572485193509704303286_1602046846_519_width640height480.jpg" alt="" uk-cover>
                                    <canvas width="465" height="262"></canvas>
                                </div>
                                <h4 class="uk-h4 uk-margin-small home__block01__box__title"><a href="">Những lần nghệ sĩ Việt kể chuyện mưu sinh vất vả tại Mỹ</a></h4>
                                <div class="uk-grid-5 uk-grid" uk-grid="">
                                    <div class="uk-width-auto uk-first-column">
                                        <div class="uk-cover-container uk-border-circle">
                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                            <canvas width="24" height="24"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <span class="home__block01__box__txt">Sở giao giao thông vận tải</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <div class="uk-margin uk-card uk-card-default uk-border-rounded home__block01__box--c1">
                    <div class="uk-card-body uk-padding-small">
                        <div class="uk-margin-small home__block03__box1">
                            <h3 class="home__block03__box1__title uk-h3 uk-margin-remove uk-display-inline-block"><a href="">Hoạt động của Hội đồng PBGDPL tỉnh</a></h3>
                        </div>
                        <div class="uk-child-width-1-2@m" uk-grid>
                            <div>
                                <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w960/Uploaded/ovhpaob/2021_02_01/tong_bi_thu.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w360/Uploaded/kbd_bcvi/2021_02_28/6017d7316dfbe10018e00fed_1.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w480/Uploaded/lce_cqdjw/2021_03_03/156251948_152783716670180_4407274767013749019_n_LP.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w360/Uploaded/kbd_pilk/2021_02_28/ly_bang_bang2a.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin uk-card uk-card-default uk-border-rounded home__block01__box--c1">
                    <div class="uk-card-body uk-padding-small">
                        <div class="uk-margin-small home__block03__box1">
                            <h3 class="home__block03__box1__title uk-h3 uk-margin-remove uk-display-inline-block"><a href="">Pháp luật với doanh nghiệp</a></h3>
                        </div>
                        <div class="uk-child-width-1-2@m" uk-grid>
                            <div>
                                <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w480/Uploaded/lce_jwqcz/2021_03_02/bao_ve_2.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w360/Uploaded/kbd_bcvi/2021_02_28/6017d7316dfbe10018e00fed_1.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w210/Uploaded/aobovhp/2021_03_03/kieu_6_1.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-grid-small uk-grid-match" uk-grid>
                                            <div class="uk-width-2-5@m">
                                                <div class="uk-cover-container uk-border-rounded">
                                                    <img src="https://znews-photo.zadn.vn/w360/Uploaded/kbd_pilk/2021_02_28/ly_bang_bang2a.jpg" alt="" uk-cover>
                                                    <canvas width="588" height="348"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <h4 class="uk-h4 uk-margin-small uk-flex-1 home__block01__box__title"><a href="">Ngô Thanh Vân nói hạnh phúc khi có Huy Trần ở bên</a></h4>
                                                    <div class="uk-grid-5 uk-grid" uk-grid="">
                                                        <div class="uk-width-auto uk-first-column">
                                                            <div class="uk-cover-container uk-border-circle">
                                                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="" class="uk-cover" style="height: 24px; width: 24px;">
                                                                <canvas width="24" height="24"></canvas>
                                                            </div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <span class="home__block01__box__txt"><a href="">Sở giao giao thông vận tải</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-small">
                    <img src="images/ttpbdonvi.jpg" alt="">
                </div>
                <div class="uk-margin uk-card uk-card-default uk-border-rounded home__block01__box--c1">
                    <div class="uk-card-body uk-padding-small">
                        <div class="uk-margin-small home__block03__box1">
                            <h3 class="home__block03__box1__title uk-h3 uk-margin-remove uk-display-inline-block"><a href="">Hướng dẫn nghiệp vụ</a></h3>
                        </div>
                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-20-m" uk-grid>
                            <div>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="http://pbgdpl.thanhhoa.gov.vn/DATA/uploads/51863993-c7a7-4e3d-8684-22afc545be19/images.jpg" alt="" uk-cover>
                                            <canvas width="333" height="212"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-h4 uk-margin-small home__block01__box__title uk-text-uppercase"><a href="">MỨC XỬ PHẠT MỘT SỐ HÀNH VI VI PHẠM PHÁP LUẬT TRONG PHÒNG, CHỐNG DỊCH BỆNH COVID-19 VÀ CĂN CỨ PHÁP LÝ</a></h4>
                                        <div class="home__block03__box2__desc home__block03__box2__desc--c1"><a href="">Phổ biến giáo dục pháp luật</a> <span>25/02/2021</span></div>
                                        <p class="home__block03__box2__desc">Một số mức phạt được quy định trong Nghị định số 117/2020/NĐ-CP ngày 28/09/2020 của Chính phủ về xử phạt hành chính trong lĩnh vực y tế</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="http://pbgdpl.thanhhoa.gov.vn/DATA/uploads/bb238735-138c-4604-a0a0-e36db99c4d69/Ha%20Trung.jpg" alt="" uk-cover>
                                            <canvas width="333" height="212"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-h4 uk-margin-small home__block01__box__title uk-text-uppercase"><a href="">
                                                HUYỆN HÀ TRUNG: HOẠT ĐỘNG PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT GẮN VỚI THỰC TIỄN HOẠT ĐỘNG CỦA CÁN BỘ Ở CƠ SỞ</a></h4>
                                        <div class="home__block03__box2__desc home__block03__box2__desc--c1"><a href="">Hòa giải ở cơ sở </a> <span>25/02/2021</span></div>
                                        <p class="home__block03__box2__desc">Tuyên truyền, phổ biến, giáo dục pháp luật (PBGDPL) đóng một vai trò vô cùng quan trọng trong việc đưa pháp luật vào cuộc sống, nâng cao hiểu biết pháp luật cho cán bộ và người dân, góp phần thúc đẩy phát triển kinh tế - xã hội, ổn định tình hình an ninh trật tự ở mỗi địa phương.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="http://pbgdpl.thanhhoa.gov.vn/DATA/uploads/bb238735-138c-4604-a0a0-e36db99c4d69/Ha%20Trung.jpg" alt="" uk-cover>
                                            <canvas width="333" height="212"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class="uk-h4 uk-margin-small home__block01__box__title uk-text-uppercase"><a href="">HUYỆN HÀ TRUNG: HOẠT ĐỘNG PHỔ BIẾN, GIÁO DỤC PHÁP LUẬT GẮN VỚI THỰC TIỄN HOẠT ĐỘNG CỦA CÁN BỘ Ở CƠ SỞ</a></h4>
                                        <div class="home__block03__box2__desc home__block03__box2__desc--c1"><a href="">Hòa giải ở cơ sở </a> <span>25/02/2021</span></div>
                                        <p class="home__block03__box2__desc">Tuyên truyền, phổ biến, giáo dục pháp luật (PBGDPL) đóng một vai trò vô cùng quan trọng trong việc đưa pháp luật vào cuộc sống, nâng cao hiểu biết pháp luật cho cán bộ và người dân, góp phần thúc đẩy phát triển kinh tế - xã hội, ổn định tình hình an ninh trật tự ở mỗi địa phương.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <div uk-sticky="offset: 60;media: 640;bottom: true;">
                    <div class="uk-margin-small home__block03__box1">
                        <h3 class="home__block03__box1__title uk-h3 uk-margin-remove uk-display-inline-block"><a href="">Trắc nghiệm</a></h3>
                    </div>
                    <div class="uk-card uk-card-default uk-border-rounded home__block03__aside home__block01__box--c1">
                        <div class="uk-card-body uk-padding-small home__block03__aside__body">
                            <form>
                                <fieldset class="uk-fieldset">
                                    <legend class="uk-legend home__block03__aside__title">Không đeo khẩu trang nơi công cộng thì bị phạt bao nhiêu tiền?</legend>
                                    <div class="uk-margin">
                                        <div class="uk-margin home__block03__aside__item uk-border-rounded">
                                            <label class="home__block03__aside__label">
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <input class="uk-radio" type="radio" name="radio2" checked>
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        500 nghìn Không đeo khẩu trang nơi công cộng thì bị phạt bao nhiêu tiền?
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="uk-margin home__block03__aside__item uk-border-rounded">
                                            <label class="home__block03__aside__label">
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <input class="uk-radio" type="radio" name="radio2">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        100 nghìn
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="uk-margin home__block03__aside__item uk-border-rounded">
                                            <label class="home__block03__aside__label">
                                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div class="uk-width-auto">
                                                        <input class="uk-radio" type="radio" name="radio2">
                                                    </div>
                                                    <div class="uk-width-expand">
                                                        1 đến 3 triệu đồng
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                                            <div>
                                                <button type="button" class="home__block03__aside__btn uk-button uk-button-secondary uk-border-rounded">Biểu quyết</button>
                                            </div>
                                            <div>
                                                <a href="" class="home__block03__aside__link">Xem kết quả</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="home__block03__aside__txt">Thời gian từ: 26/01- <span>17.774</span> trả lời</div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="uk-margin-small">
                        <a href=""><img class="uk-width-1-1" src="images/csdlqg.jpg" alt=""></a>
                    </div>
                    <div class="uk-margin-small">
                        <a href=""><img class="uk-width-1-1" src="images/tusachphapluat.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" uk-margin" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m" uk-grid>
                        <?php
                        $data = array(
                            'images/anh1/z2482414611713_e88cd57f8579f1ba5200fdd6d7418ca9.jpg',
                            'images/anh1/z2482414928611_2cdcaaef33c094acadfceccfe38b64af.jpg',
                            'images/anh1/z2482415309966_3540916e050d41a9ade860d27f0ebac5.jpg',
                            'images/anh1/z2482415616662_a4376a87405936cc616fec8e2f063985.jpg',
                            'images/anh1/z2482415878102_9ac7fe01e6671b181053867b5203656b.jpg',
                            'images/anh1/z2482416221420_6010d380a624a846f55fa7eb8ad1007c.jpg',
                        );
                        foreach ($data as $k => $v): ?>
                        <li>
                            <div class="uk-cover-container">
                                <img src="<?= $v ?>" alt="" uk-cover>
                                <canvas width="179" height="101"></canvas>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>
<!--/TIN HOẠT ĐỘNG-->

<?php require "template-parts/layouts/footer.php"; ?>

