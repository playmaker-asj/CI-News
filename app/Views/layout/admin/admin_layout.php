<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Berita Codeigniter</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>"/>

</head>
<body>
    <?= $this->include('layout/admin/navbar')?>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?= $this->renderSection('content')?>
            </div>
        </div>
    </div>

    <script src="<?= base_url('js/jquery.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
    
</body>
</html>