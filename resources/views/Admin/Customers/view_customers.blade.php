@extends('layouts.main')
@section('main')
    <div class="container-fluid">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
            Add Customer
            </button>
            <button type="button" class="btn btn-success">
                <i class="fa fa-file-excel" aria-hidden="true"></i>
              Export Excel
              </button>
              <button type="button" class="btn btn-success">
                  <i class="fa fa-file-pdf" aria-hidden="true"></i>
               Download PDF
                </button>
                <button type="button" class="btn btn-success">
                    <i class="fa fa-print" aria-hidden="true"></i>
                  print
                  </button>
    </div>

      <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Customers</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="username" class="form-control form-control-user" id="exampleUserName" placeholder="Username" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="phone" class="form-control form-control-user" id="examplePhoneNumber" placeholder="Phone Number" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="location" class="form-control form-control-user" id="exampleLocation" placeholder="Location" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="ID_No" class="form-control form-control-user" id="exampleIDnumber" placeholder="ID Number" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">
                  Register Customer
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-success">
              <h6 class="m-0 font-weight-bold text-white">Manage Customers Here</h6>
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
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    <tr>
                      <td>Donna Snider</td>
                      <td>Customer Support</td>
                      <td>New York</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td>$112,000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<!-- /.datatables -->
@endsection