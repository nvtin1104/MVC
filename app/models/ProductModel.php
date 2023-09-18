<?
class ProductModel extends Model
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
        return 'id';
    }
    public function getProductList()
    {
        $data = $this->db->query("SELECT * FROM $this->table")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function getProductDetail($id)
    {
        $data = [
            'Item 1',
            'Item 2',
            'Item 3',
            'Item 4',
        ];
        return $data[$id];
    }
}
