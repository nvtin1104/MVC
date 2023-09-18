<?
class Product extends Controller
{
    public $data = [];
    public function index()
    {
        $product = $this->model('ProductModel');
        $this->data['sub_content']['products']  = $product->getProductList();
        $this->data['page_title'] = 'San Pham';
        $this->data['content'] = 'products/list';
        $this->render('layout/client_layout', $this->data);
    }
    public function detail($id = 0)
    {
        $product = $this->model('ProductModel');
        $this->data['sub_content']['info'] = $product->getProductDetail($id);
        $this->data['content'] = 'products/detail';
        $this->data['page_title'] = 'Chi Tiet San Pham';
        $this->render('layout/client_layout', $this->data);
    }
}
