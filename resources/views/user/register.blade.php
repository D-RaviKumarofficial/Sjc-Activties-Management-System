<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <style>
        .input-group-text {
            background-color: #fff;
            border: none;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Sign Up</h5>
                        <form action="{{ route('user.processRegister') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Enter name" value="{{ old('name') }}" required>
                                </div>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" placeholder="Enter email" value="{{ old('email') }}" required>
                                </div>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Password" required>
                                </div>
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-briefcase-fill"></i></span>
                                    <select class="form-select @error('department') is-invalid @enderror" id="department"
                                        name="department" required>
                                        <option value="" selected disabled>Select Department</option>
                                        <option value="COMPUTER APPLICATIONS">COMPUTER APPLICATIONS</option>
                                        <option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
                                        <option value="MATHEMATICS">MATHEMATICS</option>
                                        <option value="PHYSICS">PHYSICS</option>
                                        <option value="COMMERCE">COMMERCE</option>
                                        <option value="BANK MANAGEMENT">BANK MANAGEMENT</option>
                                        <option value="B.B.A">B.B.A</option>
                                        <option value="ENGLISH">ENGLISH</option>
                                        <option value="ARTIFICIAL INTELLIGENCE">ARTIFICIAL INTELLIGENCE</option>
                                        <option value="CHEMISTRY">CHEMISTRY</option>
                                        <option value="BIOCHEMISTRY">BIOCHEMISTRY</option>
                                        <option value="MICROBIOLOGY">MICROBIOLOGY</option>
                                        <option value="ZOOLOGY">ZOOLOGY</option>
                                        <option value="HISTORY">HISTORY</option>
                                    </select>
                                </div>
                                @error('department')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-watch"></i></span>
                                    <select class="form-select @error('shift') is-invalid @enderror" id="shift"
                                        name="shift" required>
                                        <option value="" selected disabled>Select Shift</option>
                                        <option value="shift1">Shift 1</option>
                                        <option value="shift2">Shift 2</option>
                                        <option value="staff">Staff</option>
                                        <option value="other">Other College Students</option>
                                    </select>
                                </div>
                                @error('shift')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary w-100" value="Sign Up">
                        </form>
                        <div class="text-center mt-3">
                            <p class="mb-0">
                                <b>Already have an account? <a href="{{ route('user.authenticate') }}">Login</a></b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
