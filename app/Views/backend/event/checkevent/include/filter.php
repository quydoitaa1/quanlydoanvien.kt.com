<form action="" method="">
    <div class="uk-flex uk-flex-middle uk-flex-space-between mb20">
      <div class="perpage">
        <div class="uk-flex uk-flex-middle mb10">
             <select name="perpage" class="form-control input-sm perpage filter mr20">
                 <?php for($i = 20; $i <= 200; $i+= 20){?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?> bản ghi</option>
                 <?php } ?>
             </select>
        </div>
     </div>
        <div class="toolbox">
           <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="form-row cat-wrap">
                    <?php echo form_dropdown('semester_id', $dropdown, set_value('semester_id', (request()->getGet('semester_id')) ? request()->getGet('semester_id') : ''), 'class="form-control  mr10" style="width:220px;"');?>
                </div>
                <div class="uk-search uk-flex uk-flex-middle mr10 ml10">
                    <div class="input-group">
                       <input type="text" name="keyword" value="<?php echo (request()->getGet('keyword')) ? request()->getGet('keyword') : ''; ?>" placeholder="Nhập từ khóa muốn tìm kiếm ..." class="form-control">
                       <span class="input-group-btn">
                           <button type="submit" name="search" value="search" class="btn btn-success mb0 btn-sm">Tìm Kiếm
                       </button>
                       </span>
                    </div>
                </div>
                <!-- <div class="uk-button">
                    <a href="<?php //echo base_url(route('backend.event.event.create')) ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i>Thêm Mới</a>
                </div> -->
           </div>
        </div>
    </div>
</form>
