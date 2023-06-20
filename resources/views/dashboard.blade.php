@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card welcome-card overflow-hidden bg-light-info border-0">
                    <div class="card-body">
                        <h3 class="text-primary position-relative">Good afternoon, Kesatria!</h3>
                        <h5 class="text-dark position-relative">It’s Saturday, 17 June</h5>

                        <div class="button-group mt-5">
                            <h6 class="text-dark position-relative mb-3">Shortcut</h6>
                            <a href="#"
                            class="btn btn-rounded btn-outline-dark position-relative"><label style="font-weight: 500" for="">Secondary</label></a>
                            <a href="#"
                            class="btn btn-rounded btn-outline-dark position-relative"><label style="font-weight: 500" for="">Secondary</label></a>
                            <a href="#"
                            class="btn btn-rounded btn-outline-dark position-relative"><label style="font-weight: 500" for="">Secondary</label></a>

                            <a href="#"
                            class="btn btn-rounded btn-outline-dark position-relative"><label style="font-weight: 500" for="">Secondary</label></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-flex align-items-center pb-3 border-bottom">
                  <div>
                    <h3 class="card-title">Total Sales</h3>
                    <h6 class="card-subtitle mb-0">Overview of Years</h6>
                  </div>
                  <div class="ms-auto">
                    <select
                      class="form-select theme-select border-0"
                      aria-label="Default select example"
                    >
                      <option value="1">March 2023</option>
                      <option value="2">March 2023</option>
                      <option value="3">March 2023</option>
                    </select>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <h5 class="text-muted fw-normal mb-0">Sales Yearly</h5>
                  <div class="ms-auto">
                    <h2 class="fw-bold mb-0">8,364,398</h2>
                  </div>
                </div>
                <div class="position-relative">
                    <div id="donut-chart"></div>
                </div>
                <ul
                  class="list-style-none d-flex justify-content-between mt-5"
                >
                  <li class="list-inline-item">
                    <i
                      class="
                        ri-checkbox-blank-circle-fill
                        text-info
                        fs-1
                        me-1
                      "
                    ></i>
                    2023
                  </li>
                  <li class="list-inline-item">
                    <i
                      class="
                        ri-checkbox-blank-circle-fill
                        text-primary
                        fs-1
                        me-1
                      "
                    ></i
                    >2023
                  </li>
                  <li class="list-inline-item">
                    <i
                      class="
                        ri-checkbox-blank-circle-fill
                        text-warning
                        fs-1
                        me-1
                      "
                    ></i
                    >2019
                  </li>
                </ul>
              </div>
            </div>
          </div>

        <!-- Row -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">2023© All Rights Reserved by Wrappixel</footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

@endsection

@push('script')



@endpush
