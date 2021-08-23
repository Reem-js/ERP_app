<?php

namespace Clients\Http\Controllers\clientss;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Clients\Models\Client;
use Yajra\Datatables\Datatables;
use Clients\Http\Requests\storeClient;
use Clients\Http\Requests\updateClient;
use Form;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return view('clients::clients.index');
    }
    public function clientData()
    {
            $data = Client::latest();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row) {
                        $btn = "<a class='btn btn-info btn-sm' rel='tooltip' title='".__('translation.title.Show Client') ."'
                        href='".route('clients.show', $row->slug)."'> <i class='material-icons'>visibility</i> </a>";
                        $btn .= "<a class='btn btn-info btn-sm' rel='tooltip' title='".__('translation.title.Edit Client')."'
                        href='".route('clients.edit', $row->slug)."'><i class='material-icons'>edit</i></a>";

                        $btn .="<a class='delete-button btn btn-danger btn-sm'  href='javascript:void(0)' data='$row->slug'><i class='material-icons'>close</i></a>";
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients::clients.create');
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeClient $request)
    {
        $data = requestAbstraction($request);
       Client::create($data);
        // call method to create a new client wallet
        return redirectAccordingToRequest($request);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients::clients.show',compact('client'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients::clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Client $client ,updateClient $request)
    {
        $data = requestAbstraction($request);
        $client->update($data);
        return redirectAccordingToRequest($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client ,Request $request)
    {
        $client->delete();
        return redirectAccordingToRequest($request);
    }




}
