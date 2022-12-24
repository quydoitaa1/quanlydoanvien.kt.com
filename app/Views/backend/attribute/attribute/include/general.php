<div class="ibox-content">
   <div class="row mb15">
      <div class="col-lg-12">
         <div class="form-row">
            <label class="control-label text-left">
               <span>Tiêu đề <b class="text-danger">(*)</b></span>
            </label>
            <?php echo form_input('title', validate_input(set_value('title', (isset($attribute['title'])) ? $attribute['title'] : '')), 'class="form-control '.(($method == 'create') ? 'title' : '').'" placeholder="" id="title" autocomplete="off"'); ?>
         </div>
      </div>
   </div>
   <div class="row mb15">
      <div class="col-lg-12">
         <div class="form-row form-description">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
               <label class="control-label text-left">
                  <span>Mô tả ngắn</span>
               </label>
               <a href="" title="" data-target="description" class="uploadMultiImage">Click để upload hình ảnh</a>
            </div>
            <?php echo form_textarea('description', htmlspecialchars_decode(html_entity_decode(set_value('description', (isset($attribute['description'])) ? $attribute['description'] : ''))), 'class="form-control ck-editor" id="description" placeholder="" autocomplete="off"');?>

         </div>
      </div>
   </div>

   <div class="row mb15">
      <div class="col-lg-12">
         <div class="form-row">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
               <label class="control-label text-left">
                  <span>Nội dung</span>
               </label>
               <a href="" title="" data-target="content" class="uploadMultiImage">Click để upload hình ảnh</a>
            </div>
            <?php echo form_textarea('content', htmlspecialchars_decode(html_entity_decode(set_value('content', (isset($attribute['content'])) ? $attribute['content'] : ''))), 'class="form-control ck-editor" id="content" placeholder="" autocomplete="off"');?>
         </div>
      </div>
   </div>
</div>
