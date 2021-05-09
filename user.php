<?php 

$title = 'Data User';

require_once "template/theHeader.php";

?>

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Admin</li>
              <li class="breadcrumb-item active">Kelola User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<div class="card">
              <div class="card-header ">
                <div class="row justify-content-between">
                    <div class="col">
                    <h3 class="card-title">Kelola User</h3>
                </div>
            </div>
            <div class="card-body">

            <form method="post" class="form-data" id="form-data" autocomplete="off">  
        	<div class="row">
                <input type="hidden" name="id_user" id="id_user">
        		<div class="col-sm-3">
        			<div class="form-group">
						<label>Nama User</label>
						<input type="text" name="nama_user" id="nama_user" class="form-control" required="true">
                        <p class="text-danger" id="err_nama_user"></p>
					</div>
        		</div>
                <div class="col-sm-3">
        			<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" id="username" class="form-control" required="true" autocomplete="off">
                        <p class="text-danger" id="err_username"></p>
					</div>
        		</div>
                <div class="col-sm-3">
        			<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control" required="true" autocomplete="off">
                        <p class="text-danger" id="err_password"></p>
					</div>
        		</div>
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Level</label>
						<select name="level" id="level" class="form-control" required="true">
							<option value=""></option>
							<option value="Admin">Admin</option>
							<option value="Petugas">Petugas</option>
						</select>
                        <p class="text-danger" id="err_level"></p>
					</div>
	            </div>
	            
	            <div class="col-sm-3">
	            	<div class="form-group">
						<label>Status</label><br>
						<input type="radio" name="status" id="status1" value="Aktif" required="true"> Aktif
						<input type="radio" name="status" id="status2" value="Tidak Aktif"> Tidak Aktif
					</div>
                    <p class="text-danger" id="err_status"></p>
	            </div>
			</div>
			
			<div class="form-group">
				<button type="button" name="simpan" id="simpan" class="btn btn-primary">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
        </form>
        <hr>

		<div class="data"></div>


            <hr>
            <div class="table-responsive">
                <table id="data" class="table table-striped table-bordered">

                </table>
            </div>
</div>

<div id="viewModal" class="modal fade mr-tp-100" role="dialog">
    <div class="modal-dialog modal-lg flipInX animated">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" >View Data</h4>
                <button type="button" class="close" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body">
            	<div class="form-group">
            		<label>ID</label>
            		<input type="text" id="id_user" class="form-control" readonly="">
            	</div>
            	<div class="form-group">
            		<label>Nama User</label>
            		<input type="text" id="nama_user" class="form-control" readonly="">
            	</div>
            	<div class="form-group">
            		<label>Username</label>
            		<input type="text" id="username" class="form-control" readonly="">
            	</div>
            	<div class="form-group">
            		<label>Password</label>
            		<input type="password" id="password" class="form-control" readonly="">
            	</div>
            	<div class="form-group">
            		<label>Level</label>
            		<input type="text" id="level" class="form-control" readonly="">
            	</div>
            	<div class="form-group">
            		<label>Status</label>
            		<input type="text" id="status" class="form-control" readonly="">
            	</div>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-default" data-dismiss="modal">
            		Close
            	</button>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script type="text/javascript">
    // $(docuement).ready(function() {
    //     $('#form-data').disableAutoFill();
    //   });

    $(document).ready(function(){
        var table = $('#data').DataTable({
            resposive:true,
            serverSide:true,
            "ajax": {
                "type": "POST",
                "url": "getData.php",
                "timeout": 12000,
                "dataSrc": function(json) {
                    if(json != null){
                        return json
                    } else {
                        return "";
                    }
                }
            },
            "sAjaxDataProp": "",
            "width": "100%",
            "order": [[0, "asc"]],
            "aoColumns": [
                {
                    "mData":null,
                    "title": "No",
                    "render": function(data,row,type,meta){
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    "mData":null,
                    "title": "Nama User",
                    "render": function(data,row,type,meta){
                        return data.nama_user;
                    }
                },
                {
                    "mData":null,
                    "title": "Username",
                    "render": function(data,row,type,meta){
                        return data.username;
                    }
                },
                {
                    "mData":null,
                    "title": "Password",
                    "render": function(data,row,type,meta){
                        return data.password;
                    }
                },
                {
                    "mData":null,
                    "title": "Level",
                    "render": function(data,row,type,meta){
                        return data.level;
                    }
                },
                {
                    "mData":null,
                    "title": "Status",
                    "render": function(data,row,type,meta){
                        return data.status;
                    }
                },
                {
                    "mData": null,
                    "title": "Aksi",
                    "sortable": false,
                    "render": function (data,row,type,meta) {
                        let btn = '';

                        if(data.status != "Tidak Aktif"){
                            btn += "<button style='font-size: 11px;' class='btn btn-primary' id='detail' name='detail' title='Lihat Detail'><i class='fa fa-search'></i></button>";
                        }

                        return btn;
                    }
                }
            ]
        });

        $('#data tbody').on('click','#detail', function(){
            var current_row = $(this).parents('tr');
            if (current_row.hasClass('child')) {
                current_row = current_row.prev();
            }
            var data = table.row(current_row).data();

            document.getElementById("id_user").value = data["id_user"];
            document.getElementById("nama_user").value = data["nama_user"];
            document.getElementById("username").value = data["username"];
            document.getElementById("password").value = data["password"];
            document.getElementById("level").value = data["level"];
            document.getElementById("status").value = data["status"];

            $("#viewModal").modal("show");
        });
    });

    $('.data').load('data.php');
    $("#simpan").click(function(){
        var data = $('.form-data').serialize();
        var status1 = document.getElementById("status1").value;
        var status2 = document.getElementById("status2").value;
        var nama_user = document.getElementById("nama_user").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var level = document.getElementById("level").value;

        if(nama_user==""){
            document.getElementById("err_nama_user").innerHTML = "Nama User Harus Diisi";
        } else {
            document.getElementById("err_nama_user").innerHTML = "";
        }
        if(username==""){
            document.getElementById("err_username").innerHTML = "Username Harus Diisi";
        } else {
            document.getElementById("err_username").innerHTML = "";
        }
        if(password==""){
            document.getElementById("err_password").innerHTML = "Password Harus Diisi";
        } else {
            document.getElementById("err_password").innerHTML = "";
        }
        if(level==""){
            document.getElementById("err_level").innerHTML = "Level Harus Diisi";
        } else {
            document.getElementById("err_level").innerHTML = "";
        }
        if(document.getElementById("status1").checked==false && document.getElementById("status2").checked==false){
            document.getElementById("err_status").innerHTML = "Status Harus Diisi";
        } else {
            document.getElementById("err_status").innerHTML = "";
        }

        if(nama_user!="" && username!="" && password!="" && level!="" && (document.getElementById("status1").checked==true || document.getElementById("status2").checked==true)){
            $.ajax({
                type: 'POST',
                url: "form_action_user.php",
                data: data,
                success: function() {
                    $('data').load("data.php");
                    document.getElementById("id_user").value="";
                    document.getElementById("form-data").reset();
                }, error: function(response) {
                    console.log(response.responseText);
                    
                }
            });
        }
    });
</script>

<?php 

require_once "template/theFooter.php";

?>