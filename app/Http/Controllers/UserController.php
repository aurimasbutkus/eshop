<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;


class UserController extends Controller
{


    public function getallUsers()
    {
        $users = \App\User::all();
        return view('allUsers')->with('users',$users);
    }
    public function editUser()
    {
        return view('home');
    }
    public function userWithOderList()
    {
        $usersWithOrders = \App\User::all()->each->orders;
        return view('exportbuyerList')->with('usersWithOrders',$usersWithOrders);
    }
    public function seePurchaseHistory(User $user)
    {
        $products = $user->orders->each->products;

        return view('seePurchaseHistory')->with('usersWithOrders',$products);
    }

    public function deleteUser($id)
    {
        DB::table('users')->delete(['id' => $id]);
        return redirect('allUsers');
    }

    public function editRedirect($id)
    {
        $user = DB::select("SELECT * FROM users WHERE id = '$id'");

        return redirect('editUser')->with('user', $user);
    }

    public function exportToPDF()
    {
        $usersWithOrders = \App\User::all()->each->orders;
        $storage_path = "";
        $pdf = new \Mpdf\Mpdf(['tempDir' =>  sys_get_temp_dir().DIRECTORY_SEPARATOR.'mpdf', 'margin_left' => 0, 'margin_right' => 0,
            'margin_top' => 0, 'margin_bottom' => 0, 'margin_header' => 0, 'margin_footer' => 0]);

        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('TCPDF Example 054');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// ---------------------------------------------------------

// add a page
        $pdf->AddPage();

// create some HTML content
        $html = <<<EOD
<table class="table table-hover">

    <thead>

    <th>Name</th>

    <th>Last Name</th>

    <th>Address</th>

    <th>Country</th>

    <th>Status</th>

    <th>Amount_Paid</th>

    <th><a href="{{route('exportToPDF')}}">Export</th>


    </thead>

    <tbody>

        <tr>

            <td>{{$usersWithOrders[0]->name}} </td>

            <td>{{$usersWithOrders[0]->last_name}} </td>

            <td>{{$usersWithOrders[0]->address}} </td>

            <td>{{$usersWithOrders[0]->country}} </td>

            <td>{{$usersWithOrders[0]->status}} </td>

            <td>{{$usersWithOrders[0]->amount_paid}} </td>

            <td>{{$usersWithOrders[0]->text}} </td>


        </tr>

    </tbody>



</table>

EOD;
        $pdf->WriteHTML($html);
// ---------------------------------------------------------

//Close and output PDF document
        $pdf->Output('example_054.pdf', 'D');

    }


}
