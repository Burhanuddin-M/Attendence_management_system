<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body><br>

    @if (session('success'))
        <div class="alert alert-success text-center ">
            {{ session('success') }}
        </div>
    @endif

    <div class="container">
        <h1 class="text-center text-primary">Beneficiary's Name</h1>
        <div class="row justify-content-end mb-3">
            <div class="col-auto">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Employee
                </button>
            </div>
        </div>

        <!-- Modal for Adding Employee -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('PostAddEmployee') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="employeeName" class="form-label">Employee Name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter employee name" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="employeeContact" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter contact Number" name="contact_no">
                            </div>

                            <div class="mb-3">
                                <label for="employeeSalary" class="form-label">Employee Salary</label>
                                <input type="number" class="form-control" id="salary"
                                    placeholder="Enter employee salary" name="salary_per_day">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Beneficiary</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table with Edit Column -->
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>SR NO</th>
                    <th>Employee Name</th>
                    <th>Contact Number</th>
                    <th>Salary (Per day)</th>
                    <th>Edit</th> <!-- New Edit Column Header -->
                </tr>
            </thead>

            <tbody>
                @foreach ($Employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->contact_no }}</td>
                        <td>{{ $employee->salary_per_day }}</td>
                        <td><button class="btn btn-warning" data-toggle="modal" data-target="{{ "#editModal".$employee->id }}" ><i
                                    class="fas fa-edit"></i></button></td>
                    </tr>

                     <!-- Edit Modal (You may need to create similar modals for each row) -->
                    <div class="modal fade" id="{{ "editModal".$employee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Employee Salary</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add form or content to edit the salary -->
                                <form action="" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" value="{{ $employee->name }}"
                                            placeholder="" name="edited_salary">
                                    </div>

                                    <div class="mb-3">
                                        <label for="contact" class="form-label">Contact No</label>
                                        <input type="number" class="form-control" id="editedSalary"
                                            placeholder=""  value="{{ $employee->contact_no }}" name="edited_salary">
                                    </div>

                                    <div class="mb-3">
                                        <label for="salary" class="form-label">Salary Per Hour</label>
                                        <input type="number" class="form-control" id="salary"
                                            placeholder=""  value="{{ $employee->salary_per_day }}" name="salary_per_hour">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                @endforeach

                <!-- Add more rows as needed -->

            </tbody>
        </table>
    </div>



    <!-- Add more edit modals as needed -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>

</html>
