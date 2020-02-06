<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/back/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Simla Beken</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>


    <ul class="sidebar-menu" data-widget="tree">
      <li class="header text-red">YÖNETİM PANELİ</li>


      <li class="treeview">
        <a href="<?php echo base_url('yonetim'); ?>">
          <i class="fa fa-dashboard"></i> <span>Anasayfa</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i>
          <span>Genel Ayarlar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/ayarlar') ?>"><i class="fa fa-circle-o"></i> Site Ayarları</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Sosyal Medya Ayarları</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-indent"></i>
          <span>Kategoriler</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i>Kategori Listesi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-newspaper-o"></i>
          <span>Yazılar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i>Yazı Listesi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span>Mesajlar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i>Mesaj Listesi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments"></i>
          <span>Yorumlar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i>Yorum Listesi</a></li>
        </ul>
      </li>

      <li class="header text-red">BUTTONS</li>
      <li><a href="<?php echo base_url('yonetim/cikis') ?>"><i class="fa fa-circle-o text-red"></i> <span>Çıkış Yap</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
