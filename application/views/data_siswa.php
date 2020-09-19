<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

	

    <title>Data Siswa</title>
  </head>
  <body>
	<div class="container" style="margin-top: 80px">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						DATA SISWA
					</div>
					<div class="card-body">		
					
					 	<table class="table table-bordered" id="myTable">
  							<thead>
    							<tr>
      							<th scope="col">NISN</th>
      							<th scope="col">NAMA LENGKAP</th>
      							<th scope="col">ALAMAT</th>
      							<th scope="col">AKSI</th>
    							</tr>
  							</thead>
  							<tbody>
								<?php
							  	foreach ($siswa->result() as $hasil) {			
								?>     							 
      							<td><?php echo $hasil->nisn ?></td>
      							<td><?php echo $hasil->nama_lengkap ?></td>
      							<td><?php echo $hasil->alamat ?></td>
								<td class="text-center">
									<a href="<?php echo base_url() ?>index.php/siswa/edit/<?php 
									echo $hasil->id_siswa ?>" class="btn btn-sm btn-primary">
									EDIT
									</a>
									<a href="<?php echo base_url() ?>index.php/siswa/hapus/<?php 
									echo $hasil->id_siswa ?>" class="btn btn-sm btn-danger">
									HAPUS
									</a>
								</td>
 								</tr>  
								<?php }
								?>
  							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready( function () {
    	$('#myTable').DataTable();
	} );
	</script>

  </body>
</html>
