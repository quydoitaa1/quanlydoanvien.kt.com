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
                <div class="form-row cat-wrap" style="margin-right: 20px;">
                    <script>
                        var semester_1_id = '<?php echo (isset($_POST['semester_1_id'])) ? $_POST['semester_1_id'] : ((request()->getGet('semester_1_id')) ? request()->getGet('semester_1_id') : ''); ?>';
                    </script>
                    <?php echo form_dropdown('semester_1_id', $dropdown, set_value('semester_1_id', (request()->getGet('semester_1_id')) ? request()->getGet('semester_1_id') : ''), 'class="form-control select2 m-b " id = "semester_1_id"');?>                
                </div>
                <div class="form-row cat-wrap">
                    <script>
                        var semester_2_id = '<?php echo (isset($_POST['semester_2_id'])) ? $_POST['semester_2_id'] : ((request()->getGet('semester_2_id')) ? request()->getGet('semester_2_id') : ''); ?>'
                    </script>
                    <select name="semester_2_id" id="semester_2_id" class="form-control m-b location select2">
                        <option value="0">Chọn Học Kì</option>
                    </select>
                </div>
                <div class="uk-search uk-flex uk-flex-middle mr10 ml10">
                    <div class="input-group">
                       <input type="text" name="keyword" value="<?php echo (request()->getGet('keyword')) ? request()->getGet('keyword') : ''; ?>" placeholder="Nhập từ khóa muốn tìm kiếm ..." class="form-control">
                       <span class="input-group-btn">
                           <button type="submit" name="search" value="search" class="btn btn-primary mb0 btn-sm">Tìm Kiếm
                       </button>
                       </span>
                    </div>
                </div>

           </div>
        </div>
    </div>
</form>
