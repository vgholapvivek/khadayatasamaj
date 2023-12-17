@extends('frontend.layouts.master')
@section('content')
@section('title', 'faq')
    <!--home page slider start-->
    <section class="khadayat-samaj-sponser animate fadeInUp one">
        <div class="banner-photo">
            <img src="{{asset('frontend/images/faqs.webp')}}" class="img-fluid" alt="banner">
        </div>
        <div class="banner-photo-mob">
            <img src="{{asset('frontend/images/faqs.webp')}}" class="img-fluid" alt="banner">
        </div>
    </section>
    <!--home page slider start-->


    @include('frontend.includes.shared.sponsers-banner')

    <!-- faq's section  -->
    <section class="faq-section animate fadeInDown two">
        <div class="container">
            <div class="row">
                <div class="schema-faq wp-block-yoast-faq-block">
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">1. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">2. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">3. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">4. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">5. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                    <div class="schema-faq-section">
                        <strong class="schema-faq-question">6. Question will Appear here</strong>
                        <p class="schema-faq-answer">Answer will Appear here.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @livewire('metrimonial-banner-list')    

    @include('frontend.includes.shared.donation-section')

    @livewire('area-seven-banner-list')

@endsection

@section('scripts')
    <script>
        // faq java 
        jQuery(document).ready(function () {
            jQuery(".wp-block-yoast-faq-block .schema-faq-section:first-child").addClass("active").children(".schema-faq-answer").slideDown();//Remove this line if you dont want the first one to be opened automatically.
            jQuery(".schema-faq-question").on("click", function () {
                if (jQuery(this).parent().hasClass("active")) {
                    jQuery(this).next().slideUp();
                    jQuery(this).parent().removeClass("active");
                }
                else {
                    jQuery(".schema-faq-answer").slideUp();
                    jQuery(".schema-faq-section").removeClass("active");
                    jQuery(this).parent().addClass("active");
                    jQuery(this).next().slideDown();
                }
            });
        });
    </script>
    
@endsection