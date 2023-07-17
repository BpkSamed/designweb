<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h2>Delete Data</h2>
                         <p>Are you sure?</p>

                <?= form_open("karyawan/delete".$delete->id_karyawan) ?>
                <button class="btn btn-primary">Yes</button>
                <a href="<?= site_url('/karyawan') ?>">Cancel</a>
                </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>