@extends('frontend.layouts.master')
@section('content')
@section('title', 'Login')
<style>
    .log-register p a {
       color: #e14949 !important;
    }
    .form-signin{
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 15px 40px 50px;
    border: 1px solid #e5e5e5;
    border-radius: 10px;
    }
    .form-signin .form-heading, .form-signin{
    margin-bottom: 30px;
    } 
    .form-signin input{
    margin-bottom: 20px;
    }

    .form-signin.form-control{
    padding: 10px;
    }
    .btn-dark{
    background-image: linear-gradient(to right top, #051937, #0e173c, #1a133e, #260d3f, #33023d);
    color: #fff;
    }
    .btn-dark:hover{
    color: #fff;
    }
    .btn-block {
    display: block;
    width: 100%;
}
</style>
	
    @include('frontend.includes.shared.sponsers-banner')

    <!-- Membership Samaj section  -->
    <section class="samaj-updates-section animate fadeInDown two">
        <div class="wrapper">
            <div class="container mt-4">
                <div>
                    <div class="row">                        
                    </div>
                    
                    @livewire('member-login')
                </div> 
            </div>             
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')

@endsection
@section('scripts')
	
@endsection