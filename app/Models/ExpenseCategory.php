<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    protected $table = 'expense_categories';
    protected $fillable = ['id', 'name', 'description', 'color', 'transaction_type'];

    public function transactions() {
        return $this->hasMany(Transaction::class, 'category_id');
    }
}
