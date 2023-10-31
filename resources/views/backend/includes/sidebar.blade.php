<aside class="sidebar-wrapper">
    <div class="iconmenu"> 
      <div class="nav-toggle-box">
        <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
      </div>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Application">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-grid-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Widgets">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-briefcase-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="eCommerce">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Components">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-components" type="button"><i class="bi bi-bookmark-star-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Forms">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-forms" type="button"><i class="bi bi-file-earmark-break-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Tables">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-tables" type="button"><i class="bi bi-file-earmark-spreadsheet-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-authentication" type="button"><i class="bi bi-lock-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Icons">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-icons" type="button"><i class="bi bi-cloud-arrow-down-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Content">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-content" type="button"><i class="bi bi-cone-striped"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Charts">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-charts" type="button"><i class="bi bi-pie-chart-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Maps">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-maps" type="button"><i class="bi bi-pin-map-fill"></i></button>
        </li>
        <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pages" type="button"><i class="bi bi-award-fill"></i></button>
        </li>
      </ul>
    </div>
    <div class="textmenu">
      <div class="brand-logo">
        <img src="{{asset('/')}}backend-assets/assets/images/brand-logo-2.png" width="140" alt=""/>
      </div>
      <div class="tab-content">
        <div class="tab-pane fade" id="pills-dashboards">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Dashboards</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="{{ route('dashboard') }}" class="list-group-item"><i class="bi bi-cart-plus"></i>Dashboard</a>
            <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>
            <a href="index3.html" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>
            <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>
            <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-application">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Categories</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="{{ route('categories.create') }}" class="list-group-item"><i class="bi bi-envelope"></i>Add Category</a>
            <a href="{{ route('categories.index') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Category</a>
          
          </div>
        </div>
        <div class="tab-pane fade" id="pills-widgets">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Products</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="{{ route('products.create') }}" class="list-group-item"><i class="bi bi-box"></i>Add Product</a>
            <a href="{{ route('products.index') }}" class="list-group-item"><i class="bi bi-bar-chart"></i>Manage Product</a>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-ecommerce">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">eCommerce</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="ecommerce-products-list.html" class="list-group-item"><i class="bi bi-box-seam"></i>Products List</a>
            <a href="ecommerce-products-grid.html" class="list-group-item"><i class="bi bi-box-seam"></i>Products Grid</a>
            <a href="ecommerce-products-categories.html" class="list-group-item"><i class="bi bi-card-text"></i>Products Categories</a>
            <a href="ecommerce-orders.html" class="list-group-item"><i class="bi bi-plus-square"></i>Orders</a>
            <a href="ecommerce-orders-detail.html" class="list-group-item"><i class="bi bi-handbag"></i>Orders Detail</a>
            <a href="ecommerce-add-new-product.html" class="list-group-item"><i class="bi bi-handbag"></i>Add New Product</a>
            <a href="ecommerce-add-new-product-2.html" class="list-group-item"><i class="bi bi-handbag"></i>Add New Product 2</a>
            <a href="ecommerce-transactions.html" class="list-group-item"><i class="bi bi-handbag"></i>Transactions</a>
          </div>
        </div>
     
        <div class="tab-pane fade" id="pills-forms">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Forms</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="form-elements.html" class="list-group-item"><i class="bi bi-award"></i>Form Elements</a>
            <a href="form-input-group.html" class="list-group-item"><i class="bi bi-back"></i>Input Groups</a>
            <a href="form-layouts.html" class="list-group-item"><i class="bi bi-bookmark-check"></i>Form Layouts</a>
            <a href="form-validations.html" class="list-group-item"><i class="bi bi-broadcast-pin"></i>Form Validations</a>
            <a href="form-file-upload.html" class="list-group-item"><i class="bi bi-cloud-upload"></i>File Upload</a>
            <a href="form-date-time-pickes.html" class="list-group-item"><i class="bi bi-calendar-date"></i>Date Pickers</a>
            <a href="form-select2.html" class="list-group-item"><i class="bi bi-check2-circle"></i>Select2</a>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-tables">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Tables</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="table-basic-table.html" class="list-group-item"><i class="bi bi-table"></i>Basic Tables</a>
            <a href="table-advance-tables.html" class="list-group-item"><i class="bi bi-basket3"></i>Advance Tables</a>
            <a href="table-datatable.html" class="list-group-item"><i class="bi bi-graph-up"></i>Data Tables</a>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-authentication">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Authentication</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="authentication-signin.html" class="list-group-item"><i class="bi bi-easel"></i>Sign In</a>
            <a href="authentication-signin-with-header-footer.html" class="list-group-item d-flex align-items-center"><i class="bi bi-eject"></i>Sign In with Header & Footer</a>
            <a href="authentication-signup.html" class="list-group-item"><i class="bi bi-emoji-heart-eyes"></i>Sign Up</a>
            <a href="authentication-signup-with-header-footer.html" class="list-group-item d-flex align-items-center"><i class="bi bi-eye"></i>Sign Up with Header & Footer</a>
            <a href="authentication-forgot-password.html" class="list-group-item"><i class="bi bi-file-earmark-code"></i>Forgot Password</a>
            <a href="authentication-reset-password.html" class="list-group-item"><i class="bi bi-gem"></i>Reset Password</a>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-icons">
          <div class="list-group list-group-flush">
            <div class="list-group-item">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-0">Icons</h5>
              </div>
              <small class="mb-0">Some placeholder content</small>
            </div>
            <a href="icons-line-icons.html" class="list-group-item"><i class="bi bi-brightness-low"></i>Line Icons</a>
            <a href="icons-boxicons.html" class="list-group-item"><i class="bi bi-chat"></i>Boxicons</a>
            <a href="icons-feather-icons.html" class="list-group-item"><i class="bi bi-droplet"></i>Feather Icons</a>
          </div>
        </div>
      </div>
    </div>
 </aside>
 <!--start sidebar -->