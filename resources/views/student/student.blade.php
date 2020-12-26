{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal View --}}
{{-- This is first page when a new student is registered --}}
@component('layouts.app')
    @slot('header')
        <h2>Student Dashboard</h2>
    @endslot
    @slot('slot')
        <div class="container mx-auto mt-2 bg-gray-100">
            <div class="flex ">
                <div class="bg-gray-500 w-max p-2">
                    <div>Lorem ipsum dolor sit amet.</div>
                    <div>Lorem ipsum dolor sit amet.</div>
                    <div>Lorem ipsum dolor sit amet.</div>
                    <div>Lorem ipsum dolor sit amet.</div>
                    <div>Lorem ipsum dolor sit amet.</div>
                </div>
                <div class="bg-red-300 w-full p-3">
                    <div class="">Welcome {{ $userData->email }}</div>
{{--                    <div class="">{{ dd($userData->userType) }}</div>--}}
                    @if(!$userData->userType)
                        <div class="">Create Your Profile</div>
                        @include('student.__createStudent')
                    @elseif($userData->userType && !$userData->user_verified)
                        <div class="">Edit Your Profile</div>
                        @include('student.__createStudent')
                    @else
                        <div class="">This is your profile, and this way we will show it.</div>
                    @endif
                </div>
            </div>
        </div>

        <p>Here you can create a profile.</p>
        <p>Or attach your existing profile with your account.</p>
        <a href="">Create Profile</a>
    @endslot
@endcomponent
