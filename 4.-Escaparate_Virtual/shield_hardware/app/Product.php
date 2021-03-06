<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Product extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'price','description','discount','image', 'promotion', 'category_id'];
        
        
        public function discountPrice() {
            $this->price = number_format($this->price * (1 - $this->discount), 2, ',', '');
        }
        
        public function isOffer() {
            return $this->offer === 1;
        }
        
        public function scopeOrderByName($query, $order = 'ASC')
        {
            return $query->orderBy('name', $order);
        }
        
        public function scopeOrderByPrice($query, $order = 'ASC')
        {
            return $query->orderBy('price', $order);
        }
       
       /* public function scopeProductsByCategory($query, $id) {
            return $query->where('category_id', '=', $id);
        }*/

}
