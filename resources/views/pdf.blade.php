<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>

    <style>
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
           
            color: black;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 15px;
        }
    </style>

</head>

<body>

    <div style="width: 95%; margin: 0 auto;">
        <div style="width: 50%; float: left;">
            <h1>Student Details</h1>
        </div>
    </div>

    <table style="position: relative; top: 50px;">
        <tbody>
            <tr>
                <th>Reg No</th>
                <td>{{ $student->register_no }}</td>
            </tr>
            <tr>
                <th>Student Name</th>
                <td>{{ $student->student_name }}</td>
            </tr>
            <tr>
                <th>DOB</th>
                <td>{{ date('d-m-Y', strtotime($student->dob)) }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $student->gender }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td style="color: dodgerblue;">{{ $student->email_id }}</td>
            </tr>
            <tr>
                <th>Father Name</th>
                <td>{{ $student->father_name }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $student->contact_no }}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
