@extends('index')

@section('content')
<!--========================================================
                         CONTENT
=========================================================-->
    <section class="content">
        <h2>{{ isset($pagetitle) ? $pagetitle : null }}</h2>
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4573.657730427702!2d82.92452332932388!3d55.02869150458358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x295c8d5c15ad0c39!2z0J3QvtCy0L7RgdC40LHQuNGA0YHQutC40Lkg0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INCw0LrQsNC00LXQvNC40YfQtdGB0LrQuNC5INGC0LXQsNGC0YAg0L7Qv9C10YDRiyDQuCDQsdCw0LvQtdGC0LA!5e0!3m2!1sru!2sru!4v1499267728516" width="1132" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="address clearfix">
            <div class="address-block left">
                <h3>
                    <a href="#">address 1</a>
                </h3>
                <address>
                    <span>The Company Name Inc.</span>
                    <span>8901 Marmora Road, Glasgow, D04 89GR.</span>
                </address>
            </div>
            <div class="address-block left">
                <h3>
                    <a href="#">address 1</a>
                </h3>
                <address>
                    <span>+1 800 559 6580</span>
                    <span>+1 959 603 6035</span>
                </address>
            </div>
            <div class="address-block left">
                <h3>
                    <a href="#">address 1</a>
                </h3>
                <address>
                    <span>The Company Name Inc.</span>
                    <span>9863 - 9867 Mill Road, Cambridge, MG09 99HT</span>
                </address>
            </div>
        </div>
        <h2>{{ $formtitle }}</h2>
        <form action="{{ action('FeedbackController@store') }}" method="post" class="feedback">

            @include('_common._form')

        </form>
    </section>

@stop