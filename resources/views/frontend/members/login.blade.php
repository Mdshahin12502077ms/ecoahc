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

        .alert {
            margin-bottom: -30px;
            font-size: 13px;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')
    <main id="main">
        <section id="blog" class="blog mt-5">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3">
                    <div class="card login-form">
                        <div class="card-body">
                            <h3 class="card-title text-center">Sign In</h3>
                            <div class="card-text">
                                <!--
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                                <form>
                                    <!-- to error: add class "has-danger" -->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control form-control-sm" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="exampleInputPassword1">Password</label>
                                        <a href="#" style="float:right;font-size:12px;">Forgot password?</a>
                                        <input type="password" class="form-control form-control-sm"
                                            id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary  btn-block mt-2"><i class="bi bi-box-arrow-in-right"></i> Sign in</button>

                                    <div class="sign-up">
                                        Don't have an account? <a href="{{ route('member-register') }}">Registration</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
