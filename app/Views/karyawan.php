<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data Karyawan</b>
            </div>
			
			<a href="<?= base_url("/karyawan/add")?> " class="btn btn-primary">Tambah Karyawan</a>
			
        <a class="btn btn-danger" href="<?= base_url(); ?>karyawan/delete/<?= $row->id_karyawan; ?>"><i class="bi bi-trash3"></i> Hapus</a>
		
		<a class="btn btn-warning" href="<?= base_url(); ?>karyawan/edit/<?= $row->id_karyawan; ?>"><i class="bi bi-trash3"></i> Edit</a>
		
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Telp</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                       
                    </tr>
                    <?php
                    foreach ($karyawan as $row) : ?>
                        <tr>
                            <td><?php echo $row->id_karyawan; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->jenis_kelamin; ?></td>
                            <td><?php echo $row->no_telp; ?></td>
                            <td><?php echo $row->tanggal_lahir; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
     <?= $pager->links() ?>
            </div>
        </div>
    </div>
</body>
</html>