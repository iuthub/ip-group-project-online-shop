<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Carts
 * @package App
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 */
class Carts extends Model
{

    /**
     * @param $user_id
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder
     */
    public function getItems($user_id){
        $item = parent::query();
        $item = $item
            ->where('user_id', '=', $user_id)
            ->paginate(10);

        return $item;
    }

    /**
     * @param $user_id
     * @param $product_id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getItem($user_id, $product_id){
        $item = parent::query();
        $item = $item
            ->where('user_id', '=', $user_id)
            ->where('product_id', '=', $product_id)
            ->first();

        return $item;
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
     * @throws \Exception
     */
    public function deleteItem(){
        try{
            $this->delete();
        }catch(Exception $exception){

        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function relationProduct(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
