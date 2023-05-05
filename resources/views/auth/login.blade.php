@extends('welcome')

@section('contents')
    <form method="post" action="{{ route('login.submit') }}">
        @csrf
        <div>
            <label for="email">Email</label>

            <input type="text" name="email" class="form-control" id="email" placeholder="Your email address">
        </div>
        <div>

            <label for="password">Password</label>

            <input type="password" name="password" class="form-control border-end" id="password"
                placeholder="Input your password">
        </div>
        <div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>

    </form>
@endsection
