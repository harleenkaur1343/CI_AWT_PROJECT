<?php
namespace Apps\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table='news';

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
?>