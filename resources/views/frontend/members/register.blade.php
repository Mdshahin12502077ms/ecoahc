@extends('frontend.master')

@section('style')
    <style>
        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            margin: 50px 50px;
        }

        form {
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30px;
        }

        .card-title {
            font-weight: 300;
        }

        .sign-up {
            text-align: center;
            padding: 20px 0 0;
        }


        .mx-t3{
            margin-top: -3rem;
        }
    </style>
@endsection

@section('content')
    <main id="main">
        <section id="blog" class="blog mt-5">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card login-form">
                        <div class="card-body">
                            <h3 class="card-title text-center">Register a New Member</h3>
                            <div class="card-text">
                                <!--
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                <div class="container mt-3">
                                    <form>
                                        <div class="row jumbotron">
                                            <div class="col-sm-12 form-group">
                                                <label for="Member Type">Member Type <span class="text-danger">*</span></label>
                                                <select class="form-control custom-select browser-default" name="member_type" required>
                                                    <option value="General Member">General Member</option>
                                                    <option value="Associate Member">Associate Member</option>
                                                    <option value="Life Time Member">Life Time Member</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="id_no">ID No <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="id_no" id="id_no" placeholder="Enter your full name." required>
                                            </div>
                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="name-f">Full Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="full_name" id="name-f"
                                                    placeholder="Enter your id no." required>
                                            </div>

                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="email">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Enter your email." required>
                                            </div>
                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                                <input type="phone" class="form-control" name="phone" id="phone"
                                                    placeholder="Enter your phone." required>
                                            </div>
                                            <div class="col-sm-12 mt-2 form-group">
                                                <label for="present_address">Present Address <span class="text-danger">*</span></label>
                                                <input type="present_address" class="form-control" name="present_address" id="present_address"
                                                    placeholder="Enter your present address." required>
                                            </div>
                                            <div class="col-sm-12 mt-2 form-group">
                                                <label for="permanent_address">Permanent Address <span class="text-danger">*</span></label>
                                                <input type="permanent_address" class="form-control" name="permanent_address" id="permanent_address"
                                                    placeholder="Enter your permanent address." required>
                                            </div>

                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="gender">Gender <span class="text-danger">*</span></label>
                                                <select class="form-control custom-select browser-default" name="gender" required>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="date_of_birth">Date of Birth <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Enter your session." required>
                                            </div>

                                            <div class="col-sm-4 mt-2 form-group">
                                                <label for="degree">Degree <span class="text-danger">*</span></label>
                                                <select class="form-control custom-select browser-default" name="degree" required>
                                                    <option value="Honors">Honors</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="Honors & Masters">Honors & Masters</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4 mt-2 form-group">
                                                <label for="session">Session <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="session" id="session" placeholder="Enter your session." required>
                                            </div>
                                            <div class="col-sm-4 mt-2 form-group">
                                                <label for="passing_year">Passing Year <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="passing_year" id="passing_year" placeholder="Enter your Passing Year." required>
                                            </div>
                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="occupation">Occupation <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter your Occupation." required>
                                            </div>
                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="workplace">Workplace <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="workplace" id="workplace" placeholder="Enter your Workplace." required>
                                            </div>


                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="cv">CV</label>
                                                <input type="file" name="cv" class="form-control" id="pass" placeholder="Enter your cv." required>
                                            </div>
                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="cv">Photo</label>
                                                <input type="file" name="cv" class="form-control" id="pass" placeholder="Enter your cv." required>
                                            </div>

                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="pass">Password</label>
                                                <input type="Password" name="password" class="form-control"
                                                    id="pass" placeholder="Enter your password." required>
                                            </div>
                                            <div class="col-sm-6 mt-2 form-group">
                                                <label for="pass2">Confirm Password</label>
                                                <input type="Password" name="cnf-password" class="form-control"
                                                    id="pass2" placeholder="Re-enter your password." required>
                                            </div>

                                            <div class="col-sm-12 form-group mt-4 mb-0">
                                                <button class="btn btn-primary float-right"><i class="bi bi-box-arrow-in-right"></i> Register</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
