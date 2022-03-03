<x-authlayout>
    <div class="container">
        <div class="col-md-4 offset-4 mt-5">
        <div class="card">
            <h5 class="card-header orange darken-2 white-text text-center py-4">
                <strong>Edit User</strong>
            </h5>
            {{-- @if (session('error'))
                <div class="alert alert-danger">
                  {{session('error')}}
                 </div>
            @endif --}}
            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
            {{-- @foreach ($edituser as $edituser) --}}
                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="{{route('editUpdateUser',$edituser->id)}}" method="POST" enctype="multipart/form-data">
            {{-- @endforeach --}}
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormFirstName" class="form-control" name="username" placeholder="User Name" value="{{$edituser->name}}">
                            </div>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <input type="email" id="materialRegisterFormEmail" class="form-control" name="email" placeholder="E-mail" value="{{$edituser->email}}">
                    </div>
                    <label for="">isAdmin</label>
                    <select name="isAdmin" id="" class="form-control mb-4 text-center">
                        <option value="1" {{$edituser->isAdmin=="1" ? "selected" : ""}}>YES</option>
                        <option value="0" {{$edituser->isAdmin=="0" ? "selected" : ""}}>NO</option>
                    </select>
                    <label for="">isApproved</label>
                    <select name="isApproved" id="" class="form-control mb-4 text-center">
                        <option value="1" {{$edituser->isApproved=="1" ? "selected" : ""}}>YES</option>
                        <option value="0" {{$edituser->isApproved=="0" ? "selected" : ""}}>NO</option>
                    </select>
                    <button class="btn orange darken-2 white-text btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Update</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</x-authlayout>
    