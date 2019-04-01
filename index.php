<?php
require_once("header.php");
?>

<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <!-- Stats -->
      <div class="row match-height">
        <div class="col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">LPG 3Kg</h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload" id="r3kg"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">
                <canvas id="3kg" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">LPG 5.5Kg</h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>                
                  <li><a data-action="reload" id="r5kg"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">
                <canvas id="5kg" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">LPG 12Kg</h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload" id="r12kg"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">
                <canvas id="12kg" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Stats -->
      <!--Product sale & buyers -->
      <div class="row match-height hidden">
        <div class="col-xl-8 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Products Sales</h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show">
              <div class="card-body">
                <div id="products-sales" class="height-300"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Recent Buyers</h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content collapse show px-1">
              <div id="recent-buyers" class="media-list height-300 position-relative">
                <a href="#" class="media border-0">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-md avatar-online">
                      <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-7.png"
                      alt="Generic placeholder image">
                      <i></i>
                    </span>
                  </div>
                  <div class="media-body w-100">
                    <h6 class="list-group-item-heading">Kristopher Candy
                      <span class="font-medium-4 float-right pt-1">$1,021</span>
                    </h6>
                    <p class="list-group-item-text mb-0">
                      <span class="badge badge-primary">Electronics</span>
                      <span class="badge badge-warning ml-1">Decor</span>
                    </p>
                  </div>
                </a>
                <a href="#" class="media border-0">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-md avatar-away">
                      <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-8.png"
                      alt="Generic placeholder image">
                      <i></i>
                    </span>
                  </div>
                  <div class="media-body w-100">
                    <h6 class="list-group-item-heading">Lawrence Fowler
                      <span class="font-medium-4 float-right pt-1">$2,021</span>
                    </h6>
                    <p class="list-group-item-text mb-0">
                      <span class="badge badge-danger">Appliances</span>
                    </p>
                  </div>
                </a>
                <a href="#" class="media border-0">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-md avatar-busy">
                      <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-9.png"
                      alt="Generic placeholder image">
                      <i></i>
                    </span>
                  </div>
                  <div class="media-body w-100">
                    <h6 class="list-group-item-heading">Linda Olson
                      <span class="font-medium-4 float-right pt-1">$1,112</span>
                    </h6>
                    <p class="list-group-item-text mb-0">
                      <span class="badge badge-primary">Electronics</span>
                      <span class="badge badge-success ml-1">Office</span>
                    </p>
                  </div>
                </a>
                <a href="#" class="media border-0">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-md avatar-online">
                      <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-10.png"
                      alt="Generic placeholder image">
                      <i></i>
                    </span>
                  </div>
                  <div class="media-body w-100">
                    <h6 class="list-group-item-heading">Roy Clark
                      <span class="font-medium-4 float-right pt-1">$2,815</span>
                    </h6>
                    <p class="list-group-item-text mb-0">
                      <span class="badge badge-warning">Decor</span>
                      <span class="badge badge-danger ml-1">Appliances</span>
                    </p>
                  </div>
                </a>
                <a href="#" class="media border-0">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-md avatar-online">
                      <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-11.png"
                      alt="Generic placeholder image">
                      <i></i>
                    </span>
                  </div>
                  <div class="media-body w-100">
                    <h6 class="list-group-item-heading">Kristopher Candy
                      <span class="font-medium-4 float-right pt-1">$2,021</span>
                    </h6>
                    <p class="list-group-item-text mb-0">
                      <span class="badge badge-primary">Electronics</span>
                      <span class="badge badge-warning ml-1">Decor</span>
                    </p>
                  </div>
                </a>
                <a href="#" class="media border-0">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-md avatar-away">
                      <img class="media-object rounded-circle" src="app-assets/images/portrait/small/avatar-s-12.png"
                      alt="Generic placeholder image">
                      <i></i>
                    </span>
                  </div>
                  <div class="media-body w-100">
                    <h6 class="list-group-item-heading">Lawrence Fowler
                      <span class="font-medium-4 float-right pt-1">$1,321</span>
                    </h6>
                    <p class="list-group-item-text mb-0">
                      <span class="badge badge-danger">Appliances</span>
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Product sale & buyers -->

    </div>
  </div>
</div>

<?php
require_once("footer.php");
?>