<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script> -->
    <script href="<?= base_url('plugins/bootstrap/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script href="<?= base_url('plugins/jquery/jquery.min.js'); ?>" type="text/javascript"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="col-lg-8" style="border-right: 1px solid black;">
            <h1>Data Menu</h1>
            <div class="row">

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody id="data">
                </tbody>
            </table>

        </div>
        <div class="col-lg-4">
            <h3 id="txtTambah">Tambah Data</h3>
            <h3 id="txtEdit">Edit Data <i class="fa fa-times" style="color:red" id="btnClose"></i></h3>
            <div class="">
                <br>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="price">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="description">
                </div>

                <div class="form-group" hidden>
                    <label>Deskripsi</label>
                    <input type="number" class="form-control" name="menuid">
                </div>
                <button class="btn btn-success" id="btnTambah">Tambah</button>
                <button class="btn btn-success" id="btnUpdate">Update</button>
            </div>
        </div>
    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal_sistemkuliah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="pesan"></p>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-control" name="kota">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addData()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit-->
    <div class="modal fade" id="EditForm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="pesan"></p>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-control" name="kota">
                    </div>
                    <input type="hidden" name="menuid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="editData()">Update</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    $(function() {
        getData();

        $('#btnTambah').click(function() {
            addData();
        })

        $('#btnUpdate').click(function() {
            updateData();
        })

        $('#btnClose').click(function() {
            getData();
        })

    });

    function addData() {

        var name = $("[name='name']").val();
        var price = $("[name='price']").val();
        var description = $("[name='description']").val();

        $.ajax({
            type: 'POST',
            data: 'name=' + name + '&price=' + price + '&description=' + description,
            url: 'dashboard/addMenu',
            dataType: 'json',
            success: function(hasil) {

                if (hasil.pesan == '') {
                    alert("Data telah berhasil di simpan.");
                    $("[name='name'],[name='price'],[name='description']").val('');
                    getData();
                } else {
                    alert(hasil.pesan);
                }
            }
        })
    }


    function updateData() {

        var menuid = $("[name='menuid']").val();
        var name = $("[name='name']").val();
        var price = $("[name='price']").val();
        var description = $("[name='description']").val();

        $.ajax({
            type: 'POST',
            data: 'menuid=' + menuid + '&name=' + name + '&price=' + price + '&description=' + description,
            url: 'dashboard/editMenu',
            dataType: 'json',
            success: function(hasil) {

                if (hasil.pesan == '') {
                    alert("Data telah berhasil di ubah.");
                    $("[name='name'],[name='price'],[name='description']").val('');
                    getData();
                } else {
                    alert(hasil.pesan);
                }
            }
        })
    }

    function getData() {
        $('#btnUpdate').hide();
        $('#txtEdit').hide();
        $('#btnTambah').show();
        $('#txtTambah').show();

        $('[name="name"]').val('');
        $('[name="price"]').val('');
        $('[name="description"]').val('');
        $.ajax({
            type: 'POST',
            url: 'dashboard/getMenu',
            dataType: 'JSON',
            success: function(data) {
                var baris = '';

                for (var i = 0; i < data.length; i++) {
                    baris += '<tr>' +
                        '<td>' + data[i].name + '</td>' +
                        '<td>' + data[i].price + '</td>' +
                        '<td>' + data[i].description + '</td>' +
                        '<td><a href="#EditForm" data-toggle="modal" class="btn btn-success btn-sm" onclick="edit(' + data[i].menuid + ')">Edit</a>' +
                        ' <a href="#HapusForm" data-toggle="modal" class="btn btn-danger btn-sm" onclick="hapusdata(' + data[i].menuid + ')">Delete</a></td>' +
                        '</tr>';

                }
                $('#data').html(baris);
            }
        });
    }

    function edit(menuid) {
        $('#btnTambah').hide();
        $('#txtTambah').hide();
        $('#btnUpdate').show();
        $('#txtEdit').show();
        $.ajax({
            type: "POST",
            data: 'menuid=' + menuid,
            url: 'dashboard/ambilMenu',
            dataType: 'json',
            success: function(hasil) {
                $('[name="name"]').val(hasil.name);
                $('[name="price"]').val(hasil.price);
                $('[name="description"]').val(hasil.description);
                $('[name="menuid"]').val(hasil.menuid);
            }
        })
    }

    function hapusdata(menuid) {
        $.ajax({
            type: 'POST',
            data: 'menuid=' + menuid,
            url: 'dashboard/hapusData',
            success: function(hasil) {
                alert('Data berhasil dihapus');
                getData();
            }
        })
    }
</script>