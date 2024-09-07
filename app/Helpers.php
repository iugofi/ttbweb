<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class Helpers
{
    public static function getPlanDetails($id)
    {
        return DB::table('product_details')
            ->join('planname', 'planname.plan_id', '=', 'product_details.plan_id')
            ->join('storepick', 'storepick.PICK_ID', '=', 'product_details.key_type')
            ->select('product_details.id', 'planname.name as name', 'product_details.price', 'product_details.discount', 'product_details.coupons', DB::raw('(product_details.price)/12 AS monthlyprice'))
            ->where('storepick.STORE_ID', '=', 'key_type')
            ->where('product_details.id', $id)
            ->first();
    }
}
