@extends('layouts.app')
@section('content')

    <div class="input-group input-group-lg">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    </div>

        <table id="myTable" class="table table-hover">
            <thead>

            <th>Name</th>

            <th>Last Name</th>

            <th>Email</th>

            <th>Phone</th>

            <th>Address</th>

            <th>Country</th>

            </thead>

            <tbody>
            @foreach($users as $user)

                <tr>

                    <td>{{$user->name}} </td>

                    <td>{{$user->last_name}} </td>

                    <td>{{$user->email}} </td>

                    <td>{{$user->phone}} </td>

                    <td>{{$user->address}} </td>

                    <td>{{$user->country}} </td>

                    <td><button type="edit" class="btn btn-default">Edit</button> <button type="delete" class="btn btn-default">Delete</button> </td>

                    <td><a href="{{ route('seePurchaseHistory',['user' => $user]) }}"><button type="purchaseHistory" class="btn btn-default">Purchase History</button> </td>

                </tr>
            @endforeach

            </tbody>
        </table>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

@endsection
