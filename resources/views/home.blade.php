@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                


                    <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                              <div class="card text-white bg-primary o-hidden h-100">
                                <div class="card-body">
                                  <div class="card-body-icon">
                                    <i class="fa fa-fw fa-comments"></i>
                                  </div>
                                  <div class="mr-5">26 New Messages!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                  <span class="float-left">View Details</span>
                                  <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-3">
                              <div class="card text-white bg-warning o-hidden h-100">
                                <div class="card-body">
                                  <div class="card-body-icon">
                                    <i class="fa fa-fw fa-list"></i>
                                  </div>
                                  <div class="mr-5">11 New Tasks!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                  <span class="float-left">View Details</span>
                                  <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-3">
                              <div class="card text-white bg-success o-hidden h-100">
                                <div class="card-body">
                                  <div class="card-body-icon">
                                    <i class="fa fa-fw fa-shopping-cart"></i>
                                  </div>
                                  <div class="mr-5">123 New Orders!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                  <span class="float-left">View Details</span>
                                  <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-3">
                              <div class="card text-white bg-danger o-hidden h-100">
                                <div class="card-body">
                                  <div class="card-body-icon">
                                    <i class="fa fa-fw fa-support"></i>
                                  </div>
                                  <div class="mr-5">13 New Tickets!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                  <span class="float-left">View Details</span>
                                  <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>


                          <div class="col-lg-4">
                                <!-- Example Pie Chart Card-->
                                <div class="card mb-3">
                                  <div class="card-header bg-info">
                                    <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
                                  <div class="card-body">
                                    <canvas id="myPieChart" width="100%" height="100"></canvas>
                                  </div>
                                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                              </div>
                              
                           




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
