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
                            <h2>Redaguoti atsiliepima</h2>
                            <form action="editR">
                                <div class="form-group">
                                    <label for="text">Tekstas:</label>
                                    <input type="text" class="form-control" id="text" name="text">
                                </div>
                                <div class="form-group">
                                    <h4>įvertinimas:</h4>
                                    <select name="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
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
