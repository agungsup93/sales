            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Input Data Superadmin</h3>
              </div>
			  <form name='input' method='POST' action='_module/s_addadmin.php' class='form-horizontal'>
              <div class="card-body">
				<label for="input" class="col-sm-2 control-label">Nama</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                  </div>
                  <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
				<label for="input" class="col-sm-2 control-label">Email</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="text" name="email" class="form-control" placeholder="contoh@email.com">
                </div>
				<label for="input" class="col-sm-2 control-label">Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="password">
                </div>
				<label for="input" class="col-sm-2 control-label">rePassword</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="pass" class="form-control" placeholder="password">
                  <input type="text" name="level" class="form-control" hidden value="a7u14g4w9c1h25a4i">
                </div>				
				 <div class="card-footer">
                  <button type="submit" class="btn btn-danger"><i class="fas fa-history"></i></span> Clear</button>
                  <button type="submit" name="save" class="btn btn-primary"><i class="fas fa-external-link-alt"></i></span> Submit</button>
                </div>

              </div>
			  </form>
            </div>


	