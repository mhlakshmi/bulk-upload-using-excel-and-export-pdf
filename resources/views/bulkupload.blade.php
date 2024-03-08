<!DOCTYPE html>
<html>

<head>
    <title>Task</title>
    <link href="asset/images/favicon.png" rel="shortcut icon" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="utf-8" http-equiv="encoding">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <link href="asset/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="asset/vendor/bootstrap-icons/bootstrap-icons.css">
    <link href="asset//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="asset/ckeditor/ckeditor.js"></script>
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
            <h1>Bulk upload student details</h1>
        </div>
        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="row">
                <div class="content-header">

                </div>

                 @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </ul>
        </div>
    @endif
                <div class="content">
                    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import User Data</button>

                    </form>


                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->

    <!-- End Footer -->
</body>

<script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="asset/js/dashboard.js"></script>

</html>