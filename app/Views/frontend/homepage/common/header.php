<?php echo view(route('frontend.homepage.common.canvas')) ?>
<header class="pc-header" >
      <div class="upper">
        <div class="uk-container uk-container-center">
          <div class="uk-flex uk-flex-space-between uk-flex-middle">
            <form action="https://vimiss.vn/tim-kiem.html" method="get" class="uk-form form">
              <input type="text" value="" name="keyword" placeholder="Nhập từ khóa để tìm kiếm ..." style="width: 17vw; border-radius: 5px;" class="input-text">
              <input type="submit" value="Search" name="search" class="btn-submit btn-search-header">
            </form>
            <ul class="uk-list uk-clearfix sitelink">
              <li>
                <a href="tin-tuc.html" title="Tin tức">Tin tức</a>
              </li>
              <li>
                <a href="hoi-thao.html" title="Hội thảo">Hội thảo</a>
              </li>
              <li>
                <a href="tuyen-dung.html" title="Tuyển dụng">Tuyển dụng</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- .upper -->
      <div class="middle">
        <div class="uk-container uk-container-center">
          <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <h1 class="hd-logo">
              <a href="index.html" title="logo đoàn" class ="img-scaledown">
                <img src="upload/image/logo/logodoan.png" alt="logo đoàn" class="lazyloading">
              </a>
            </h1>
            <div class="uk-flex uk-flex-middle">
              <ul class="uk-navbar-nav uk-clearfix main-menu uk-flex uk-flex-middle">
                <li>
                  <a href="index.html" title="Trang chủ">Trang chủ</a>
                </li>
                <li>
                  <a href="chuong-trinh-su-kien.html" title="Chương trình, sự kiện">Chương trình, sự kiện</a>
                </li>
                <li>
                  <a href="khu-vuc.html" title="Bài đăng">Bài đăng</a>
                  <div class="dropdown-menu">
                    <ul class="uk-list submenu">
                      <li>
                        <a href="bac-kinh.html" title="Bắc Kinh">Bắc Kinh</a>
                      </li>
                      <li>
                        <a href="thuong-hai.html" title="Thượng Hải">Thượng Hải</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href="chuong-trinh-du-hoc.html" title="Điểm rèn luyện">Điểm rèn luyện</a>
                </li>
                <li>
                  <a href="admin" title="Vào trang quản lý">Vào trang quản lý</a>
                </li>
                <!-- <li>
                  
                </li> -->
              </ul>
              <div class="account-login">
                <!-- <div class="login">
                  <a href="#my-login" data-uk-modal="" class="btn-reg" title="Đăng nhập">Đăng nhập</a>
                </div> -->
                <div class="account">
                  <div class="uk-flex uk-flex-middle">
                    <div class="thumb img-cover" style = 'height:50px;width:50px;margin-right:10px'>
                      <img style = 'border-radius:50%' src="/upload/image/goc-chia-se/dao-phuong-thao.png" alt="">
                    </div>
                    <div class="info">
                      <span><strong>Nguyễn Trần Trung Quân</strong></span>
                      <br>
                      <span>Đoàn Viên</span>
                    </div>
                  </div>
                  <div class="dropdown-menu">
                    <ul class="uk-list submenu">
                      <li>
                        <a href="" title="sửa thông tin">Sửa thông tin cá nhân</a>
                      </li>
                      <li>
                        <a href="#my-change" data-uk-modal="" title="đổi mật khẩu">Đổi mật khẩu</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>    
</header>

  <div class="header-mobile header-wrapper">
      <div class="uk-container uk-container-center">
          <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <div class="header-canvas button-item">
                <a href="#" title="menu">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
            </div>
            <div class="logo">
              <a href="#" title="logo" class="img-cover">
                <img src="upload/image/logo/logodoan.png" alt="">
              </a>
            </div>
            <div class="button-login">
              <a href="#my-form" data-uk-modal title="đăng nhập">Đăng nhập</a>
            </div>
          </div>
      </div>
  </div>
  <div id="my-login" class="uk-modal">
      <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="contact-form">
          <h2 class="heading-2">Đăng nhập</h2>
          <form action="" class="uk-form form" method="post">
            <div class="form-row">
              <input type="text" class="input-text" name="fullname" value="" placeholder="Mã sinh viên hoặc email">
            </div>
            <div class="form-row">
              <input type="text" class="input-text" name="passwword" value="" placeholder="Mật khẩu">
            </div>
            <div class="form-row">
              <input type="submit" value="Đăng nhập" name="send" class="btn-submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  <div id="my-change" class="uk-modal">
      <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="contact-form">
          <h2 class="heading-2">Đổi mật khẩu</h2>
          <form action="" class="uk-form form" method="post">
            <div class="form-row">
              <input type="text" class="input-text" name="fullname" value="" placeholder="Mã sinh viên hoặc email">
            </div>
            <div class="form-row">
              <input type="text" class="input-text" name="passwword" value="" placeholder="Mật khẩu">
            </div>
            <div class="form-row">
              <input type="submit" value="Đăng nhập" name="send" class="btn-submit">
            </div>
          </form>
        </div>
      </div>
    </div>
