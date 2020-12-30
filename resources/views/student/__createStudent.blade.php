{{-- You can change this template using File > Settings > Editor > File and Code Templates > Code > Laravel Ideal View --}}
<form action="{{ $action }}" method="post">
    @csrf
    <div>
        @error('first_name')
        <div class="text-red-500 text-xs text-">{{$message}}</div>
        @enderror
        <label for="first_name">{{ __('What is your First Name?') }} <span>Required</span></label>
        <input type="text" name="first_name" id="first_name" required>
    </div>
    <div>
        @error('middle_name')
        <div class="text-red-500 text-xs text-">{{$message}}</div>
        @enderror
        <label for="middle_name">{{ __('What is your Middle Name?') }} <span>Not Required</span></label>
        <input type="text" name="middle_name" id="middle_name" value="{{ old('middle_name') }}">
    </div>
    <div>
        @error('last_name')
        <div class="text-red-500 text-xs text-">{{$message}}</div>
        @enderror
        <label for="last_name">{{ __('What is your Last Name?') }} <span>Required</span></label>
        <input type="text" name="last_name" id="last_name" required>
    </div>
    <div>
        @error('dob')
        <div class="text-red-500 text-xs text-">{{$message}}</div>
        @enderror
        <label for="dob">{{ __('What is your Date of Birth?') }} <span>Required</span></label>
        <input type="date" name="dob" id="dob" required>
    </div>
    <div>
        <label for="blood_group">{{ __('What is your Blood Group?') }} <span>Required</span></label>
{{--        <input type="text" name="blood_group" id="blood_group" required>--}}
        <select name="blood_group" id="blood_groop" required>
            <option value="1">A+</option>
            <option value="2">A-</option>
            <option value="3">B+</option>
            <option value="4">B-</option>
            <option value="5" selected>AB+</option>
            <option value="6">AB-</option>
            <option value="7">O+</option>
            <option value="8">O-</option>
        </select>
    </div>
    <div>
        <label for="mother_tongue">{{ __('What is your Mother Tongue?') }} <span>Required</span></label>
        <select name="mother_tongue" id="mother_tongue" required>
            <option value="1" selected>Bengla</option>
            <option value="2">Hindi</option>
            <option value="3">English</option>
            <option value="4">Nepali</option>
            <option value="5">Odia</option>
            <option value="6">Tamil</option>
            <option value="7">Other</option>
        </select>
    </div>
    <div>
        <label for="address">{{ __('Do you lived with your parents?') }} <span>Required</span></label>
        <select name="address" id="address">
            <option value="0" selected>Yes</option>
            <option value="1">No</option>
        </select>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>
