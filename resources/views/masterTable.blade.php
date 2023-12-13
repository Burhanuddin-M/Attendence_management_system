<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body><br>

    <div class="container">
        <h1 class="text-center text-primary">Employee's Master Table</h1><br>


        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>SR NO</th>
                    <th>Employee Name</th>
                    <th>Present's</th>
                    <th>Absent's</th>
                    <th>Portfolio</th>
                </tr>
            </thead>

            <tbody>
                
                @foreach ($Employees as $employee)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$employee->name}}</td>
                        <td></td>
                        <td></td>
                        <td class="text-danger"><b>{{$employee->amount_portfolio}}</b></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
