@extends('layout.app')

@section('content')

<div class="container">
    <div class="card my-4">

        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add Project</h6>
            </div>
        </div>

        <div class="card-body">
            <form class="row g-3 my-3" action="#" method="post">
                <div class="col-md-4">
                    <label for="Name" class="form-label">First Name</label>
                    <input type="Text" class="form-control" id="Name" name="First_name" placeholder="Raju" required>
                </div>
                <div class="col-md-4">
                    <label for="sir_name" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="sir_name" name="sir_name" placeholder="Gupta" required>
                </div>
                <div class="col-md-4">
                    <label for="Student_no" class="form-label">Student Mobile No.</label>
                    <input type="text" class="form-control" id="Student_no" name="Student_no" placeholder="9638527416"
                        required>
                </div>
                <div class="col-md-4">
                    <label for="Father_name" class="form-label">Father Name</label>
                    <input type="Text" class="form-control" id="Father_name" name="Father_name" placeholder="Vivek"
                        required>
                </div>
                <div class="col-md-4">
                    <label for="Mother_name" class="form-label">Mother Name</label>
                    <input type="text" class="form-control" id="Mother_name" name="Mother_name" placeholder="Mansi"
                        required>
                </div>
                <div class="col-md-4">
                    <label for="Parent_no" class="form-label">Parent Mobile No.</label>
                    <input type="text" class="form-control" id="Parent_no" name="Parent_no" placeholder="7418529638"
                        required>
                </div>
                <div class="col-md-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" aria-label="Default select example" name="gender" required>
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="email" class="form-label">Email Id</label>
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="jaishreeram@jaishreeram.jaishreeram" required>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="add" placeholder="1234 Main St"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="cty" placeholder="Mumbai" required>
                </div>
                <div class="col-md-4">
                    <label for="State" class="form-label">State</label>
                    <input type="text" class="form-control" id="State" name="ste" placeholder="Maharashtra" required>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Pin Code</label>
                    <input type="text" class="form-control" id="inputZip" name="zp" placeholder="400067" required>
                </div>
                <div class="col-md-4">
                    <label for="gender" class="form-label">Select Course</label>
                    <select class="form-select" id="d_name" aria-label="Default select example" name="d_name" required>
                        <option>Select Course</option>
                        </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="SelectYear" class="form-label">Select Year</label>
                    <select class="form-select" id="SelectYear" aria-label="Default select example" name="SelectYear"
                        required>
                        <option value="">Select Year</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="OTC" class="form-label">One Time Code</label>
                    <input type="code" class="form-control" id="OTC" name="OTC" placeholder="OTC" required>
                </div>
                <div class="mx-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection