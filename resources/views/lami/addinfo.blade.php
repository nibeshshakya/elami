
<div class="row">
    <div class="col-md-6 ">
    </div>


    <div class="col-md-6 ">
        <form action="{{ route('insertinfo') }}" method="POST">

            <label class="form-signin">
                <h2 class="form-signin-heading">Additional info</h2>
                <h5>career</h5>
                <label for="jobtitle" class="">job title</label>
                <input type="text" id="name" name="jtitle" class="form-control" placeholder="jobtitle" required autofocus>

                <label for="edutitle" class="">edu title</label>
                <input type="text" id="edutitle" name="edutitle" class="form-control" placeholder="edutitle" required>

                {{--<label for="Date" class="">Date</label>--}}
                {{--<input type="text" id="date" name="date" class="form-control" placeholder="Date" required>--}}

                <label for="salary" class="">salary</label>
                <input type="text" id="salary" name="salary" class="form-control" placeholder="salary" required>

                {{--<label for="password" class="">height</label>--}}
                {{--<input type="text" id="height" name="height" class="form-control" placeholder="Height" required>--}}

                {{--<label for="Sex" class="">Sex</label>--}}
                {{--<input type="text" id="sex" name="sex" class="form-control" placeholder="Sex" required>--}}

                {{--<label for="Age" class="">Age</label>--}}
                {{--<input type="text" id="age" name="age" class="form-control" placeholder="Age" required>--}}

                {{--<label for="address" class="">address</label>--}}
                {{--<input type="text" id="address" name="address" name="address" class="form-control" placeholder="address" required>--}}



                <button class="btn btn-lg btn-primary btn-block" type="submit">insert</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </label>


        </form>
    </div>
</div>