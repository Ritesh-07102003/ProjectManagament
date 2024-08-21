@extends('layout.app')

@section('content')
<div class="container">

    <hr class="dark horizontal my-0">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <a class="btn btn-primary mt-2 " href="/addproject" role="button">Add Project</a>
        </div>
        <div class="input-group input-group-outline w-25">
            <label class="form-label">Type here...</label>
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="col-lg-12 col-md-6 mb-md-0 mb-4 mt-1">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Current Projects</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Projects</th>
                                <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7 ps-2">Members</th>
                                <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Description</th>
                                <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">view</th>
                                <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">Edit</th>
                                <th class="text-uppercase text-secondary text-md font-weight-bolder opacity-7">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
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
                                    <p class="mb-0">about project...</p>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <a class="btn btn-primary btn-sm" href="#" role="button">View</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <a class="btn btn-success btn-sm" href="#" role="button">update</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <a class="btn btn-danger btn-sm" href="#" role="button">Remove</a>
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
</div>
@endsection