    <div id="homepage">
      <div class="slide-container">
        <div class="uk-container uk-container-center">
          <div class="uk-grid uk-grid-small">
            <div class="uk-width-large-2-3">
              <?php
                $owlInit = [
                  'nav' => true,
                  'dots' => false,
                  'loop' => true,
                  'margin' => 20,
                  'autoplay' => true,
                  'autoplayTimeout' => 3000,
                  'responsive' => array(
                    0 => array(
                      'items' => 1,
                    ),
                    480 => array(
                      'items' => 1,
                    ),
                    768 => array(
                      'items' => 1,
                    ),
                    960 => array(
                      'items' => 1,
                    ),
                  ),
                ];
              ?>
              <div class="owl-slide">
                <div class="owl-carousel owl-theme"  data-owl="	<?php echo base64_encode(json_encode($owlInit));?>">
                  <div class="item">
                    <a href="" title="" class="image img-cover">
                      <img src="/upload/image/banner/du-hoc-1-3-vimiss.png"  class="lazyloading " alt="/upload/image/banner/du-hoc-1-3-vimiss.png">
                    </a>
                  </div>
                  <div class="item">
                    <a href="" title="" class="image img-cover">
                      <img src="/upload/image/banner/du-hoc-1-3-vimiss.png"  class="lazyloading " alt="/upload/image/banner/du-hoc-1-3-vimiss.png">
                    </a>
                  </div>

                </div>
              </div>
            </div>
            <div class="uk-width-large-1-3">
              <div class="banner">
                <a href="" class="image img-cover">
                  <img src="upload/image/banner/banner-3.png"  alt="">
                </a>
                <a href="" class="image img-cover">
                  <img src="upload/image/banner/banner-3.png"  alt="">
                </a>
                <a href="" class="image img-cover">
                  <img src="upload/image/banner/banner-3.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="partner-section">
        <div class="uk-container uk-container-center">
          <div class="heading-1">
            <span>Các Liên chi Đoàn trực thuộc</span>
          </div>
          <div class="panel-body">
          <?php
              $owlInit = [
                'nav' => false,
                'dots' => false,
                'loop' => true,
                'margin' => 20,
                'autoplay' => true,
                'autoplayTimeout' => 2000,
                'responsive' => array(
                  0 => array(
                    'items' => 2,
                  ),
                  480 => array(
                    'items' => 3,
                  ),
                  768 => array(
                    'items' => 4,
                  ),
                  960 => array(
                    'items' => 5,
                  ),
                ),
              ];
            ?>
            <div class="owl-slide">
                <div class="owl-carousel owl-theme"  data-owl="	<?php echo base64_encode(json_encode($owlInit));?>">
                <?php for($i=1 ; $i<=6 ; $i++){ ?>
                  <div class="item">
                      <a class="image img-scaledown" href="" title="/upload/image/doitac/<?php echo $i ?>.jpg">
                        <img src="upload/image/doitac/<?php echo $i ?>.jpg" alt="">
                      </a>
                  </div>
                <?php } ?>
                </div>
              </div>
           
          </div>
        </div>
      </div>
      <div class="travel-container">
        <div class="uk-container uk-container-center">
          <div class="heading-1">
            <span>CÁC CHƯƠNG TRÌNH, SỰ KIỆN ĐANG DIỄN RA</span>
          </div>
          <?php
              $owlInit = [
                'nav' => true,
                'dots' => false,
                'loop' => true,
                'margin' => 20,
                'autoplay' => true,
                'autoplayTimeout' => 3000,
                'responsive' => array(
                  0 => array(
                    'items' => 1,
                  ),
                  480 => array(
                    'items' => 2,
                  ),
                  768 => array(
                    'items' => 3,
                  ),
                  960 => array(
                    'items' => 4,
                  ),
                ),
              ];
            ?>
          <div class="owl-slide">
            <div class="owl-carousel owl-theme" data-owl="	<?php echo base64_encode(json_encode($owlInit)); ?>">
              <div class="travel-item">
                <a href="cap-nhat-thong-tin-du-hoc-trung-quoc-moi-nhat.html" class="image img-cover">
                  <img src="upload/image/banner/banner-3.png" alt="[Cập nhật] - Thông tin học bổng du học Trung Quốc mới nhất 2023">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="cap-nhat-thong-tin-du-hoc-trung-quoc-moi-nhat.html" title="[Cập nhật] - Thông tin học bổng du học Trung Quốc mới nhất 2023">[Cập nhật] - Thông tin học bổng du học Trung Quốc mới nhất 2023</a>
                  </div>
                  <div class="description"> Du học Trung Quốc ngành gì? Cần bao nhiêu tiền? Điều kiện là gì? Bài viết chia... </div>
                </div>
              </div>
              <div class="travel-item">
                <a href="hoc-bong-ban-phan-dai-hoc-thuong-hai-va-dai-hoc-su-pham-thu-do.html" class="image img-cover">
                  <img src="upload/image/tin-tuc/hoc-bong-ban-phan-du-hoc-trung-quoc1.png" alt="Học bổng bán phần Đại học Thượng Hải và Đại học Sư phạm Thủ đô Bắc Kinh">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="hoc-bong-ban-phan-dai-hoc-thuong-hai-va-dai-hoc-su-pham-thu-do.html" title="Học bổng bán phần Đại học Thượng Hải và Đại học Sư phạm Thủ đô Bắc Kinh">Học bổng bán phần Đại học Thượng Hải và Đại học Sư phạm Thủ đô Bắc Kinh</a>
                  </div>
                  <div class="description"> Cơ hội vàng khi đăng ký học bổng bán phần vào các trường đại học hàng... </div>
                </div>
              </div>
              <div class="travel-item">
                <a href="trien-lam-du-hoc-2023-gap-go-ban-tuyen-sinh-16-truong-top-dau-trung-quoc.html" class="image img-cover">
                  <img src="upload/image/banner/banner-3.png" alt="Giới thiệu về “Du học Trung Quốc với HSK” tại Việt Nam">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="trien-lam-du-hoc-2023-gap-go-ban-tuyen-sinh-16-truong-top-dau-trung-quoc.html" title="Giới thiệu về “Du học Trung Quốc với HSK” tại Việt Nam">Giới thiệu về “Du học Trung Quốc với HSK” tại Việt Nam</a>
                  </div>
                  <div class="description"> Tham gia buổi giới thiệu du học Trung Quốc 2023 để gặp gỡ Ban tuyển sinh 16... </div>
                </div>
              </div>
              <div class="travel-item">
                <a href="hoi-thao-du-hoc-trung-quoc-2023-khang-dinh-vi-the-sai-canh-vuon-xa.html" class="image img-cover">
                  <img src="upload/image/banner/banner-3.png" alt="Hội thảo du học Trung Quốc 2023: Khẳng định vị thế - Sải cánh vươn xa">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="hoi-thao-du-hoc-trung-quoc-2023-khang-dinh-vi-the-sai-canh-vuon-xa.html" title="Hội thảo du học Trung Quốc 2023: Khẳng định vị thế - Sải cánh vươn xa">Hội thảo du học Trung Quốc 2023: Khẳng định vị thế - Sải cánh vươn xa</a>
                  </div>
                  <div class="description"> HỘI THẢO DU HỌC TRUNG QUỐC 2023: "Khẳng định vị thế - Sải cánh vươn xa".... </div>
                </div>
              </div>
              <div class="travel-item">
                <a href="hoc-bong-1-nam-tieng-nhap-hoc-9-2023-tro-cap-2500-te-thang.html" class="image img-cover">
                  <img src="upload/image/tin-tuc/314999423_6429737823708554_8954199284985802722_n.jpg" alt="Học bổng 1 năm tiếng nhập học 9/2023  trợ cấp 2500 tệ/ tháng">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="hoc-bong-1-nam-tieng-nhap-hoc-9-2023-tro-cap-2500-te-thang.html" title="Học bổng 1 năm tiếng nhập học 9/2023  trợ cấp 2500 tệ/ tháng">Học bổng 1 năm tiếng nhập học 9/2023 trợ cấp 2500 tệ/ tháng</a>
                  </div>
                  <div class="description"> Nhận ngay 1 khóa học tiếng Trung đầu ra HSK3 miễn phí khi đăng ký học bổng 1... </div>
                </div>
              </div>
              <div class="travel-item">
                <a href="tong-hop-cac-suat-hoc-bong-1-ky-offline-tai-trung-quoc.html" class="image img-cover">
                  <img src="upload/image/tin-tuc/313387335_6403511139664556_4811239228231763108_n.png" alt="Tổng hợp các suất học bổng 1 kỳ Offline tại Trung Quốc nhập học 2/2023">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="tong-hop-cac-suat-hoc-bong-1-ky-offline-tai-trung-quoc.html" title="Tổng hợp các suất học bổng 1 kỳ Offline tại Trung Quốc nhập học 2/2023">Tổng hợp các suất học bổng 1 kỳ Offline tại Trung Quốc nhập học 2/2023</a>
                  </div>
                  <div class="description"> Chỉ từ 500USD cho 5 tháng học tập tại Trung Quốc. Được miễn học phí, ký túc... </div>
                </div>
              </div>
              <div class="travel-item">
                <a href="hoc-bong-cis-thac-si-nhap-hoc-thang-10-tai-vu-han.html" class="image img-cover">
                  <img src="upload/image/tin-tuc/hoc-bong-cis-thac-si-nhap-hoc-thang-10-tai-vu-han-1.jpg" alt="Học bổng CIS Thạc sĩ nhập học tháng 10 tại Vũ Hán">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="hoc-bong-cis-thac-si-nhap-hoc-thang-10-tai-vu-han.html" title="Học bổng CIS Thạc sĩ nhập học tháng 10 tại Vũ Hán">Học bổng CIS Thạc sĩ nhập học tháng 10 tại Vũ Hán</a>
                  </div>
                  <div class="description"> Cập nhật những suất học bổng CIS Thạc sĩ cuối cùng tại Vũ Hán với chế... </div>
                </div>
              </div>
              <div class="travel-item">
                <a href="hoc-bong-1-ky-mua-xuan-2023-tai-bac-kinh-tro-cap-2500-te.html" class="image img-cover">
                  <img src="upload/image/tin-tuc/310264845_4214135512044227_6647994808996724879_n.jpg" alt="Học bổng 1 kỳ mùa xuân 2023 tại Bắc Kinh trợ cấp 2500 tệ">
                </a>
                <div class="info">
                  <div class="title">
                    <a href="hoc-bong-1-ky-mua-xuan-2023-tai-bac-kinh-tro-cap-2500-te.html" title="Học bổng 1 kỳ mùa xuân 2023 tại Bắc Kinh trợ cấp 2500 tệ">Học bổng 1 kỳ mùa xuân 2023 tại Bắc Kinh trợ cấp 2500 tệ</a>
                  </div>
                  <div class="description"> Du học kết hợp du lịch Bắc Kinh, có trợ cấp sinh hoạt phí 2500 tệ/ tháng. Quá... </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="homepage-customer">
        <div class="uk-container uk-container-center">
          <h2 class="heading-2">
            <span>Cảm nghĩ của bạn?</span>
          </h2>
          <div class="partner-wrapper owl-slide">
          <?php
              $owlInit = [
                'nav' => true,
                'dots' => false,
                'loop' => true,
                'margin' => 20,
                'autoplay' => true,
                'autoplayTimeout' => 3000,
                'responsive' => array(
                  0 => array(
                    'items' => 1,
                  ),
                  480 => array(
                    'items' => 1,
                  ),
                  768 => array(
                    'items' => 2,
                  ),
                  960 => array(
                    'items' => 2,
                  ),
                ),
              ];
            ?>
            <div class="owl-carousel owl-theme owl-loaded owl-drag" data-owl="<?php echo base64_encode(json_encode($owlInit)); ?>">
              <div class="customer-item">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-large-1-3">
                    <div class="customer-info">
                      <div class="customer-image">
                        <span class="image img-cover">
                          <img src="upload/image/goc-chia-se/phuong-thi-ha.png" alt="PHƯƠNG THỊ HÀ (2003 - LẠNG SƠN)">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-large-2-3">
                    <div class="customer-message">
                      <div class="customer-fullname">PHƯƠNG THỊ HÀ (2003 - LẠNG SƠN)</div>
                      <div class="customer-description"> Các anh chị tư vấn nhiệt tình lắm luôn ạ, dịch vụ uy tín, chuyên nghiệp. Em đã xin thành công học bổng bán phần 1+3 cảm ơn Du học Vimiss đã hỗ trợ cho em thời gian vừa qua ạ </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="customer-item">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-large-1-3">
                    <div class="customer-info">
                      <div class="customer-image">
                        <span class="image img-cover">
                          <img src="upload/image/goc-chia-se/nguyen-thu-phuong.png" alt=" NGUYỄN THU PHƯƠNG (2001 - HÀ NỘI)">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-large-2-3">
                    <div class="customer-message">
                      <div class="customer-fullname"> NGUYỄN THU PHƯƠNG (2001 - HÀ NỘI)</div>
                      <div class="customer-description"> Mình thấy cách mà Vimiss tư vấn rất có tâm và có tầm, và nơi để mình gửi gắm giấc mơ đi du học chính là Vimiss Nếu các bạn đang tìm hiểu ở đâu thì đừng bỏ qua Vimiss nhé có tâm và có tầm, và nơi để mình gửi gắm giấc mơ đi du học chính là Vimiss </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="customer-item">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-large-1-3">
                    <div class="customer-info">
                      <div class="customer-image">
                        <span class="image img-cover">
                          <img src="upload/image/goc-chia-se/dao-phuong-thao.png" alt="ĐÀO PHƯƠNG THẢO (2003 - THÁI NGUYÊN)">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-large-2-3">
                    <div class="customer-message">
                      <div class="customer-fullname">ĐÀO PHƯƠNG THẢO (2003 - THÁI NGUYÊN)</div>
                      <div class="customer-description"> Đây đúng là nơi uy tín để chúng ta có thể apply học bổng, thực hiện ước mơ du học Trung Quốc. Cảm ơn Du học Vimiss đã sát cánh bên em trong hành trình chinh phục ước mơ. </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="customer-item">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-large-1-3">
                    <div class="customer-info">
                      <div class="customer-image">
                        <span class="image img-cover">
                          <img src="upload/image/goc-chia-se/ha-vi.png" alt="HÀ VI (2000 - HƯNG YÊN) ">
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="uk-width-large-2-3">
                    <div class="customer-message">
                      <div class="customer-fullname">HÀ VI (2000 - HƯNG YÊN) </div>
                      <div class="customer-description"> Tư vấn chính xác, tỉ mỉ, đầy đủ mọi thứ cần thiết để đi du học sang Trung. Cảm ơn Vimiss đã hỗ trợ cho em. Chúc cho Du học Vimiss trong thời gian sắp tới sẽ càng thành công hơn nữa </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="news-container">
      <div class="uk-container uk-container-center">
        <h2 class="heading-1">
          <span>CHƯƠNG TRÌNH HỌC BỔNG</span>
        </h2>
        <div class="uk-grid uk-grid-medium">
          <div class="uk-width-large-1-2">
            <div class="feature-post">
              <a href="cap-nhat-thong-tin-du-hoc-trung-quoc-moi-nhat.html" class="image img-cover">
                <img src="/upload/image/tin-tuc/du-hoc-trung-quoc.png"  class="lazyloading " alt="/upload/image/tin-tuc/du-hoc-trung-quoc.png">
              </a>
              <h3 class="title">
                <a href="cap-nhat-thong-tin-du-hoc-trung-quoc-moi-nhat.html" title="[Cập nhật] - Thông tin học bổng du học Trung Quốc mới nhất 2023">[Cập nhật] - Thông tin học bổng du học Trung Quốc mới nhất 2023</a>
              </h3>
              <div class="description"> Du học Trung Quốc ngành gì? Cần bao nhiêu tiền? Điều kiện là gì? Bài viết chia sẻ những thông tin du học mới nhất và chương trình học bổng du học năm 2023 </div>
              <div class="create_at">
                <i class="fa fa-calendar mr5"></i>25/06/2021
              </div>
            </div>
          </div>
          <div class="uk-width-large-1-2">
            <div class="list-post">
              <article class="article-1 uk-clearfix">
                <a href="hoc-bong-ban-phan-dai-hoc-thuong-hai-va-dai-hoc-su-pham-thu-do.html" class="image img-cover">
                  <img src="/upload/image/tin-tuc/hoc-bong-ban-phan-du-hoc-trung-quoc1.png"  class="lazyloading " alt="/upload/image/tin-tuc/hoc-bong-ban-phan-du-hoc-trung-quoc1.png">
                </a>
                <div class="info">
                  <h3 class="title">
                    <a href="hoc-bong-ban-phan-dai-hoc-thuong-hai-va-dai-hoc-su-pham-thu-do.html" title="Học bổng bán phần Đại học Thượng Hải và Đại học Sư phạm Thủ đô Bắc Kinh">Học bổng bán phần Đại học Thượng Hải và Đại học Sư phạm Thủ đô Bắc Kinh</a>
                  </h3>
                  <div class="description">Cơ hội vàng khi đăng ký học bổng bán phần vào các trường đại học hàng...</div>
                  <div class="created_at">02:18 - 16/07/2021</div>
                </div>
              </article>
              <article class="article-1 uk-clearfix">
                <a href="hoc-bong-1-nam-tieng-nhap-hoc-9-2023-tro-cap-2500-te-thang.html" class="image img-cover">
                  <img src="/upload/image/tin-tuc/314999423_6429737823708554_8954199284985802722_n.jpg"  class="lazyloading " alt="/upload/image/tin-tuc/314999423_6429737823708554_8954199284985802722_n.jpg">
                </a>
                <div class="info">
                  <h3 class="title">
                    <a href="hoc-bong-1-nam-tieng-nhap-hoc-9-2023-tro-cap-2500-te-thang.html" title="Học bổng 1 năm tiếng nhập học 9/2023  trợ cấp 2500 tệ/ tháng">Học bổng 1 năm tiếng nhập học 9/2023 trợ cấp 2500 tệ/ tháng</a>
                  </h3>
                  <div class="description">Nhận ngay 1 khóa học tiếng Trung đầu ra HSK3 miễn phí khi đăng ký học bổng 1...</div>
                  <div class="created_at">08:01 - 10/11/2022</div>
                </div>
              </article>
              <article class="article-1 uk-clearfix">
                <a href="tong-hop-cac-suat-hoc-bong-1-ky-offline-tai-trung-quoc.html" class="image img-cover">
                  <img src="/upload/image/tin-tuc/313387335_6403511139664556_4811239228231763108_n.png"  class="lazyloading " alt="/upload/image/tin-tuc/313387335_6403511139664556_4811239228231763108_n.png">
                </a>
                <div class="info">
                  <h3 class="title">
                    <a href="tong-hop-cac-suat-hoc-bong-1-ky-offline-tai-trung-quoc.html" title="Tổng hợp các suất học bổng 1 kỳ Offline tại Trung Quốc nhập học 2/2023">Tổng hợp các suất học bổng 1 kỳ Offline tại Trung Quốc nhập học 2/2023</a>
                  </h3>
                  <div class="description">Chỉ từ 500USD cho 5 tháng học tập tại Trung Quốc. Được miễn học phí, ký túc...</div>
                  <div class="created_at">22:11 - 02/11/2022</div>
                </div>
              </article>
              <article class="article-1 uk-clearfix">
                <a href="hoc-bong-cis-thac-si-nhap-hoc-thang-10-tai-vu-han.html" class="image img-cover">
                  <img src="/upload/image/tin-tuc/hoc-bong-cis-thac-si-nhap-hoc-thang-10-tai-vu-han-1.jpg"  class="lazyloading " alt="/upload/image/tin-tuc/hoc-bong-cis-thac-si-nhap-hoc-thang-10-tai-vu-han-1.jpg">
                </a>
                <div class="info">
                  <h3 class="title">
                    <a href="hoc-bong-cis-thac-si-nhap-hoc-thang-10-tai-vu-han.html" title="Học bổng CIS Thạc sĩ nhập học tháng 10 tại Vũ Hán">Học bổng CIS Thạc sĩ nhập học tháng 10 tại Vũ Hán</a>
                  </h3>
                  <div class="description">Cập nhật những suất học bổng CIS Thạc sĩ cuối cùng tại Vũ Hán với chế...</div>
                  <div class="created_at">21:07 - 13/10/2022</div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="uk-text-center">
          <div class="readmore">
            <a href="tin-tuc.html">Xem thêm</a>
          </div>
        </div>
      </div>
    </div>
    <div class="n-activity">
      <div class="uk-container uk-container-center">
        <div class="n-activity-content">
          <div class="main-title "> Hình ảnh hoạt động </div>
          <div class="n-activity-body ">
            <ul data-uk-switcher="{connect:'#my-id'} " class="uk-flex uk-flex-center n-activity-choice-list mb20 uk-list uk-clearfix">
              <li class="mr20">
                <a href="">Các sự kiện tổ chức1</a>
              </li>
              <li class="mr20">
                <a href="">Các sự kiện tổ chức2</a>
              </li>
            </ul>
            <ul id="my-id" class="uk-switcher ">
              <li>
                <div class="n-activity-pic-list mb50">
                  <div class="uk-grid uk-grid-width-xlarge-1-4 uk-grid-collapse">
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/1.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/1.png">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="n-activity-pic-list mb50">
                  <div class="uk-grid uk-grid-width-xlarge-1-4 uk-grid-collapse">
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/1.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/1.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/2.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/2.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/3.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/3.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/4.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/4.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/5.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/5.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/6.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/6.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/7.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/7.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/8.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/8.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/9.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/9.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/10.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/10.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/11.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/11.png">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="n-wrap-grid">
                      <div class="n-activity-pic">
                        <div class="thumb_ratio">
                          <a href="" target="_blank" title="Các sự kiện tổ chức" class="image img-cover" link="">
                            <img src="/upload/image/hinh-anh-hoat-dong/ngay-hoi-du-hoc-lon-nhat.png"  class="lazyloading " alt="/upload/image/hinh-anh-hoat-dong/ngay-hoi-du-hoc-lon-nhat.png">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    