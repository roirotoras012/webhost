
<head>
    <title>EasyTour</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/modified.css';?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
</head> 
    <body style="background-color: #F5F5F5">
        <div class="navbar navbar-dark bg-dark easytournav">
            <div class="container">
                <a href="#" class="navbar-brand"> EASYTOUR</a>
                <a href="<?php echo base_url(); ?>auth/logout" class="easyfont"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i>Logout</a>
            </div>
        </div>
        <div class="row">

          <div class="sidebar-sticky col-lg-2 offset-lg-1 col-md-12 col-sm-12" style="background-color: white;width: 20%;border-radius: 8px;margin-top: 30px;margin-right: 20px;padding-top: 55px;">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link easyleads" href="<?php echo base_url().'enterprise/get';?>">

                  Enterprises
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link easyleads active" href="<?php echo base_url().'establishmentcategory/get';?>">
                  Establishment Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link easyleads" href="<?php echo base_url().'establishmentsubcategory/get';?>">
                  Establishment Sub Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link easyleads" href="<?php echo base_url().'rating/get';?>">
                   Ratings
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link easyleads" href="<?php echo base_url().'useraccounts/get';?>">
                   Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link easyleads" href="<?php echo base_url().'Establishment/all';?>">
                  Establishments
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link easyleads" href="<?php echo base_url().'route/all';?>">
                   Routes
                </a>
              </li>
          
            </ul>
      </div>