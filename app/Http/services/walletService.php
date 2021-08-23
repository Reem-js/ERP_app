<?php
// status = 0 if there is any errors
namespace App\Http\services;

use Illuminate\Support\Facades\DB;

class walletService
{
    const deposite = 1; //
    const  payPremium = 4; // if wallet balance < 0
    const debit = 2; //
    const withdraw = 3; // if wallet balance > 0
    private $errorCode;

    /**
     * @param object model
     * @param int wallet owner id
     * @return object new wallet
     * / */
    public function createWallet(object $model, int $relatedModelId): object
    {
        return $model->openAccount($relatedModelId);
    }

    /**
     * @param object model
     * @param int wallet id
     * @return float wallet balance
     * / */
    public function getBalance(object $model, int $walletId): float
    {
        return $model->findOrFail($walletId)->total_value;
    }
    /**
     * @param object model
     * @param int wallet id
     * @param array transaction data
     * @return self
     * / */
    public function deposite(object $model, int $walletId, array $transactionData): self
    {
        $this->errorCode =  $this->makeTransaction($model, $walletId, $transactionData, self::deposite);
        return $this;
    }
    /**
     * @param object model
     * @param int wallet id
     * @param array transaction data
     * @return self
     * / */
    public function debit(object $model, int $walletId, array $transactionData): self
    {
        $this->deposite($model,$walletId,$transactionData);
        return $this;
    }
    /**
     * @param object source model
     * @param int source wallet id
     * @param array transaction data
     * @param object destination model
     * @param int destination wallet id
     * @return self
     * / */
    public function payPremium(object $sourceModel, int $sourceWalletId, array $transactionData,object $destinationModel,int $destinationWalletId): self
    {

        $sourceBalance = $this->getBalance($sourceModel, $sourceWalletId);
        $destinationBalance = $this->getBalance($destinationModel, $destinationWalletId);
        if ($sourceBalance <= 0 || $transactionData['amount'] > $sourceBalance) {
            $this->errorCode =  4;
        }
        if( $destinationBalance <= 0){
            $this->errorCode =  2;
        }
        if( $transactionData['amount'] > $destinationBalance){
            $this->errorCode =  3;
        }
        if(empty($this->errorCode)){
            $this->withdraw($sourceModel,$sourceWalletId,$transactionData)->withdraw($destinationModel,$destinationWalletId,$transactionData);
        }
        return $this;
    }

    /**
     * @param object model
     * @param int wallet id
     * @param array transaction data
     * @return self
     * / */
    public function withdraw(object $model, int $walletId, array $transactionData): self
    {
        $balance = $this->getBalance($model, $walletId);
        if ($balance > 0 || $balance >= $transactionData['amount']) {
            $transactionData['amount'] *= -1;
            $this->errorCode =  $this->makeTransaction($model, $walletId, $transactionData, self::withdraw);
        } else {
            $this->errorCode =  4;
        }
        return $this;
    }
    /**
     * @param object model
     * @param int wallet id
     * @param array transaction data
     * @return self
     * / */
    public function makeTransaction(object $model, int $walletId, array $transactionData, int $reason): int
    {

        return DB::transaction(function () use ($model, $walletId, $transactionData, $reason) {
            try {
                $wallet = $model->findOrFail($walletId);
                $model->createWalletTransaction([
                    'wallet_id' => $walletId,
                    'reason' => $reason,
                    'model_type' => $transactionData['model_type'],
                    'model_id' => $transactionData['model_id'],
                    'transaction_status' => 1,
                    'amount' => $transactionData['amount']
                ]);
                $model->where('id', $walletId)->update(['total_value' => $wallet->total_value + $transactionData['amount'], 'number_of_transaction' => $wallet->number_of_transaction + 1]);
                return 1;
            } catch (\Exception $e) {
                return 0;
            }
        });
    }

    public function responeHandle()
    {
        switch ($this->errorCode) {
            case 0:
                return "<div class='alert alert-danger'>Something Went Wrong</div>";
            case 1:
                return "<div class='alert alert-success'>Transaction Successfully Completed</div>";
            case 2:
                return "<div class='alert alert-danger'>You Don't Have any installments to pay</div>";
            case 3:
                return "<div class='alert alert-danger'>The amount paid is more than the amount due</div>";
            case 4:
                return "<div class='alert alert-danger'>You Don't Have Enough Money</div>";
            default:
                return $this->errorCode;
        }
    }
}
