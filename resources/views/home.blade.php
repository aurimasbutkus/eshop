@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="container">
                            <h2>Edit user profile</h2>
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="Name">Name:</label>
                                    <input type="name" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Surname:</label>
                                    <input type="last_name" class="form-control" id="last_name" name="last_name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="phone" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="address" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <input type="country" class="form-control" id="country" name="country">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <input type="gender" class="form-control" id="gender" name="gender">
                                </div>
                                <button type="submit" class="btn btn-default">Save</button>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
