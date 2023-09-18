<?
class News extends Controller
{
    public $data;
    public function index()
    {
        $this->data['sub_content']['new_title'] = 'tile_news';
        $this->data['sub_content']['list'] = 'tile_news 2';
        $this->data['sub_content']['new_author'] = 'Tin';
        $this->data['content'] = 'news/list';
        $this->render('layout/client_layout', $this->data);
    }
    public function category()
    {
        $request = new Request();
        var_dump($request->isGet());
        if($request->isGet()){
            $data = $request->getFields();
        };

        print_r($data);
    }
}
