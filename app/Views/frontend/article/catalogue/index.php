<div class="article-catalogue">
      <div class="breadcrumb-panel">
        <div class="uk-container-center uk-container">
          <ul class="uk-breadcrumb uk-clearfix ">
            <li class="breadcrumb-home">
              <a href="index.html">
                <i class="fa fa-home"></i> Trang chủ </a>
            </li>
            <li class="">
              <a href="bai-viet.html">
                <span>Bài viết</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="page-container">
        <div class="uk-container uk-container-center">
          <div class="uk-grid uk-grid-large">
            <div class="uk-width-large-1-4">
                <form class="filter-wrap mb20" method="get">
                  <div class="wrap-filter-item uk-clearfix mb10">
                    <span>Học Kỳ</span>
                    <select name="attributeid[]" class="form-control m-b ">
                      <option value="">-- Chọn GPA --</option>
                      <option value="16">10</option>
                      <option value="17">9.5</option>
                    </select>
                  </div>
                  <div class="wrap-filter-item uk-clearfix mb10">
                  <span>Năm học</span>
                  <?php echo form_dropdown('level_education', LEVEL_EDUCATION, set_value('level_education', (isset($user['level_education'])) ? $user['level_education'] : ''), 'class="form-control m-b "');?>
                  </div>
                  <div class="wrap-filter-item uk-clearfix mb10">
                  <span>Đơn vị tổ chức</span>
                    <select name="attributeid[]" class="form-control m-b ">
                      <option value="">-- Chọn Học bổng --</option>
                      <option value="15">Học bổng toàn phần</option>
                    </select>
                  </div>
                  <!-- <div class="wrap-filter-item uk-clearfix mb10">
                    <select name="attributeid[]" class="form-control m-b ">
                      <option value="">-- Chọn HSK --</option>
                      <option value="20">HSK 1</option>
                      <option value="18">HSK 2</option>
                      <option value="19">HSK 3</option>
                    </select>
                  </div>
                  <div class="wrap-filter-item uk-clearfix mb10">
                    <select name="attributeid[]" class="form-control m-b ">
                      <option value="">-- Chọn Khu vực --</option>
                      <option value="13">Bắc Kinh</option>
                    </select>
                  </div> -->
                  <div class="wrap-filter-item uk-clearfix mb10">
                    <button class="btn btn-submit-filter" type="submit">Tìm kiếm</button>
                  </div>
                </form>
                <div class="aside" >
                <div class="aside-category">
                  <div class="aside-heading">
                    <span>Danh mục</span>
                  </div>
                  <ul class="uk-clearfix uk-list">
                    <li>
                      <a href="bac-kinh.html" title="Bắc Kinh">Bắc Kinh</a>
                    </li>
                    <li>
                      <a href="thuong-hai.html" title="Thượng Hải">Thượng Hải</a>
                    </li>
                    <li>
                      <a href="quang-dong.html" title="Quảng Đông">Quảng Đông</a>
                    </li>
                    <li>
                      <a href="ho-nam.html" title="Hồ Nam">Hồ Nam</a>
                    </li>
                    <li>
                      <a href="trung-khanh.html" title="Trùng Khánh">Trùng Khánh</a>
                    </li>
                    <li>
                      <a href="thien-tan.html" title="Thiên Tân">Thiên Tân</a>
                    </li>
                    <li>
                      <a href="chiet-giang.html" title="Chiết Giang">Chiết Giang</a>
                    </li>
                    <li>
                      <a href="giang-to.html" title="Giang Tô">Giang Tô</a>
                    </li>
                    <li>
                      <a href="tu-xuyen.html" title="Tứ Xuyên">Tứ Xuyên</a>
                    </li>
                    <li>
                      <a href="cat-lam.html" title="Cát Lâm">Cát Lâm</a>
                    </li>
                    <li>
                      <a href="son-dong-son-tay.html" title="Sơn Đông - Sơn Tây">Sơn Đông - Sơn Tây</a>
                    </li>
                    <li>
                      <a href="van-nam.html" title="Vân Nam">Vân Nam</a>
                    </li>
                    <li>
                      <a href="quy-chau.html" title="Quý Châu">Quý Châu</a>
                    </li>
                    <li>
                      <a href="khu-vuc-khac.html" title="Khu Vực Khác">Khu Vực Khác</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="uk-width-large-3-4">
             
              <div class="page-list">
              <?php if(isset($article['list']) && is_array($article['list']) && count($article['list'])){ ?>
              <?php foreach ($article['list'] as $key => $val) {?>
                <div class="article uk-clearfix">
                  <a href="<?php echo $val['canonical'] ?>" class="image img-cover">
                    <img data-src="<?php echo $val['image'] ?>" src="<?php echo $val['image'] ?>" class="lazyloading " alt="<?php echo $val['title'] ?>">
                  </a>
                  <div class="info">
                    <h3 class="title">
                      <a href="<?php echo $val['canonical'] ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a>
                    </h3>
                    <div class="created_at"> <?php echo gettime($val['created_at'],'H:m:s - d/m/Y') ?></div>
                    <div class="description"> <?php echo $val['description'] ?></div>
                    <div class="readmore">
                      <a href="<?php echo $val['canonical'] ?>" class="btn-readmore" title="<?php echo $val['title'] ?>">Chi tiết »</a>
                    </div>
                  </div>
                </div>
              <?php }} ?>
                <div class="uk-pagination">
                <?php  echo (isset($article['pagination'])) ? $article['pagination']  : ''; ?>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>