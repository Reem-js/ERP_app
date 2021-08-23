<?php

namespace App\Http\traits;

trait walletTrait
{
    public function createWalletTransaction(array $transactionData)
    {

        $model = new $this->transactionTable;
        $transactionDataValues = array_values($transactionData);
        $data = array_combine($model->fillable, $transactionDataValues);
        return $model->create($data);
    }


    public function openAccount($supplier_id)
    {
       return $this->create(['total_paid'=>0,'total_pending'=>0,'status'=>1,'number_of_transaction'=>0,'total_value'=>0,'supplier_id'=>$supplier_id]);
    }
}
