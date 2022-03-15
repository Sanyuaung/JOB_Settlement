<x-authlayout>
    <div class="container">
        <div class="col-md-4 offset-4 mt-5">
            <div class="card">
                <h5 class="card-header orange darken-2 white-text text-center py-4">
                    <strong>Create New Password</strong>
                </h5>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">
                    @foreach ($old as $old)
                        <!-- Form -->
                        <form class="text-center" style="color: #757575;"
                            action="{{ route('updatePassword', $old->id) }}" method="POST"
                            enctype="multipart/form-data">
                    @endforeach
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <input readonly type="text" id="materialRegisterFormFirstName" class="form-control"
                                    name="username" placeholder="User Name" value="{{ $old->name }}">
                                @error('username')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                {{-- <label for="materialRegisterFormFirstName" >User Name</label> --}}
                            </div>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <input readonly type="email" id="materialRegisterFormEmail" class="form-control" name="email"
                            placeholder="E-mail" value="{{ $old->email }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        {{-- <label for="materialRegisterFormEmail" >E-mail</label> --}}
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPassword" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock" name="password"
                            placeholder="New Password">
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
                    <button class="btn orange darken-2 white-text btn-rounded btn-block my-4 waves-effect z-depth-0"
                        type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-authlayout>
