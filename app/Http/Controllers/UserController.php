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
        $users = \App\User::all();
        $usersWithOrders = [];
        foreach($users as $user)
        {
            if($user->orders->count() > 0)
            {
                $usersWithOrders[] = $user;
            }
        }
        return view('exportbuyerList')->with('usersWithOrders',$usersWithOrders);
    }

    public function getUserOrders(User $user)
    {
        $userOrders = $user->orders;

        return view('userOrders', ['user' => $user, 'orders' => $userOrders]);
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

        public function exportToPDF(User $user)
    {
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
        $html = '
<table class="table table-hover">
    <thead>
    <th>Status</th>
    <th>Amount Paid</th>
    <th>Created at</th>
    <th>Text</th>
    </thead>
    <tbody>
';
        foreach($user->orders as $order)
        {
            $html = $html . "
            <tr>
                <td>$order->status</td>
                <td>$order->amount_paid</td>
                <td>$order->created_at</td>
                <td>$order->text</td>
            </tr>
        ";
        }
$html = $html . '
    </tbody>
</table>
';
        $pdf->WriteHTML($html);
// ---------------------------------------------------------

//Close and output PDF document
        $pdf->Output('example_054.pdf', 'D');

    }


}
