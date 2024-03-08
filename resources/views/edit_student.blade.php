<!DOCTYPE html>
<html>

<head>
    <title>Task</title>
    <link href="/asset/images/favicon.png" rel="shortcut icon" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="utf-8" http-equiv="encoding">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link href="/asset/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/asset/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/asset/ckeditor/ckeditor.js"></script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    @include('header')
    <!-- End Header -->
    <!-- ======= Sidebar ======= -->
    @include('sidebar')
    <!-- End Sidebar-->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Add student details</h1>
        </div>
        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="content-header">

                </div>
                <div class="content">
                    <form class="form-horizontal" action="{{ route('update_student', ['id' => $stud->id]) }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Register No</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="register_no" required class="form-control"
                                          value="{{ $stud->register_no }}"  placeholder=" " readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="name" required class="form-control"
                                        value="{{ $stud->student_name }}"    placeholder="Name ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Gender </label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="gender" class="form-control" required="" placeholder="">
                                           
                                            
                                        <option value="" disabled>Select category</option>
                                        @php
                                        $option = ['Male', 'Female', 'Other'];
                                        @endphp
                                        @foreach($option as $option)
                                        <option value="{{ $option }}" {{ $stud->gender == $option ? 'selected' :
                                            '' }}>
                                            {{ $option }}
                                        </option>
                                        @endforeach
                                    </select>
                                      
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" name="email" value="{{ $stud->email_id }}" class="form-control" required=""
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">DOB </label>
                                    </div>
                                     @php
                                    use Carbon\Carbon;
                                    @endphp
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            value="{{ optional(Carbon::parse($stud->dob))->format('Y-m-d') }}">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Father's Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="fname" required class="form-control"
                                          value="{{ $stud->father_name }}"  placeholder="Name ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-3">
                                        <label class="control-label">Mobile </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="mobile" class="form-control" required=""
                                            placeholder="Phone number" pattern="[0-9]{10}" value="{{ $stud->contact_no }}"
                                            title="Please enter a valid 10-digit phone number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row pb-3">
                                    <div class="col-md-9 col-md-offset-2">
                                        <button type="Submit" name="submit" class="btn btn-success">
                                            <i class="bi bi-pencil-square"></i>
                                            Submit
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->

    <!-- End Footer -->
</body>

<script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/asset/js/dashboard.js"></script>

</html>