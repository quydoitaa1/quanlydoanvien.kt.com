<div class="article-catalogue">
      <div class="breadcrumb-panel">
        <div class="uk-container-center uk-container">
          <ul class="uk-breadcrumb uk-clearfix ">
            <li class="breadcrumb-home">
              <a href="index.html">
                <i class="fa fa-home"></i> Trang chủ </a>
            </li>
            <li class="">
              <a href="chuong-trinh-su-kien.html">
                <span>Chương trình - sự kiện</span>
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
                    <span>Năm học</span>
                    <?php echo form_dropdown('level_education', LEVEL_EDUCATION, set_value('level_education', (isset($user['level_education'])) ? $user['level_education'] : ''), 'class="form-control m-b "');?>
                  </div>
                  <div class="wrap-filter-item uk-clearfix mb10">
                    <span>Học Kỳ</span>
                    <?php echo form_dropdown('level_education', LEVEL_EDUCATION, set_value('level_education', (isset($user['level_education'])) ? $user['level_education'] : ''), 'class="form-control m-b "');?>
                  </div>
                  <div class="wrap-filter-item uk-clearfix mb10">
                  <span>Đơn vị tổ chức</span>
                    <?php echo form_dropdown('level_education', LEVEL_EDUCATION, set_value('level_education', (isset($user['level_education'])) ? $user['level_education'] : ''), 'class="form-control m-b "');?>

                  </div>
                  <div class="wrap-filter-item uk-clearfix mb10">
                    <button class="btn btn-submit-filter" type="submit">Tìm kiếm</button>
                  </div>
                </form>
            </div>
            <div class="uk-width-large-3-4">
              <div class="title-catalogue uk-text-center"><?php //echo $event['catalogue_title'] ?></div>
              <div class="page-list">
              <?php if(isset($event['list']) && is_array($event['list']) && count($event['list'])){ ?>
              <?php foreach ($event['list'] as $key => $val) {?>
                <div class="article uk-clearfix">
                  <a href="<?php echo $val['canonical'].HTSUFFIX ?>" class="image img-cover">
                    <img data-src="<?php echo $val['image'] ?>" src="<?php echo $val['image'] ?>" class="lazyloading " alt="<?php echo $val['title'] ?>">
                  </a>
                  <div class="info">
                    <h3 class="title">
                      <a href="<?php echo $val['canonical'].HTSUFFIX ?>" title="<?php echo $val['title'] ?>"><?php echo $val['title'] ?></a>
                    </h3>
                    <div class="created_at"> <?php echo gettime($val['created_at'],'H:m:s - d/m/Y') ?></div>
                    <div class="description"> <?php echo $val['description'] ?></div>
                    <div class="readmore">
                      <a href="<?php echo $val['canonical'].HTSUFFIX ?>" class="btn-readmore" title="<?php echo $val['title'] ?>">Chi tiết »</a>
                    </div>
                  </div>
                </div>
              <?php }} ?>
                <div class="pagination">
                <?php  echo (isset($event['pagination'])) ? $event['pagination']  : ''; ?>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>