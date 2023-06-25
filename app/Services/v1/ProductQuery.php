<?php

namespace App\Services\v1;

use Illuminate\Http\Request;

class ProductQuery
{
    protected $safeParams = [
        "productName" => ['eq'],
        "category" => ['eq'],
        "supplier" => ['eq'],
        "unitPrice" => ['eq', 'gt', 'lt'],
        "stock" => ['eq', 'gt', 'lt']
    ];

    protected $columnMap=[
        "productName"=>'pName',
        "unitPrice"=>'unit_price'
    ];
    protected $operatorMap=[
        'eq'=>'=',
        'lt'=>'<',
        'gt'=>'>'
    ];
    // public function transform(Request $request){
       
    //     $eloQuery=[];

    //     foreach($this->safeParams as $parm=> $operators){
            
    //         $query = $request->query($parm);
            
    //         // echo 'query'.var_dump($query);

    //         if(!isset($query)){
    //             continue;
                
    //         }
    //         $column = $this->columnMap[$parm] ?? $parm;
            
    //         foreach($operators as $operator){
    //             if(isset($query[$operator])){
    //                 $eloquery=[$column, $this->operatorMap[$operator], $query[$operator]];
    //                     //echo 'query'.var_dump( $eloquery);
    //                 return $eloQuery;
    //             }
    //         }
    //     }
        
    // }
};
