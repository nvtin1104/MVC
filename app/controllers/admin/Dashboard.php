<?
class Dashboard extends Controller
{
    public $model_home;
    public function __construct(){
        $this->model_home = $this-> model('HomeModel');
    }
    function index()
    {
       $this->render('layout/admin_layout');
    }
}
