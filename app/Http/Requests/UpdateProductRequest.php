<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use SebastianBergmann\Type\TrueType;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       
        $method=$this->method();
        if($method=="PUT"){
            return [
                'productName'=>['required'],
                'category'=>['required'],
                'supplier'=>['required'],
                'unitPrice'=>['required'],
                'stock'=>['required'],
            ];
        }else{

            return [
                'productName'=>['sometimes','required'],
                'category'=>['sometimes','required'],
                'supplier'=>['sometimes','required'],
                'unitPrice'=>['sometimes','required'],
                'stock'=>['sometimes','required'],
            ];
        }
    }
    protected function prepareForValidation()
    {
        if($this->productName){
            $this->merge([
                'pName'=>$this->productName
                
            ]);
        }
        if($this->unitPrice){
            $this->merge([
                'unit_price'=>$this->unitPrice
                
            ]);
        }
       
    }

}
