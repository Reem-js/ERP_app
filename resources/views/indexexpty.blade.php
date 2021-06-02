@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Profile')])

@section('content')
    <div class="content">
        <div class="container-fluid">
       
           <button  class="btn btn-success btn-round">
           <i class="fa fa-plus-circle" aria-hidden="true" ></i> ADD Type of Expense
           </button>
           
            <div class="row" >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Expenses Types</h4>
                            <p class="card-category"> Here you can manage expenses types</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               
                            </div>
                            <div class="table-responsive">
                            <table class="table">
    <thead>
        <tr>
            <th class="text-center">#id</th>
            <th></th>
            <th>Expense type</th>
            <th></th>
            <th class="text-right"></th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">1</td>
            <td></td>
            <td>Develop</td>
            <td></td>
            <td class="text-right"></td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                <i class="fa fa-ravelry" aria-hidden="true"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                    <i class="material-icons">edit</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="text-center">2</td>
            <td></td>
            <td>Design</td>
            <td></td>
            <td class="text-right"></td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                <i class="fa fa-ravelry" aria-hidden="true"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                    <i class="material-icons">edit</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
        <tr>
            <td class="text-center">3</td>
            <td></td>
            <td>Design</td>
            <td></td>
            <td class="text-right"></td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-success btn-round">
                <i class="fa fa-ravelry" aria-hidden="true"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-warning btn-round">
                    <i class="material-icons">edit</i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
    </tbody>
</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
