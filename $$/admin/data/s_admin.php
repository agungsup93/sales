				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
						  <th>NO</th>
						  <th>Nama</th>
						  <th>Email</th>
						  <th>Password</th>
						  <th>Action</th>
						</tr>
					</thead>
					<tbody>
					 <?php 
					 //Koneksi ke database
						$koneksi = mysqli_connect("localhost","root","","gni_projectsales");

						if (mysqli_connect_errno()){
							echo "Koneksi database gagal : " . mysqli_connect_error();
						}

						$no = 1;
						$query=mysqli_query($koneksi, "SELECT * FROM superadmin ORDER by id ASC");
						while($data=mysqli_fetch_assoc($query)) {
					?>
						<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['pass']; ?></td>
						<td>
							<center>
								<button type="button" class="btn bg-gradient-danger btn-xs">
									<a href="#" onclick="confirm_modal('_module/d_admin?&id=<?php echo $data['id'];?>');">
										<i class="nav-icon far fa-trash-alt" style="font-size:100%;color:white;" title="Hapus Data"></i>
									</a>
								</button>
							</center>
						</td>
						<?php 
						}
						?>
						</tbody>
					</table>
					
					
					

<!-------------------------------------Delete Data---------------------------------->
	<div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-danger">
              <h4 class="modal-title">Hapus Data<i>(Admin)</i></h4>
              </button>
            </div>
			
			<div class="modal-body" style="margin:0px; border-top:0px; text-align:center;">
				<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
				<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
			</div>

          </div>
        </div>
    </div>
