<?php
    require_once '../../controler/db.php';
    $q = "select name from category";
    $db = new db;
    $db->connect();
    $category = $db->query($q);
    session_start();
    $seller = $_SESSION['id'];
    $sellerQ = "select name from user where UserID = '$seller'";
    $res1 = $db->query($sellerQ);
    $s = $res1[0]['name'];
    if(isset($_POST['name']) && isset($_POST['brand']) && isset($_POST['quantity']) && isset($_POST['price']) && isset($_FILES["img"]) && isset($_POST['description']) && isset($_POST['cat'])){
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $cat = $_POST['cat'];
        $location = "../images/" . $_FILES["img"]["name"];
        if(move_uploaded_file($_FILES["img"]["tmp_name"],$location))
            echo "done.";
        else
            echo "felt sorry";
            if($db->connect()){
                $query = "INSERT INTO `product` (`productID`, `name`, `brand`, `description`, `price`, `quantity`, `rate`, `adminID`, `sellerID`, `img`, `categoryID`) 
                VALUES (NULL, '". $name ."', '". $brand . "', '". $description . "', '". $price . "', '". $quantity . "', '0', '". $seller . "', '". $seller . "',' ". $location . "',' ". $cat . "');";
                $db->insert($query);
                echo "added successfuly";
            }

            
        }

?>
<htmllang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>sellers - add product</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">AZ</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

 
            <!-- Misc -->
            <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">add products/</span> <?php echo $s ?></h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">add product</h5>
                    </div>
                    <div class="card-body">
                      <form action="#" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Product Name</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="mobile" name="name"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Brand</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="Aplle Inc." name="brand"/>
                        </div>
                        <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">category</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" name = "cat">
                          <option selected>Open this select menu</option>
                          <?php
                            for($i = 0; $i< count($category); $i++){
                                ?>
                            }
                          <option  value="<?php echo $i  ?>" > <?php  echo $category[$i]['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                      </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-email">quantity</label>
                          <div class="input-group input-group-merge">
                            <input type="text" class="form-control" id="basic-default-company" placeholder="10" name="quantity"/>
                          </div>
                          <div class="form-text">You can't use letters, numbers only</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Price <span>($)</span></label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="100" name="price"/>
                        </div> 
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">image</label>
                          <div class="form-text">must be less than 16 MB</div>
                          <input type="file" class="form-control" id="basic-default-company"name="img"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Description</label>
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            placeholder="size:   &   specifications"
                            name="description"
                          ></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">add</button>
                        <a href="../sellers/seller.php"> <button type="button" class="btn btn-primary"> back</button></a>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
