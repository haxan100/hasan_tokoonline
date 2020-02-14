  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  	<section class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1>Data </h1>
  				</div>
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
  						<li class="breadcrumb-item active">Data </li>
  					</ol>
  				</div>
  			</div>
  		</div><!-- /.container-fluid -->
  	</section>

  	<div class="card">
  		<div class="card-header">
  			<h3 class="card-title">Data PT Biz</h3>
  			<br>
  			<button class="button btn-success tambah-data" data-target="#modalTambahMitra">Tambah Data</button>
  		</div>
  		<!-- /.card-header -->
  		<div class="card-body">
  			<table id="example1" class="table table-bordered table-striped">
  				<thead>
  					<tr>
  						<th>Nama</th>
  						<th>Email</th>
  						<th>Username</th>
  						<th>Password</th>
  						<th>Level Akses</th>
  					</tr>
  				</thead>
  				<tbody>
  					<tr>
  						<td>Trident</td>
  						<td>Internet
  							Explorer 4.0
  						</td>
  						<td>Win 95+</td>
  						<td> 4</td>
  						<td>X</td>
  					</tr>


  				</tbody>
  				<tfoot>
  					<tr>
  						<th>Nama</th>
  						<th>Email</th>
  						<th>Username</th>
  						<th>Password</th>
  						<th>Level Akses</th>
  					</tr>
  				</tfoot>
  			</table>
  		</div>
  		<!-- /.card-body -->
  	</div>
  	<!-- /.card -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->
  </section>
  <!-- /.content -->
  </div>
  <!-- Modal Tambah Mitra-->
  <div class="modal fade" id="modalTambahMitra" tabindex="-1" role="dialog" aria-labelledby="modalTambahMitraTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h5 class="modal-title" id="modalTambahMitraTitle">Tambah Mitra</h5>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>
  			<div class="modal-body">
  				<form id="formTambahMitra">
  					<div class="form-group">
  						<label for="inputTambahNama">Nama User <small class="text-danger"></small></label>
  						<input type="text" class="form-control" id="inputTambahNama" placeholder="Nama">
  					</div>
  					<div class="form-group">
  						<label for="inputTambahEmail">Email<small class="text-danger"></small></label>
  						<input type="text" class="form-control" id="inputTambahEmail" placeholder="Email">
  					</div>
  					<div class="form-group">
  						<label for="inputTambahUsername">Username <small class="text-danger"></small></label>
  						<input type="text" class="form-control" id="inputTambahUsername" placeholder="Username">
  					</div>
  					<div class="form-group">
  						<label for="inputTambahPassword">Password <small class="text-danger"></small></label>
  						<input type="text" class="form-control" id="inputTambahPassword" placeholder="Password">
  					</div>
  					<div class="form-group">
  						<label for="inputTambahMitra">akses_level <small class="text-danger"></small></label>
  						<input type="text" class="form-control" id="inputTambahMitra" placeholder="Level">
  					</div>
  				</form>
  			</div>
  			<div class="modal-footer">
  				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
  				<button type="button" class="btn btn-success" id="tambahMitra"><i class="fas fa-check"></i> Tambahkan User</button>
  			</div>
  		</div>
  	</div>
  </div>

  <footer class="main-footer">
  	<div class="float-right d-none d-sm-block">
  		<b>Version</b> 3.0.1
  	</div>
  	<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
  	reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  	<!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <script>
  	$(document).ready(function() {
  		// Button Tambah Mitra
  		$('.tambah-data').on('click', function() {
  			$('#modalTambahMitra').modal('show');

  			// console.log("helo");


  		});



  	});
  </script>
