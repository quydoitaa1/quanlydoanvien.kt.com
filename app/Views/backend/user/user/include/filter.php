<form action="" method="">
    <div class="uk-flex uk-flex-middle uk-flex-space-between mb20">
        <div class="perpage">
           <div class="uk-flex uk-flex-middle mb10">
            <select name="perpage" class="form-control input-sm perpage filter mr10">
               <?php for($i = 20; $i <= 200; $i+= 20){?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?> bản ghi</option>
               <?php } ?>
            </select>
           </div>
        </div>
        <div class="toolbox">
           <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <?php echo form_dropdown('user_catalogue_id', $userCatalogue, set_value('user_catalogue_id', (request()->getGet('user_catalogue_id')) ? request()->getGet('user_catalogue_id') : 0), 'class="form-control mr10"');?>

                <div class="uk-search uk-flex uk-flex-middle mr10">
                    <div class="input-group">
                        <input
                           type="text"
                           name="keyword"
                           value="<?php echo (request()->getGet('keyword')) ? request()->getGet('keyword') : ''; ?>" placeholder="Nhập Từ khóa bạn muốn tìm kiếm..."
                           class="form-control"
                        >
                       <span class="input-group-btn">
                           <button type="submit" name="search" value="search" class="btn btn-primary mb0 btn-sm">Tìm Kiếm
                       </button>
                       </span>
                    </div>
                </div>
                <div class="uk-button">
                    <a href="<?php echo base_url(route('backend.user.user.create')) ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Thêm thành viên mới</a>
                </div>
           </div>
        </div>
    </div>
</form>