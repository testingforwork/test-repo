@extends('layouts.master')
@section('content')
    <?php session_start() ?>

    <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    </ul>

    @if (session()->has('successMsg'))
        <div> {{session()->get('successMsg')}}</div>
    @endif

    <form
        method="post" action="{{route('contact_store')}}"
        class="form">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label>Your Name:</label>
            <input type="text" name="name" required class="form-control" placeholder="Your name"/>
        </div>

        <div class="form-group">
            <label>Your E-mail Address:</label>
            <input type="text" name="email" required placeholder="Your email address"/>
        </div>

        <div class="form-group">
            <label>Your message</label>
            <textarea name="message" required placeholder="Your message"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Contact us"/>
        </div>

    </form>
@endsection

