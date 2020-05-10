<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Orders
 * @package App
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int $performed
 */
class Orders extends Model
{
    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|Model|object|null
     */
    public function getItem($id){
        $item = parent::query();
        $item = $item
            ->where('id', '=', $id)
            ->first();

        return $item;
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder
     */
    public function getItems(){
        $items = parent::query();
        $items = $items
            ->paginate(10);

        return $items;
    }

    /**
     * @param array $data
     */
    public function insertItem($data = []){
        try{
            $this->user_id = $data['user_id'];
            $this->product_id = $data['product_id'];
            $this->save();
        }catch(Exception $exception){

        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relationProduct(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
