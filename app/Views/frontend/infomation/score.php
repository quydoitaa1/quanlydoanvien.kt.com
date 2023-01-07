<div class="n-activity">
      <div class="uk-container uk-container-center">
        <div class="n-activity-content">
          <div class="main-title "> Điểm rèn luyện</div>
          <div class="n-activity-body ">
            <ul data-uk-switcher="{connect:'#my-id'} " class="uk-flex uk-flex-center n-activity-choice-list mb20 uk-list uk-clearfix">
              <li class="mr20">
                <a href="">Điểm rèn luyện</a>
              </li>
              <li class="mr20">
                <a href="">Minh chứng chờ duyệt</a>
              </li>
              <li class="mr20">
                <a href="">Minh chứng đã duyệt</a>
              </li>
              <li class="mr20">
                <a href="">Minh chứng Không được duyệt</a>
              </li>
            </ul>
            <ul id="my-id" class="uk-switcher ">
              <li>
              <table class="uk-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Kỳ học</th>
                        <th>Số hoạt động tham gia</th>
                        <th>Điểm rèn luyện</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kì 2 Năm học 2022-2023</td>
                        <td>6</td>
                        <td>15</td>
                    </tr>
                </tbody>
            </table>
              </li>
              
              <li>
                <div class="page-list">
                  <?php if(isset($event_waiting) && is_array($event_waiting) && count($event_waiting)){ ?>
                  <div class="uk-grid uk-grid-medium">
                  <?php foreach ($event_waiting as $key => $val) {?>
                    <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                      <div class="article article-event uk-clearfix">
                        <span class="image img-scaledown">
                          <img  src="<?php echo $val['image'] ?>" class="lazyloading " alt="[Cập nhật]">
                        </span>
                        <div class="info">
                          <h3 class="title">
                            <a href="<?php echo $val['canonical'].HTSUFFIX ?>" title="<?php echo $val['title_event'] ?>">Tên sự kiện: <?php echo $val['title_event'] ?></a>
                          </h3>
                          <div class="created_at">Thời gian gửi: <?php echo gettime($val['created_at'],'H:i - d/m/Y');?></div>
                          <div class="description">Điểm khi tham gia: <?php echo $val['score'] ?> </div>
                          <div class="description">Thuộc kỳ học:  <?php echo $val['name_semester'] ?> </div>
                          <div class="readmore">
                            <a href="#form-edit-event<?php echo $val['id'] ?>" data-uk-modal class="btn-readmore" title="cập nhật">Cập nhật minh chứng</a>
                          </div>
                        </div>
                      </div>
                      <div id="form-edit-event<?php echo $val['id'] ?>" class="uk-modal">
                      <div class="uk-modal-dialog">
                        <a class="uk-modal-close uk-close"></a>
                        <div class="contact-form">
                          <h2 class="heading-2">Cập nhật minh chứng</h2>
                          <form action="" class="uk-form form" method="post">
                            <div class="form-row">
                                <label class="control-label text-left">
                                    <span class="choose-image">Ảnh Minh chứng (Click để chọn hình ảnh)</span>
                                </label>
                                <div class="avatar img-cover" style="cursor: pointer; height: 250px;">
                                    <img src="<?php echo (isset($_POST['image'])) ? $_POST['image'] :((isset($val['image']) && $val['image'] != '') ? $val['image'] : 'public/not-found.png') ?>" class="img-thumbnail" alt="">
                                </div>
                                <?php echo form_input('image', htmlspecialchars_decode(html_entity_decode(set_value('image', (isset($val['image'])) ? $val['image'] : ''))), 'class="form-control " placeholder="Đường dẫn của ảnh"  id="imageTxt"  autocomplete="off" style="display:none;" ');?>
                            </div>
                            <div class="form-row">
                              <input type="text" class="input-text" name="note" value="<?php echo isset($val['note']) ? $val['note'] : '' ?>" placeholder="Ghi chú">
                              <input type="hidden" class="input-text" name="event_user_id" value="<?php echo $val['id'] ?>" placeholder="Ghi chú">
                            </div>
                            <div class="form-row">
                              <input type="submit" class="btn-submit" value="Gửi minh chứng" name="send">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    </div>
                    <?php }?>
                  </div>
                  <?php }else{ ?>
                    <div class="error-title uk-text-center">Không có minh chứng nào!</div>
                  <?php } ?>
                </div>
              </li>
              <li>
                <div class="page-list">
                  <?php if(isset($event_accept) && is_array($event_accept) && count($event_accept)){ ?>
                  <div class="uk-grid uk-grid-medium">
                  <?php foreach ($event_accept as $key => $val) {?>
                    <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                      <div class="article article-event uk-clearfix">
                        <span class="image img-scaledown">
                          <img  src="<?php echo $val['image'] ?>" class="lazyloading " alt="[Cập nhật]">
                        </span>
                        <div class="info">
                          <h3 class="title">
                            <a href="<?php echo $val['canonical'].HTSUFFIX ?>" title="<?php echo $val['title_event'] ?>">Tên sự kiện: <?php echo $val['title_event'] ?></a>
                          </h3>
                          <div class="created_at">Thời gian gửi: <?php echo gettime($val['created_at'],'H:i - d/m/Y');?></div>
                          <div class="description">Điểm khi tham gia: <?php echo $val['score'] ?> </div>
                          <div class="description">Thuộc kỳ học:  <?php echo $val['name_semester'] ?> </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <?php }else{ ?>
                    <div class="error-title uk-text-center">Không có minh chứng nào!</div>
                  <?php } ?>
                </div>
              </li>
              <li>
                <div class="page-list">
                  <?php if(isset($event_ignore) && is_array($event_ignore) && count($event_ignore)){ ?>
                  <div class="uk-grid uk-grid-medium">
                  <?php foreach ($event_ignore as $key => $val) {?>
                    <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                      <div class="article article-event uk-clearfix">
                        <span class="image img-scaledown">
                          <img  src="<?php echo $val['image'] ?>" class="lazyloading " alt="[Cập nhật]">
                        </span>
                        <div class="info">
                          <h3 class="title">
                            <a href="<?php echo $val['canonical'].HTSUFFIX ?>" title="<?php echo $val['title_event'] ?>">Tên sự kiện: <?php echo $val['title_event'] ?></a>
                          </h3>
                          <div class="created_at">Thời gian gửi: <?php echo gettime($val['created_at'],'H:i - d/m/Y');?></div>
                          <div class="description">Điểm khi tham gia: <?php echo $val['score'] ?> </div>
                          <div class="description">Thuộc kỳ học:  <?php echo $val['name_semester'] ?> </div>
                          <div class="description" style='color: #f50000;' >Phản hồi: <?php echo $val['note_reviewer'] ?> </div>
                          <div class="readmore">
                            <a href="#form-edit-event<?php echo $val['id'] ?>" data-uk-modal class="btn-readmore" title="cập nhật">Cập nhật minh chứng</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="form-edit-event<?php echo $val['id'] ?>" class="uk-modal">
                      <div class="uk-modal-dialog">
                        <a class="uk-modal-close uk-close"></a>
                        <div class="contact-form">
                          <h2 class="heading-2">Cập nhật minh chứng</h2>
                          <form action="" class="uk-form form" method="post">
                            <div class="form-row">
                                <label class="control-label text-left">
                                    <span class="choose-image">Ảnh Minh chứng (Click để chọn hình ảnh)</span>
                                </label>
                                <div class="avatar img-cover" style="cursor: pointer; height: 250px;">
                                    <img src="<?php echo (isset($_POST['image'])) ? $_POST['image'] :((isset($val['image']) && $val['image'] != '') ? $val['image'] : 'public/not-found.png') ?>" class="img-thumbnail" alt="">
                                </div>
                                <?php echo form_input('image', htmlspecialchars_decode(html_entity_decode(set_value('image', (isset($val['image'])) ? $val['image'] : ''))), 'class="form-control " placeholder="Đường dẫn của ảnh"  id="imageTxt"  autocomplete="off" style="display:none;" ');?>
                            </div>
                            <div class="form-row">
                              <input type="text" class="input-text" name="note" value="<?php echo isset($val['note']) ? $val['note'] : '' ?>" placeholder="Ghi chú">
                              <input type="hidden" class="input-text" name="event_user_id" value="<?php echo $val['id'] ?>" placeholder="Ghi chú">
                            </div>
                            <div class="form-row">
                              <input type="submit" class="btn-submit" value="Gửi minh chứng" name="send">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                  <?php }else{ ?>
                    <div class="error-title uk-text-center">Không có minh chứng nào!</div>
                  <?php } ?>
                </div>
              </li>
              
  
            </ul>
          </div>
        </div>
      </div>
    </div>