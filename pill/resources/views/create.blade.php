@extends('main')

@section('content')
<form action="">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        <div>{{ $errors->first('name') }}</div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}" class="form-control">
        <div>{{ $errors->first('email') }}</div>
    </div>

    <div class="form-group">
        <label for="email">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
        <div>{{ $errors->first('message') }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
@endsection