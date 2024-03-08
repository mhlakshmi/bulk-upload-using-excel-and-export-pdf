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
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 12px;
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
        <thead>
            <tr>
            <th>Reg No</th>
                <th>Student Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Father name</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $student)
                <tr>
                <td data-column="">{{ $student->register_no }}</td>
                    <td data-column="Name">{{ $student->student_name }}</td>
                     <td data-column="Date">
                        {{ date('d-m-Y', strtotime($student->dob)) }}
                    </td>
                    <td data-column="">{{ $student->gender }}</td>
                     <td data-column="Email" style="color: dodgerblue;">
                        {{ $student->email_id }}
                    </td>
                    <td data-column="">{{ $student->father_name }}</td>
                   <td data-column="">{{ $student->contact_no }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>