<x-authlayout>
    @include('sweetalert::alert')
    <style>
        .center {
            margin: auto;
            padding: 20px;
        }

    </style>
    <div class="center container">
        <div class="col-md-4 offset-4 mt-5">
            <div class="card">
                <h5 class="card-header orange darken-2 white-text text-center py-4">
                    <strong><b>Welcome</b></strong>
                </h5>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{ route('login') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <!-- E-mail -->
                                <div class="md-form">
                                    <input type="email" id="materialRegisterFormemail" class="form-control"
                                        name="email" placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    {{-- <label for="materialRegisterFormFirstName" >User Name</label> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="md-form mt-0">
                            <input type="password" id="defaultLoginFormPassword" class="form-control" name="password"
                                placeholder="Password" value="{{ old('password') }}">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-around">
                            <div>
                                <!-- Forgot password -->
                                <a href="{{ route('forgetpasswordhome') }}">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn orange darken-2 white-text btn-block my-4" type="submit">
                            <h6>Sign in&nbsp;<i class="fas fa-sign-in-alt"></i></h6>
                        </button>

                        <!-- Register -->
                        {{-- @if (!auth()->user()) --}}
                        <p>Not registered?
                            <a href="{{ route('register') }}">Register</a>
                        </p>
                        {{-- @endif --}}
                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form register -->
        </div>
    </div>
</x-authlayout>
