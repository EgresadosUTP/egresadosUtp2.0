@extends('layouts.admin.layout')

@section('scripts')

<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

@endsection





@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mis Publicaciones</h1>
<p class="mb-4"> A continuación encontrarás tu lista de publicaciones realizadas </p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Titulo</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>
        <tbody>
        <tr>
                      <th>Desarrollo Móvil</th>
                      <th>Lorem ipsum at siamoer</th>
                      <th> imaDesarMov.png</th>
                      <th>20/03/2015</th>
                      <th>20/03/2015 </th>
                      <td> 
                        <a href="#" class="btn btn-warning btn-circle">
                            <i class="far fa-edit"></i> </a>

                        <a href="#" class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i> </a>
                    </td>
                    </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

@endsection