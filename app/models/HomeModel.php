<?
class HomeModel extends Model
{
    protected $table = 'test';
    function tableFill()
    {
        return 'test';
    }
    function fieldFill()
    {
        return '*';
    }
    function primaryKey()
    {
        return 'idtest';
    }
    public function getList()
    {
        $data = [
            'Item 1',
            'Item 2',
            'Item 3',
            'Item 4',
        ];
        return $data;
    }
    public function getDetail($id)
    {
        $data = [
            'Item 1',
            'Item 2',
            'Item 3',
            'Item 4',
        ];
        return $data[$id];
    }
    public function getListtest()
    {
        $result = $this->db->table('test')->whereLike('idtest', '%1%')->select('idtest')->limit(3,2)->orderBy('idtest', 'DESC')->get();
        var_dump($result);
    }
    public function getListDetail($idtest)
    {
        $result = $this->db->table('test')->where($idtest, '=', 1)->select('idtest')->get();
        var_dump($result);
    }
    public function insertTest($data){
        $statusInsert = $this->db->table('test')->insert($data);
        return $statusInsert;
    }
    public function updateTest($data, $field){
        $statusInsert = $this->db->table('test')->where('idtest', '=',$field)->update($data);
        return $statusInsert;
    }
    public function deleteTest($field){
        $statusInsert = $this->db->table('test')->where('idtest', '=',$field)->delete();
        return $statusInsert;
    }
}
