<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Edit Siswa</title>
  </head>
  <body>
	<div class="container" style="margin-top: 80px">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">
						EDIT SISWA
					</div>
					<div class="card-body">		
					<form action="<?php echo base_url() ?>index.php/siswa/update" method="POST">

						<input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa ?>">

 						<div class="form-group">
    						<label >NISN</label>
    						<input type="text" name="nisn" value="<?php echo $siswa->nisn ?>" class="form-control">    						 
 						</div>  				
						<div class="form-group">
    						<label >NAMA LENGKAP</label>
    						<input type="text" name="nama_lengkap" value="<?php echo $siswa->nama_lengkap ?>" class="form-control">    						 
 						</div>   		
						<div class="form-group">
    						<label >ALAMAT</label>
							<textarea class="form-control" name="alamat" rows="4"><?php echo $siswa->alamat ?></textarea>
  						</div>   
  						<button type="submit" class="btn btn-primary">UPDATE</button>
					</form>				
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
  </body>
</html>
