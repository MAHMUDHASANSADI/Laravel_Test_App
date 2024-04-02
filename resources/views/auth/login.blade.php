<!DOCTYPE html>
<html lang="en">

@include('layouts.admin.headerA')

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="../../assets/images/logo.svg" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <h6 class="fw-light text-danger">{{ $error }}</h6>
                                @endforeach
                            @else
                                <h6 class="fw-light">Sign in to continue.</h6>
                            @endif
                            <form class="pt-3" action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="User Email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" name="password"
                                        value="{{ old('password') }}">
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN</button>
                                </div>


                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    @include('layouts.admin.scriptA')
</body>

</html>
