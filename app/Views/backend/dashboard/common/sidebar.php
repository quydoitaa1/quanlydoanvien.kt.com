<nav class="navbar-default navbar-static-side" role="navigation">
   <?php
      $user = authentication();
      $uri = service('uri');
      $uri = current_url(true);
      $uriModule = $uri->getSegment(2);
      $uriModule_name = $uri->getSegment(3);
      $baseController = new App\Controllers\BaseController();
      // pre($sidebar);
      $language = $baseController->currentLanguage();
   ?>
   <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
         <li class="nav-header">
            <div class="dropdown profile-element">
               <span><img alt="image" class="img-circle" src="<?php echo $user['image']; ?>" style="min-width:48px;height:48px;" /></span>
               <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo site_url('profile') ?>">
                  <span class="clear">
                     <span class="block m-t-xs"> <strong class="font-bold" style="color:#fff"><?php echo $user['fullname'] ?></strong>
                  </span>
                  <span class="text-muted text-xs block"><?php echo $user['job'] ?> <b class="caret" style="color: #8095a8"></b></span> </span>
               </a>
               <ul class="dropdown-menu animated fadeInRight m-t-xs">
                  <li><a href="<?php echo base_url('backend/user/profile/profile/'.$user['id']) ?>">Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="<?php echo base_url('backend/authentication/auth/logout') ?>">Logout</a></li>
               </ul>
            </div>
            <div class="logo-element">QLĐV</div>
         </li>
         <li class="<?php echo ( $uriModule == 'article') ? 'active'  : '' ?>">
            <a href="index.html"><i class="fa fa-file"></i> <span class="nav-label">QL Bài Viết</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li class="<?php echo ( $uriModule_name == 'catalogue') ? 'active'  : '' ?>"><a href="<?php echo base_url('backend/article/catalogue/index') ?>">QL Nhóm Bài Viết</a></li>
               <li class="<?php echo ( $uriModule_name == 'article') ? 'active'  : '' ?>"><a href="<?php echo base_url('backend/article/article/index') ?>">QL Bài Viết</a></li>
            </ul>
         </li>
         <li class="<?php echo ( $uriModule == 'language') ? 'active'  : '' ?>">
            <a href="<?php echo base_url(route('backend.language.language.index')) ?>"><i class="fa fa-language" aria-hidden="true"></i> <span class="nav-label">QL Ngôn ngữ</span></a>
         </li>
         <li class="<?php echo ( $uriModule == 'menu') ? 'active'  : '' ?>">
            <a href="<?php echo base_url(route('backend.menu.menu.listmenu')) ?>"><i class="fa fa-bars" aria-hidden="true"></i> <span class="nav-label">QL Menu</span></a>
         </li>
         <li class="<?php echo ( $uriModule == 'system') ? 'active'  : '' ?>">
            <a href="<?php echo base_url(route('backend.system.general.index')) ?>"><i class="fa fa-cog" aria-hidden="true"></i> <span class="nav-label">Cài đặt chung</span></a>
         </li>
         <li class="<?php echo ( $uriModule == 'user') ? 'active'  : '' ?>">
            <a href="index.html"><i class="fa fa-user" aria-hidden="true"></i> <span class="nav-label">Quản lý User</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li class="<?php echo ( $uriModule_name == 'catalogue') ? 'active'  : '' ?>"><a href="<?php echo base_url('backend/user/catalogue/index') ?>">Nhóm Thành Viên</a></li>
               <li class="<?php echo ( $uriModule_name == 'user') ? 'active'  : '' ?>"><a href="<?php echo base_url('backend/user/user/index') ?>">Thành viên</a></li>
            </ul>
         </li>

         <li class="<?php echo ( $uriModule == 'organization') ? 'active'  : '' ?>">
            <a href="index.html"><i class="fa fa-users" aria-hidden="true"></i> <span class="nav-label">QL Tổ Chức</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li class="<?php echo ( $uriModule_name == 'faculty') ? 'active'  : '' ?>"><a href="<?php echo base_url(route('backend.organization.faculty.index')) ?>">QL Liên Chi Đoàn</a></li>
               <li class="<?php echo ( $uriModule_name == 'branch') ? 'active'  : '' ?>"><a href="<?php echo base_url(route('backend.organization.branch.index')) ?>">QL Chi Đoàn</a></li>
            </ul>
         </li>
         <li class="<?php echo ( $uriModule == 'event') ? 'active'  : '' ?>">
            <a href="index.html"><i class="fa fa-sitemap" aria-hidden="true"></i> <span class="nav-label">QL Hoạt Động</span> <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
               <li class="<?php echo ( $uriModule_name == 'semester') ? 'active'  : '' ?>"><a href="<?php echo base_url(route('backend.event.semester.index')) ?>">QL Học Kỳ</a></li>
               <li class="<?php echo ( $uriModule_name == 'event') ? 'active'  : '' ?>"><a href="<?php echo base_url(route('backend.event.event.index')) ?>">QL Chương Trình, Sự Kiện</a></li>
            </ul>
         </li>
      </ul>
   </div>
</nav>
