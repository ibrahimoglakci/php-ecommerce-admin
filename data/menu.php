<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=SITE?>" class="brand-link">
      <i class="fas fa-user-cog" style="margin-left:25px; "></i>
      <span class="brand-text font-weight-light" style="margin-left: 6px;">Yönetim Paneli</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=SITE?>/img/pp.png" class="img-circle elevation-2 pp" alt="User Image"><i class="fas fa-camera kamera"></i>
        </div>
        <style type="text/css">
          .kamera {
            margin-left: -25px;
            color: #111;
            opacity: -1;
          }
          .image:hover{
            opacity: 0.5;
            cursor: pointer;
          }
          .image:hover .kamera{
            opacity: 1;
          }
        </style>
        <div class="info">
          <a href="#" class="d-block" style="margin-left: 10px;"><?=$_SESSION["adsoyad"]?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?=SITE?>modul-ekle" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Modül Ekle
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?=SITE?>banner-liste" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Banner
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=SITE?>kategori-liste" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategoriler
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=SITE?>urun-liste" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ürünler
               
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Sayfalar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             <?php
			 $moduller=$VT->VeriGetir("moduller","WHERE durum=?",array(1),"ORDER BY ID ASC");
			 if($moduller!=false)
			 {
				 for($i=0;$i<count($moduller);$i++)
				 {
					 ?>
                      <li class="nav-item">
                        <a href="<?=SITE?>liste/<?=$moduller[$i]["tablo"]?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p><?=$moduller[$i]["baslik"]?></p>
                        </a>
                      </li>
                     <?php
				 }
			 }
			 ?>
             
             
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=SITE?>seo-ayarlari" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Seo Ayarları
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?=SITE?>iletisim-ayarlari" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                İletişim Ayarları
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="<?=SITE?>cikis" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Çıkış Yap
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>