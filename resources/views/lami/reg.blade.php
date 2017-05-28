<html>
<body>
<div>
<form action="{{ route('registeruser') }}" method="POST">

    <label class="form-signin">
        <h2 class="form-signin-heading">Please sign up</h2>
        <label for="Name" class="">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required autofocus>

        <label for="password" class="">password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="password" required>

        {{--<label for="Date" class="">Date</label>--}}
        {{--<input type="text" id="date" name="date" class="form-control" placeholder="Date" required>--}}

        <label for="Email" class="">Email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
    </label>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="register">
</form>
</div>
</body>
</html>
