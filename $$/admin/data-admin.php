<?php include "_controller/head.php";?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Dashboard Superadmin Sales</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Tambah Admin</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Data Admin</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
					<?php include "data/add_admin.php";?>
                  </div>
				  <div class="tab-pane" id="timeline">
					<?php include "data/s_admin.php";?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  
  
<?php
	include "_controller/foot.php";
	include "_controller/footer.php";
?>