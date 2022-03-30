<x-authlayout>
@include('sweetalert::alert')
    
    <div class="container">
        <div class="col-md-4 offset-4 mt-5">
            <!-- Material form register -->
            <div class="card">

                <h5 class="card-header orange darken-2 white-text text-center py-4">
                <!-- <a class="float-left" href="{{ route('login') }}"><i class="fas fa-backward"></i></a> -->
                <strong>Register</strong>
                </h5>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                {{-- @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif --}}
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{ route('register') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <!-- First name -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormemail" class="form-control"
                                        name="username" placeholder="User Name">
                                    @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    {{-- <label for="materialRegisterFormFirstName" >User Name</label> --}}
                                </div>
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="md-form mt-0">
                            <input type="email" id="materialRegisterFormEmail" class="form-control" name="email"
                                placeholder="E-mail">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="md-form">
                            <input type="password" id="materialRegisterFormPassword" class="form-control"
                                aria-describedby="materialRegisterFormPasswordHelpBlock" name="password"
                                placeholder="Password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            {{-- <label for="materialRegisterFormPassword">Password</label> --}}
                            <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                {{-- At least 8 characters and 1 digit --}}
                            </small>
                        </div>
                        <!-- Confirm Password -->
                        <div class="md-form">
                            <input type="password" id="materialRegisterFormPassword" class="form-control"
                                aria-describedby="materialRegisterFormPasswordHelpBlock" name="password_confirmation"
                                placeholder="Confirm Password">
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            {{-- <label for="materialRegisterFormPassword">Password</label> --}}
                            <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                {{-- At least 8 characters and 1 digit --}}
                            </small>
                        </div>
                        {{-- <p for="">Select Your Profile Picture</p>
                    <div class="md-form">
                        <input type="file" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" placeholder="Upload one or more files" name="image">
                        @error('image')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div> --}}
                        <!-- Sign up button -->
                        <button class="btn orange darken-2 white-text btn-rounded btn-block my-4 waves-effect z-depth-0"
                            type="submit">Register</button>
                        <p>
                            <a href="{{ route('login') }}">Already Registered?</a>
                        </p>
                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form register -->
        </div>
    </div>
    {{-- @endif --}}
</x-authlayout>
