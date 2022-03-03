<x-authlayout>
    <div class="container">
        <div class="col-md-4 offset-4 mt-5">
            <!-- Material form register -->
        <div class="card">
    
            <h5 class="card-header orange darken-2 white-text text-center py-4">
                <strong>Forget Password</strong>
            </h5>
        @if (session('Errors'))
            <div class="alert alert-danger">
              {{session('Errors')}}
             </div>
        @endif
            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
    
                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="{{route('forgetpasswordvalidate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <!-- E-mail -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormemail" class="form-control" name="username" placeholder="User Name" value="{{old('username')}}">
                                @error('username')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                {{-- <label for="materialRegisterFormFirstName" >User Name</label> --}}
                            </div>
                        </div>
                    </div>
    
                      <!-- Password -->
                    <div class="md-form mt-0">
                        <input type="email" id="defaultLoginFormPassword" class="form-control" name="email" placeholder="E-mail" value="{{old('email')}}">
                        @error('email')
                            <p class="text-danger">{{$message}}</p>
                         @enderror
                    </div>
            
                    <!-- Sign in button -->
                    <button class="btn orange darken-2 white-text btn-block my-4" type="submit">Continue</button>
            
                </form>
                <!-- Form -->
    
            </div>
    
        </div>
        <!-- Material form register -->
        </div>
    </div>
    </x-authlayout>
    