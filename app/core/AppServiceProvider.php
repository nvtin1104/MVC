<?
class AppServiceProvider extends ServiceProvider{
    public function boot(){
        $data = ['1'];
        $data['user_infor'] = $data;
        View::share($data);
    }
}