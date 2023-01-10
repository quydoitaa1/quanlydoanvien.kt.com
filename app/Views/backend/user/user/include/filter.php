<form action="" method="">
    <div class="uk-flex uk-flex-middle uk-flex-space-between mb20">
        <div class="perpage">
           <!-- <div class="uk-flex uk-flex-middle mb10">
            <select name="perpage" class="form-control input-sm perpage filter mr10">
               <?php //for($i = 20; $i <= 200; $i+= 20){?>
                  <option value="<?php //echo $i; ?>"><?php //echo $i; ?> bản ghi</option>
               <?php //} ?>
            </select>
           </div> -->
        </div>
        <div class="toolbox">
           <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <div class="filter">
            <div class="uk-grid uk-grid-collapse " >
                <?php if($idLogin == '1' || $idLogin == '7'){ ?>
                <div class="uk-width-1-3">
                <?php echo form_dropdown('user_catalogue_id', $userCatalogue, set_value('user_catalogue_id', (request()->getGet('user_catalogue_id')) ? request()->getGet('user_catalogue_id') : 0), 'class="form-control" style="margin: 0 0 10px 0;"'); ?>
                </div>
                <?php } ?>
                <div class="uk-width-1-3">
                    <?php echo form_dropdown('union_position', UNION_POSITION, set_value('union_position', (request()->getGet('union_position')) ? request()->getGet('union_position') : 0), 'class="form-control" style="margin: 0 0 10px 0;"');?>
                </div>
                <div class="uk-width-1-3">
                    <?php echo form_dropdown('gender', GENDER, set_value('gender', (request()->getGet('gender')) ? request()->getGet('gender') : 0), 'class="form-control" style="margin: 0 0 10px 0;"');?>
                </div>
                <div class="uk-width-1-3">
                    <script>
                        var faculty_id = '<?php echo (isset($_POST['faculty_id'])) ? $_POST['faculty_id'] : ((request()->getGet('faculty_id')) ? request()->getGet('faculty_id') : 0); ?>';
                    </script>
                    <?php echo form_dropdown('faculty_id', $faculty, set_value('faculty_id', (request()->getGet('faculty_id')) ? request()->getGet('faculty_id') : 0), 'class="form-control " id = "faculty" style="margin: 0 0 10px 0;"');?>
                </div>
                <div class="uk-width-1-3">
                    <script>var class_id = '<?php echo (isset($_POST['class_id'])) ? $_POST['class_id'] : ((request()->getGet('class_id')) ? request()->getGet('class_id') : 0); ?>'</script>
                    <select name="class_id" id="class" class="form-control" style="margin: 0 0 10px 0;">
                        <option value="0">Chọn Chi Đoàn</option>
                    </select>
                </div>
                <div class="uk-width-1-3">

                </div>
            </div>

                
                
            </div>
                    
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
                <div class="uk-button mr10">
                    <a href="<?php echo base_url(route('backend.user.user.create')) ?>" class="btn btn-danger btn-sm"><i class="fa fa-plus"></i> Thêm thành viên mới</a>
                </div>
                <div class="uk-button">
                    <a href="<?php echo base_url(route('backend.user.user.createexcel')) ?>" class="btn btn-w-m btn-info"><i class="fa fa-upload"></i> Thêm danh sách mới</a>
                </div>
           </div>
        </div>
    </div>
</form>
