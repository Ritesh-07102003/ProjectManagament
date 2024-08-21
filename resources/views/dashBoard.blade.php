@extends('layout.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- upper card for project name and list of bugs -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="pt-1">
                        <h4 class="mb-0 text-capitalize">Project Name</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <ul>
                        <li class="mb-0 "><span class="text-danger text-sm font-weight-bolder">Bug no. 1 </span></li>
                        <li class="mb-0 "><span class="text-danger text-sm font-weight-bolder">Bug no. 2 </span></li>
                        <li class="mb-0 "><span class="text-danger text-sm font-weight-bolder">Bug no. 3 </span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end of upper card -->

        <!-- start for the middle card -->
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="mb-0 ">Website Views</h6>
                        <p class="text-sm ">Last Campaign Performance</p>
                        <hr class="dark horizontal">
                        <div class="d-flex ">
                            <i class="material-icons text-sm my-auto me-1">schedule</i>
                            <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of the middle card -->


        <div class="row mb-4">

            <!-- start of the project details table -->
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h3>On Going Projects</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Projects</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Project Name 1</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="avatar-group mt-2">
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                                    <img src="../assets/img/team-1.jpg" alt="team1">
                                                </a>
                                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                                    <img src="../assets/img/team-2.jpg" alt="team2">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-wrapper w-75 mx-auto">
                                                <div class="progress-info">
                                                    <div class="progress-percentage">
                                                        <span class="text-xs font-weight-bold">60%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of the table  -->

            <!-- side bar for remaining bugs -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <h4>Pending Bugs</h4>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-body p-4 pt-2">
                        <div class="pt-1">
                            <h6 class="mb-0 text-capitalize">Project Name</h6>
                        </div>
                        <ul>
                            <li class="mb-0 "><span class="text-danger text-sm font-weight-bolder">Remaining bug 1 </span></li>
                            <li class="mb-0 "><span class="text-danger text-sm font-weight-bolder">Remaining bug 2 </span></li>
                            <li class="mb-0 "><span class="text-danger text-sm font-weight-bolder">Remaining bug 3 </span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of side bar -->
        </div>
        @endsection