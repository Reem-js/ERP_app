@extends('layouts.app', ['activePage' => 'addSale', 'titlePage' => __('translation.website.sidebar.Add Sale')])
@push('css')
    {{-- <style>
        .less-sticky {
            border-radius: 10px;
            background-color: #ccc !important;

            max-height: 200px;
            margin-top: 7px;
            background-color: rgb(255, 255, 255);
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            z-index: 10;
            overflow-y: scroll !important;
            overflow-x: hidden !important;
            border-width: 0px 1px 1px;
            border-style: solid solid solid;
            border-color: rgb(220, 220, 220) rgb(220, 220, 220) rgb(220, 220, 220);
        }

        .dropdown {
            /* "relative" and "inline-block" (or just "block") are needed
                         here so that "absolute" works correctly in children */
            position: relative;
            display: inline-block;
        }

        .dropdown>*:last-child {
            /* Using `display:block` here has two desirable effects:
                         (1) Accessibility: it lets input widgets in the dropdown to
                             be selected with the tab key when the dropdown is closed.
                         (2) It lets the opacity transition work.
                         But it also makes the contents visible, which is undesirable
                         before the list drops down. To compensate, use `opacity: 0`
                         and disable mouse pointer events. Another side effect is that
                         the user can select and copy the contents of the hidden list,
                         but don't worry, the selected content is invisible. */
            display: block;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s;
            /* fade out */
            position: absolute;
            left: 0;
            top: 100%;
            border: 1px solid #888;
            background-color: #fff;
            box-shadow: 1px 2px 4px 1px #666;
            box-shadow: 1px 2px 4px 1px #4448;
            z-index: 9999;
            min-width: 100%;
            box-sizing: border-box;
        }

        /* List of situations in which to show the dropdown list.
                       - Focus dropdown or non-last child of it => show last-child
                       - Focus .downarrow of combobox => show last-child
                       - Stay open for focus in last child, unless .less-sticky
                       - .sticky last child stays open on hover
                       - .less-sticky stays open on hover, ignores focus in last-child */
        .dropdown:focus>*:last-child,
        .dropdown>*:focus~*:last-child,
        .dropdown>.less-sticky:last-child:hover {
            display: block;
            opacity: 1;
            transition: 0.15s;
            pointer-events: auto;
        }

        /* detect Edge/IE and behave if though less-sticky is on for all
                       dropdowns (otherwise links won't be clickable) */
        @supports (-ms-ime-align:auto) {
            .dropdown>*:last-child:hover {
                display: block;
                opacity: 1;
                pointer-events: auto;
            }
        }

        /* detect IE and do the same thing. */
        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .dropdown>*:last-child:hover {
                display: block;
                opacity: 1;
                pointer-events: auto;
            }
        }

        .dropdown:not(.sticky)>*:not(:last-child):focus,
        .dropdown:focus {
            pointer-events: none;
            /* Causes second click to close */
        }

        .downarrow:focus {
            outline: 2px solid #8BF;
            /* Edge/IE can't do outline transparency */
            outline: 2px solid #48F8;
        }


        /* ------------------------------------------ */
        /* ----- Styling for examples                 */
        /* ------------------------------------------ */

        .cb-item {
            display: block;
            margin: 0px;
            padding: 2px;
            color: #000;
        }

        .cb-item:hover,
        .cb-item:hover>a:visited {
            color: #fff;
            background-color: #88f;
        }


        ul {
            width: max-content;
            margin: 0;
            padding: 0;
        }

    </style> --}}
@endpush
@section('content')
    @livewireStyles
    <div class="content">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('modals.modal-add-client')
                        {{-- <livewire:modals.modal-add-client /> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="add_supplier" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- @livewire('modals.modal-add-client') --}}
                        <livewire:modals.modal-show-supplier />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="installment_form" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Installment Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- @livewire('modals.modal-add-client') --}}
                        <livewire:modals.modal-installment-details />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.Add Sale') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="usersale mb-5">
                                    {{-- d-flex justify-content-between --}}
                                    <div class="form-group col-sm-2 col-md-5 col-ld-5 m-4 ">
                                        <p class="font-weight-bold mb-0" for="inputAddress">
                                            {{ __('translation.clients.Name') }}</p>
                                            {{-- <div>
                                                <em>Single Select</em>
                                                <select data-placeholder="Your Favorite Type of Bear" class="chosen-select" tabindex="7">
                                                  <option value=""></option>
                                                  <option>American Black Bear</option>
                                                  <option>Asiatic Black Bear</option>
                                                  <option>Brown Bear</option>
                                                  <option>Giant Panda</option>
                                                  <option selected>Sloth Bear</option>
                                                  <option disabled>Sun Bear</option>
                                                  <option>Polar Bear</option>
                                                  <option disabled>Spectacled Bear</option>
                                                </select>
                                            </div> --}}
                                            <select class="client_dropdown w-50" name="client_name">
                                                <option value="0">{{ __('Select client') }}</option>
                                                <option value="1">client 1</option>
                                                <option value="2">client 2</option>
                                            </select>

                                            <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="text-primary ml-3"><i class="fa fa-plus" aria-hidden="true"></i> Add Client</a>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-3 col-lg-3 w-50">
                                        <p class="font-weight-bold d-inline" for="inputAddress">
                                            {{ __('translation.sales.Invoice Number') }} :</p>
                                        <p class="d-inline">5</p>
                                        <br>
                                        <p class="font-weight-bold d-inline" for="inputAddress">
                                            {{ __('translation.sales.Order Date') }} :</p>
                                        <input class="d-inline pl-2 text-black pr-1 border border-dark rounded"
                                     type="date" name="" id="">
                                    </div>
                                </div>
                                <livewire:all-sales/>
                                <div class="usersale mt-5">
                                    {{-- d-flex justify-content-between col-sm-12 --}}
                                    <div class="form-group col-sm-2 col-md-5 col-lg-5 m-4" >
                                        <p class="font-weight-bold form-group" for="inputAddress">
                                            {{ __('translation.sales.Payment Type') }}</p>
                                        <select onclick="payment()"  id="payment_drop" class="payment_dropdown border border-dark rounded w-50" name="payment">
                                            <option value='0'>Select payment Type</option>
                                            <option value="cash">Cash</option>
                                            <option value="install">Install</option>
                                        </select>
                                        <p class="form-group" for="inputAddress">
                                            {{ __('translation.sales.Note') }}</p>
                                        <textarea name="note" rows="5" cols="27" class=" border border-dark rounded w-50"></textarea>
                                    </div>
                                    <div class="form-group col-sm-2 col-md-5 col-lg-5 m-4 text-right" >
                                        <div>
                                            <p class="font-weight-bold d-inline" for="inputAddress">
                                                {{ __('translation.sales.Discount') }} :</p>
                                            <input type="text" class="border border-dark rounded text-right w-25" placeholder="  %  ">
                                            - <input type="text" class="border border-dark rounded text-right w-25" placeholder="  LE  ">
                                        </div>
                                        <br>
                                        <p class="font-weight-bold d-inline" for="inputAddress">
                                            {{ __('translation.sales.Total') }} :</p>
                                        <input type="text" name="" class="border border-dark rounded ml-4 w-50">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @livewireScripts
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            // Initialize select2
            $(".selItem").select2();
        });
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
        });
        $(document).ready(function() {
            $(".client_dropdown").select2();
        });
        $(document).ready(function() {
            $(".payment_dropdown").select2();
        });
    </script>
    <script>

        $(".tryselect").chosen();
    </script>
    <script>
        $(document).ready(function() {
            $(".item_dropdown").select2();
        });
        $( "#payment_drop" ).change(function() {
            var check = $(this).val();
            if(check == 'install'){
                $('#installment_form').modal('show');
            }
        });
    </script>
@endpush
