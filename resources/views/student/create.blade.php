{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal View --}}
@component('layouts.app')
    @slot('header')
        <h2>
            Create / Modify Your Student Profile
        </h2>
    @endslot
    @slot('slot')
        @include('student.__createStudent', ['action'=> route('profile.store')])
    @endslot
@endcomponent
