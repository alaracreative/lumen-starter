@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    {{ config('app.name') }}
    <section class="container">
        <h2>Contact Us</h2>
        <form method="post" action="/contact">
            <div class="input__group">
                <label>Name</label>
                <input type="text" name="name">
            </div>
            <div class="input__group">
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div class="input__group">
                <label>Message</label>
                <textarea rows="8" name="message"></textarea>
            </div>
            <div class="button__group">
                <button class="button" type="submit">Send</button>
            </div>
        </form>
    </section>
@stop
