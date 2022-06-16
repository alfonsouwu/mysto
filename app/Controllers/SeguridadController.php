namespace App\Controllers;

class Home extends BaseController
{
    public function base_view()
    {
        // return view('welcome_message');
        print_r(view('index'));

    }
}
