{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal View --}}
{{-- This is first page when a new student is registered --}}
@component('layouts.app')
    @slot('header')
        <h2>Student Dashboard</h2>
    @endslot
    @slot('slot')
        <div class="">Welcome every student</div>
        <p>Here you can create a profile.</p>
        <p>Or attach your existing profile with your account.</p>
        <a href="">Create Profile</a>
    @endslot
@endcomponent
