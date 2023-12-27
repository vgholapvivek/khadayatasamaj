<form class="form-signin" action="{{url('login')}}" method="post">
    @csrf
                    <h2 class="form-heading text-center">
                         Member Login
                    </h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" name="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" name="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <input type="submit" class="btn btn-lg btn-dark btn-block" wire:click.prevent="login" value="Login">
                </div>
                <div class="log-register">
                   <p>Don't have account? <a href="{{url('register')}}"><u>Create an account?</u></a></p>
                </div>
            </div>
            <div class="col-md-12">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                    </div>
        </form>
    
