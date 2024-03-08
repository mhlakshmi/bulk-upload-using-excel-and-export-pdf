<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Task</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Vendor CSS Files -->
    <link href="/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/asset/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    @include('header')
    <!-- ======= Sidebar ======= -->
    @include('sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Student List</h1>
        </div>
        <br>
        <div class="stubtn-div pb-4">
           
                <div class="btn-stu">
                    <a href="/add_student" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Add
                        New</a>
                </div>
           
                <div class="btn-stu">
                    <a href="/export" class="btn btn-outline-primary"><i class="bi bi-download"></i> Export
                        </a>
                </div>
           
        </div>
        <section class="section dashboard">
            <div class="row">

                <!-- <div class="content-header">
                    <div class="blogs-add-new-btn">
                        <a href="/add_student" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Add
                            New</a>
                    </div>
                </div> -->

                <div class="content">
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Regiter no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($students as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->register_no }}</td>
                                <td>{{ $item->student_name }}</td>
                                <td>{{ $item->email_id }}</td>
                                <td class="text-center">
                                     <a href="{{ route('generatestudentPDF', ['id' => $item->id]) }}" class="btn btn-success"
                                        type="button"><span><i class="bi bi-download"></i></span> PDF</a>
                                  
                                    <a href="{{ route('edit_student', ['id' => $item->id]) }}" class="btn btn-success"
                                        type="button"><span><i class="bi bi-pencil"></i></span> Edit</a>
                                   
                                        <a href="{{ route('delet_student', ['id' => $item->id]) }}" class="btn btn-danger"
                                        type="button"><span><i class="bi bi-trash3-fill"></i></span> Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="back-to-top">
                        <a href="#" class="back-to-top d-flex align-items-center btn btn-outline-secondary"><i
                                class="bi bi-arrow-up-short"></i> Back to Top</a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->




    <!-- Vendor JS Files -->
    <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/asset/js/dashboard.js"></script>

</body>

</html>