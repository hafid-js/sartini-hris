@extends('layouts.app')


@section('content')

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-titles">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-12 align-self-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 d-flex align-items-center">
              <li class="breadcrumb-item">
                <a href="index.html" class="link"
                  ><i class="ri-home-3-line fs-5"></i
                ></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Footable
              </li>
            </ol>
          </nav>
          <h1 class="mb-0 fw-bold">Footable</h1>
        </div>
        <div
          class="
            col-lg-4 col-md-6
            d-none d-md-flex
            align-items-center
            justify-content-end
          "
        >
          <select
            class="form-select theme-select border-0"
            aria-label="Default select example"
          >
            <option value="1">Today 23 March</option>
            <option value="2">Today 24 March</option>
            <option value="3">Today 25 March</option>
          </select>
          <a
            href="javascript:void(0)"
            class="btn btn-info d-flex align-items-center ms-2"
          >
            <i class="ri-add-line me-1"></i>
            Add New
          </a>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================= -->
    <!-- Container fluid  -->
    <!-- ============================================================= -->
    <div class="container-fluid">
      <!-- ============================================================= -->
      <!-- Start Page Content -->
      <!-- ============================================================= -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="border-bottom title-part-padding">
              <h4 class="mb-0">Contact Emplyee list</h4>
            </div>
            <div class="card-body">
              <div class="d-flex justify-content-end">
                <button
                  type="button"
                  class="btn btn-info btn-rounded m-t-10 mb-2"
                  data-bs-toggle="modal"
                  data-bs-target="#add-contact"
                >
                  Add New Contact
                </button>
              </div>
              <!-- Add Contact Popup Model -->
              <div
                id="add-contact"
                class="modal fade in"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                      <h4 class="modal-title" id="myModalLabel">
                        Add New Contact
                      </h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <from class="form-horizontal form-material">
                        <div class="form-group">
                          <div class="col-md-12 mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Type name"
                            />
                          </div>
                          <div class="col-md-12 mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Email"
                            />
                          </div>
                          <div class="col-md-12 mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Phone"
                            />
                          </div>
                          <div class="col-md-12 mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Designation"
                            />
                          </div>
                          <div class="col-md-12 mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Age"
                            />
                          </div>
                          <div class="col-md-12 mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Date of joining"
                            />
                          </div>
                          <div class="col-md-12 mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Salary"
                            />
                          </div>
                          <div class="col-md-12 mb-3">
                            <div
                              class="
                                fileupload
                                btn btn-danger btn-rounded
                                waves-effect waves-light
                                btn-sm
                              "
                            >
                              <span
                                ><i class="ion-upload m-r-5"></i>Upload
                                Contact Image</span
                              >
                              <input type="file" class="upload" />
                            </div>
                          </div>
                        </div>
                      </from>
                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-info waves-effect"
                        data-bs-dismiss="modal"
                      >
                        Save
                      </button>
                      <button
                        type="button"
                        class="btn btn-default waves-effect"
                        data-bs-dismiss="modal"
                      >
                        Cancel
                      </button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <div class="table-responsive">
                <table class="table text-nowrap table-responsive"
                >
                  <thead>
                    <tr>
                        <th scope="col" class="border">
                            <label
                              ><input
                                type="checkbox"
                                data-tablesaw-checkall
                              /><span class="sr-only"> Check All</span></label
                            >
                          </th>
                      <th>Employee</th>
                      <th>Branch</th>
                      <th>Organization</th>
                      <th>Job Position</th>
                      <th>Job Level</th>
                      <th>Employment Status</th>
                      <th>Join Date</th>
                      <th>End Date</th>
                      <th>Resign Date</th>
                      <th>Barcode</th>
                      <th>Birth Date</th>
                      <th>Birth Place</th>
                      <th>Address</th>
                      <th>Mobile Phone</th>
                      <th>Religion</th>
                      <th>Gender</th>
                      <th>Marital Status</th>

                    </tr>
                  </thead>
                  <tbody >
                    <tr>
                        <td>
                            <label
                              ><input type="checkbox" /><span class="sr-only">
                                Select Row</span
                              ></label
                            >
                          </td>
                      <td>
                        <a href="javascript:void(0)" class="link"
                          ><img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/users/4.jpg"
                            alt="user"
                            width="40"
                            class="rounded-circle"
                          />
                          Genelia Deshmukh</a
                        >
                      </td>
                      <td>Pusat</td>
                      <td>IT Division</td>
                      <td><span class="badge bg-danger">Manager IT</span></td>
                      <td>Manager</td>
                      <td>Permanent</td>
                      <td>01 Mar 2014</td>
                      <td>14 Jun 2023</td>
                      <td>-</td>
                      <td>7</td>
                      <td>kesatriakolorhitam123@gmail.com</td>
                      <td>10 Oct 1990</td>
                      <td>Jakarta</td>
                      <td>-</td>
                      <td>-</td>
                      <td>Islam</td>
                      <td>Female</td>
                      <td>Single</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
        </div>
      </div>
      <!-- ============================================================= -->
      <!-- End PAge Content -->
      <!-- ============================================================= -->
    </div>

@endsection


@push('script')
<script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/libs/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/dist/js/pages/tables/bootstrap-table.init.js"></script>
@endpush
