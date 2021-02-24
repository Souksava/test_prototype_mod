<?php
//    session_start();
//     if($_SESSION['ses_id'] == ''){
//         echo"<meta http-equiv='refresh' content='1;URL=../index.html'>";
//     }
//     else if($_SESSION['auther_id'] != 2){
//         echo"<meta http-equiv='refresh' content='1;URL=../Check/logout.php'>";
//     }
//     else{

//     }
$user = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo $path; ?>image/logo.png">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tcususdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo $path ?>plugins/tcususdominus-bootstrap-4/css/tcususdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/alt/style.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo $path ?>dist/js/sweetalert.min.js"></script>

</head>



<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light font14">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link"><?php echo $title; ?></a>
                </li>
            </ul>

            <?php
// input text search in header 
  if ($title == "ຂໍ້ມູນພະນັກງານ"){
echo '<form action="employee" class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" name="search" id="search" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
            </div>
        </div>
      </form>';
}
else{
echo"";
}




    ?>

            <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="ຄົ້ນຫາ" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 font14">
            <!-- Brand Logo -->
            <a href="../main" class="brand-link">
                <img src="<?php echo $path ?>image/logo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ກະຊວງສຶກສາທິການ</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <?php
            if($_SESSION['img_path'] == ''){
              ?>
              <img src="<?php echo $path ?>image/image.jpeg" class="img-circle elevation-2" alt="User Image">
              <?php

            }
            else{
              ?>
                   <img src="<?php echo $path ?>image/<?php echo $_SESSION['img_path'] ?>" class="img-circle elevation-2" alt="User Image">
              <?php
            }
          ?> -->

                        <img src="<?php echo $path ?>image/image.jpeg" class="img-circle elevation-2" alt="User Image">

                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php // echo $_SESSION['emp_name'] ?>username</a>
                    </div>
                </div>



                <?php 
if ($user == 1){
echo '
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ຈັດການຟາຍ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'file/type" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ຈັດການປະເພດຟາຍ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'file/upload" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ອັບໂຫຼດຟາຍ</p>
                                    </a>
                                </li>
                            </ul>

                        </li>




                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ຈັດການຂໍ້ມູນຫຼັກ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'data/group" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ຈັດການຂໍ້ມູນກົມ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'data/university" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ຈັດການຂໍ້ມູນມະຫາໄລ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        
                        <li class="nav-item">
                            <a href="'.$links.'period/year" class="nav-link">
                                <i class="fas fa fa-book nav-icon"></i>
                                <p>
                                    ເປີດສົກຮຽນ
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ແບ່ງປັນທຶນການສຶກສາ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'divide/share" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ແບ່ງປັນທຶນ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'divide/distribute" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ແຈກຢາຍທຶນ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ແກ້ໄຂການແຈກຢາຍ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'edit/edit-share" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ແກ້ໄຂການແບ່ງປັນ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'edit/edit-distribute" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ແກ້ໄຂການແຈກຢາຍ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    ລາຍງານ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'report/report-supply" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານແຜນຮັບ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'report/report-demand" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານແຜນສ້າງ</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="'.$links.'report/report-hrd" class="nav-link">
                                        <i class="far fas fa-book nav-icon"></i>
                                        <p>ລາຍງານການແບ່ງປັນ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                                <i class="nav-icon fas fa-power-off"></i>
                                <p>
                                    ອອກຈາກລະບົບ
                                </p>
                            </a>
                        </li>
                    </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
                    
                    ';
}
elseif($user == 2){
    echo '
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->


            
            <li class="nav-item">
                <a href="'.$links.'create/new-demand" class="nav-link">
                    <i class="fas fa fa-book nav-icon"></i>
                    <p>
                        ສະເໜີແຜນສ້າງ
                    </p>
                </a>
            </li>


            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        ລາຍງານ
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'report/report-demand" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ລາຍງານແຜນສ້າງ</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'report/report-hrd" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ລາຍງານການແບ່ງປັນ</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>
                        ອອກຈາກລະບົບ
                    </p>
                </a>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

    ';
}
elseif ($user == 3){
    echo '
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->

   <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        ຈັດການຂໍ້ມູນຫຼັກ
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'data/faculty" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ຈັດການຂໍ້ມູນຄະນະ</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'data/course" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ຈັດການຂໍ້ມູນສາຂາວິຊາ</p>
                        </a>
                    </li>
                </ul>

            </li>
 
            <li class="nav-item">
                <a href="'.$links.'create/new-supply" class="nav-link">
                    <i class="fas fa fa-book nav-icon"></i>
                    <p>
                        ສ້າງແຜນຮັບ
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        ລາຍງານ
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'report/report-supply" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ລາຍງານແຜນຮັບ</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'report/report-hrd" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ລາຍງານການແບ່ງປັນ</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>
                        ອອກຈາກລະບົບ
                    </p>
                </a>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

    ';
}
elseif ($user == 4){
    echo '
    
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->

   <li class="nav-item">
   <a href="'.$links.'data/user" class="nav-link">
   <i class="fas fa fa-book nav-icon"></i>
   <p>
   ຈັດການຂໍ້ມູນຜູ້ໃຊ້ລະບົບ
   </p>
   </a>
</li>

   <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        ແກ້ໄຂການແບ່ງປັນທຶນ
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'edit/share" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ແກ້ໄຂການແບ່ງປັນ</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="'.$links.'edit/distribute" class="nav-link">
                            <i class="far fas fa-book nav-icon"></i>
                            <p>ແກ້ໄຂການແຈກຢາຍ</p>
                        </a>
                    </li>
                </ul>

            </li>


            <li class="nav-item">
                <a href="'.$links.'edit/edit-demand" class="nav-link">
                <i class="fas fa fa-book nav-icon"></i>
                <p>
                    ແກ້ໄຂແຜນສ້າງນັກຮຽບ
                </p>
                </a>
            </li>

            <li class="nav-item">
            <a href="'.$links.'edit/edit-supply" class="nav-link">
                <i class="fas fa fa-book nav-icon"></i>
                <p>
                    ແກ້ໄຂແຜນຮັບນັກຮຽບ
                </p>
            </a>
        </li>



            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>
                        ອອກຈາກລະບົບ
                    </p>
                </a>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

    ';
}else{
    echo '';
}
?>
                <form action="../Check/Logout.php" method="POST" id="formLogout">
                    <div class="modal fade font14" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" align="center">
                                    ທ່ານຕ້ອງການອອກຈາກລະບົບ ຫຼື ບໍ່ ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-dismiss="modal">ຍົກເລີກ</button>
                                    <button type="submit" name="btnLogout"
                                        class="btn btn-outline-danger">ອອກຈາກລະບົບ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="main-footer">