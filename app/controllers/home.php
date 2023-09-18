<?
class Home extends Controller
{
    public $model_home, $data;
    public function __construct()
    {
        // require_once __DIR_ROOT__ . '/app/models/HomeModel.php';
        // $this->model = new HomeModel();
        $this->model_home = $this->model('HomeModel');
    }
    function index()
    {
        // $this->model_home->getListtest();
        // // $this->model_home->getListDetail('1');
        // $data = $this->model_home->find(1);
        $data = [
            'testcol' => 'tesst2'
        ];
        $result =  $this->db->table('test')->get();
       echo 1;
    }
    function detail($id, $slug)
    {
        echo $id;
        echo $slug;
    }
    function getUser()
    {
        $request = new Request();
        $data = $request->getFields();
        $this->render('user/add');
        print_r($data);
    }
    function postUser()
    {
        $id = 4;
        $request = new Request();
        $data = $request->getFields();
        if ($request->isPost()) {
            $request->rules([
                'username' => 'required|min:5|max:30',
                'email' => 'required|email|min:6|unique:test:email:id=' . $id,
                'password' => 'required|min:8',
                'cf-password' => 'required|min:8|match:password',
                'age' => 'required|callback_check_age',
            ]);
            $request->messages([
                'username.required' => 'Họ tên không được để trống',
                'password.required' => 'Mật khẩu không được để trống',
                'username.min' => 'Họ tên phải trên 5 kí tự',
                'username.max' => 'Họ tên phải dưới 30 kí tự',
                'age.required' => 'ege phải trên 8 kí tự',
                'age.callback_check_age' => 'ege sd kí tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email ton tai',
                'email.min' => 'Email phải trên 6 kí tự',
                'password.min' => 'Password phải trên 8 kí tự',
                'cf-password.required' => 'Cf-Password không được trống',
                'cf-password.match' => 'Cf-Password sai',
                'cf-password.min' => 'Cf-Password tối thiểu'
            ]);
            $validate = $request->valides();
            if (!$validate) {
                $this->data['msg'] = 'Da co loi xay ra  ';
                $this->data['old'] = $request->getFields();
            }
            $this->render('user/add', $this->data);
        } else {
            $response = new Response();
            $response->redirect('home/getUser');
        }
    }
    public function check_age($age)
    {
        if ($age <= 20) {
            return true;
        } else {
            return false;
        }
    }
}
