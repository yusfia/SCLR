@extends('layouts.admin-purple')
@section('header')
    <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
        </ul>
    </nav>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <h4 class="card-title float-left">Visit And Sales Statistics</h4>
                        <div id="visit-sale-chart-legend"
                             class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Traffic Sources</h4>
                    <canvas id="traffic-chart"></canvas>
                    <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Update</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th> Assignee</th>
                                <th> Subject</th>
                                <th> Status</th>
                                <th> Last Update</th>
                                <th> Tracking ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img src="{{asset('theme/purple-admin/assets/images/faces/face1.jpg')}}"
                                         class="me-2" alt="image">
                                    D
                                </td>
                                <td> Fund is not received</td>
                                <td>
                                    <label class="badge badge-gradient-success">DONE</label>
                                </td>
                                <td> Dec 5, 2017</td>
                                <td> WD-12345</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('theme/purple-admin/assets/images/faces/face2.jpg')}}"
                                         class="me-2" alt="image"> Stella Johnson
                                </td>
                                <td> High loading time</td>
                                <td>
                                    <label class="badge badge-gradient-warning">PROGRESS</label>
                                </td>
                                <td> Dec 12, 2017</td>
                                <td> WD-12346</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('theme/purple-admin/assets/images/faces/face3.jpg')}}"
                                         class="me-2" alt="image"> Marina Michel
                                </td>
                                <td> Website down for one week</td>
                                <td>
                                    <label class="badge badge-gradient-info">ON HOLD</label>
                                </td>
                                <td> Dec 16, 2017</td>
                                <td> WD-12347</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('theme/purple-admin/assets/images/faces/face4.jpg')}}"
                                         class="me-2" alt="image"> John Doe
                                </td>
                                <td> Loosing control on server</td>
                                <td>
                                    <label class="badge badge-gradient-danger">REJECTED</label>
                                </td>
                                <td> Dec 3, 2017</td>
                                <td> WD-12348</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

