<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add User Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="user_form" name="user_form">
                <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="Enter Phone Number">
                  </div>
                  <div class="form-group">
                        <label>Address  </label>
                        <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter Address"></textarea>
                      </div>
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Aadhar Number</label>
                    <input type="number" class="form-control" name="aadhar_number" id="aadhar_number" placeholder="Enter Aadhar Number">
                  </div>
                  <div class="form-group">
                        <label>Reference  </label>
                        <textarea class="form-control" name="reference" id="reference" rows="3" placeholder="Enter Details"></textarea>
                      </div>
                      <div class="form-group">
                    <label for="exampleInputEmail1">Salary Per Month</label>
                    <input type="number" class="form-control" id="sal_per_month" name="sal_per_month" placeholder="Enter Salary">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Salary Per Hour</label>
                    <input type="number" class="form-control" id="sal_per_hour" name="sal_per_hour" placeholder="Enter Salary Per Hour">
                  </div>
                  <div class="form-group">
                  <label>Joining Date:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" name="joining_date" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                  <!-- /.input group -->
                </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo" name="photo">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="add_user_button" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          
          
          

          </div>

      
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>

<!-- Page specific script -->
<script>
$(function () {
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

  bsCustomFileInput.init();
});


$("#add_user_button").click(function(e){

  e.preventDefault();
       
       $.ajax({
      
       method:"POST",
       url: "<?php echo  base_url('User/addUserData'); ?>",
       data:$(this).serialize(),
       success: function(data){
        $('#msg').html(data);
        $('#userForm').find('input').val('');
        }
      })
})


</script>
</body>
</html>
