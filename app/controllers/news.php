<?
class News extends Controller
{
    public $data;
    public function index()
    {
        $this->data['new_title'] = 'tile_news';
        $this->data['list'] = 'tile_news 2';
        $this->data['new_author'] = 'Tin';
        $this->render('news/list', $this->data);
    }
    public function category($id)
    {
        echo "News" . $id;
    }
}
