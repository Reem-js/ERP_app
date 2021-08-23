<?php
namespace Suppliers\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\services\walletService;
use Users\Models\User;
use Users\Models\UserWallet;
use Users\Models\UserWalletTransaction;
use Suppliers\Models\Supplier;
use Suppliers\Models\SupplierWallet;
use Suppliers\Models\SupplierWalletTransaction;

class testWalletController extends Controller {
    public function walletTest()
    {
        $balance = UserWallet::findOrFail(10)->total_value;
        $transactions = UserWalletTransaction::where('user_wallet_id', 11)->get();
        return view('Suppliers::wallet-test', compact('balance', 'transactions'));
    }

    public function deposite(Request $request, walletService $walletService)
    {
        $transactionData = [
            'model_type' => 'Models\Sale',
            'model_id' => 6,
            'amount' => $request->amount
        ];
        $message = $walletService->deposite(new UserWallet, 10, $transactionData)->responeHandle();
        return redirect()->back()->with('message', $message);
    }

    public function withDraw(Request $request, walletService $walletService)
    {
        $transactionData = [
            'model_type' => 'Models\Sale',
            'model_id' => 6,
            'amount' => $request->amount
        ];
        $message = $walletService->withdraw(new UserWallet, 10, $transactionData)->responeHandle();
        return redirect()->back()->with('message', $message);
    }

    public function debit(Request $request, walletService $walletService)
    {
        $transactionData = [
            'model_type' => 'Models\Sale',
            'model_id' => 6,
            'amount' => $request->amount
        ];
        $message = $walletService->debit(new SupplierWallet, 11, $transactionData)->responeHandle();
        return redirect()->back()->with('message', $message);
    }
    public function payPremium(Request $request, walletService $walletService)
    {
        $transactionData = [
            'model_type' => 'Models\Sale',
            'model_id' => 6,
            'amount' => $request->amount
        ];
        $message = $walletService->payPremium(new UserWallet, 10, $transactionData,new SupplierWallet,11)->responeHandle();
        return redirect()->back()->with('message', $message);
    }
}
