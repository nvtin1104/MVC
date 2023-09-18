<?
class AuthMiddleware extends Middlewares {
    public function handle()
    {
        $homeModel = Load::loadModel('HomeModel');
        if(Session::data('admin')==null){
            $response = new Response();
            $response->redirect('trang-chu');
        }
    }
}