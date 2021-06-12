@extends('layouts.app', ['activePage' => 'addPurchase', 'titlePage' => __('translation.website.sidebar.add Purchase')])

@push('css')
    <style>
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

    </style>
@endpush
@section('content')
    @livewireStyles
    <div class="content">
        <!-- Modal -->
        <div class="modal fade" style="z-index: 1000000" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            {{ __('translation.website.sidebar.add new supplier') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('modals.add-supplier')
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-text card-header-primary">
                            <div class="card-text">
                                <h4 class="card-title">{{ __('translation.website.sidebar.add Purchase') }}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row" style="margin-bottom:50px;">
                                    <div class="form-group col" style="margin: 20px;">
                                        <p class="font-weight-bold" style="color:black; margin-bottom:0px"
                                            for="inputAddress">
                                            {{ __('translation.purchase.supplier') }}</p>
                                        <div class="dropdown"
                                            style="border-radius: 4px;color: #616161;width: 150px;padding: 1px;margin-top: 0px;border: 1px solid #ccc;">
                                            <span style="margin-left: 10px;
                                                            margin-top: 10px;"
                                                tabindex="0">{{ __('translation.purchase.supplier') }}<span
                                                    style="margin-left: 40px;"><i class="fa fa-angle-down"
                                                        aria-hidden="true"></i></span></span>
                                            <div class="less-sticky">
                                                <ul>

                                                    <li class="cb-item"><button type="button" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#exampleModalLong">
                                                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                            {{ __('translation.website.sidebar.add new supplier') }}
                                                        </button></li>
                                                    <li class="cb-item"><a href="http://yes.net">home page</a></li>
                                                    <li class="cb-item"><a href="http://test.net">My home page</a></li>
                                                    <li class="cb-item"><a href="#">Stay on this page</a></li>
                                                    <li class="cb-item"><a href="#">Stay on this page</a></li>
                                                    <li class="cb-item"><a href="#">Stay on this page</a></li>
                                                    <li class="cb-item"><a href="#">Stay on this page</a></li>
                                                    <li class="cb-item"><a href="#">Stay on this page</a></li>
                                                    <li class="cb-item"><a href="#">fd gddsfgpage</a></li>
                                                    <li class="cb-item"><a href="#">457567456756 757this page</a></li>
                                                    <li class="cb-item"><a href="#">Stay on this page</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <p class="font-weight-bold" style="color:black; display:inline;" for="inputAddress">
                                            {{ __('translation.sales.Invoice Number') }} :</p>
                                        <p style="display:inline;">5</p>
                                        <br>
                                        <p class="font-weight-bold" style="color:black; display:inline;" for="inputAddress">
                                            {{ __('translation.sales.Order Date') }} :</p>
                                        <input style="display: inline;
                                                    padding-left: 11px;
                                                    color: #616161;
                                                    padding-right: 7px;border-radius: 4px;
                                                    border: #ccc solid 1px;" type="date" name="" id="">
                                    </div>
                                </div>

                                <livewire:all-purchases />

                                <div class="container" style="margin-top: 60px;">
                                    <div class=" row ">
                                        <div class="form-group col " style="margin: 20px; ">
                                            <p class="font-weight-bold form-group" style="color:black; padding-bottom:0px;"
                                                for="inputAddress">
                                                {{ __('translation.sales.Payment Type') }}</p>
                                            <select class="form-group form-control" name="payment"
                                                style="width: 50%; margin-top:0px; margin-bottom:20px;">
                                                <option value='0'>Select payment Type</option>
                                                <option value="cash">Cash</option>
                                                <option value="install">Install</option>
                                            </select>
                                            <p class="form-group" style="color:black;" for="inputAddress">
                                                {{ __('translation.sales.Note') }}</p>
                                            <textarea name="note" rows="5" cols="28"
                                                style="border:#ccc solid 1px;"></textarea>
                                        </div>
                                        <div class="form-group col">
                                            <div>
                                                <p class="font-weight-bold" style="display:inline;" for="inputAddress">
                                                    {{ __('translation.sales.Discount') }} :</p>
                                                <input type="number"
                                                    style="width:90px; border-radius: 20px;text-align:right;border:#ccc solid 1px;"
                                                    placeholder="  %  "> - <input type="number"
                                                    style="width:90px; border-radius: 20px; text-align:right; border:#ccc solid 1px;"
                                                    placeholder="  LE  ">
                                            </div>
                                            <br>
                                            <p class="font-weight-bold" style=" display:inline; " for="inputAddress">
                                                {{ __('translation.sales.Total') }} :</p>
                                            <input type="number" name=""
                                                style="border:#ccc solid 1px; border-radius: 20px; text-align:right;">
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin: 50px;">
                                    <div class="col-lg-4">
                                        <button type="submit"
                                            class="btn btn-primary">{{ __('translation.website.crud.create') }}</button>
                                        <button type="submit"
                                            class="btn btn-primary">{{ __('translation.website.crud.Create & New') }}</button>
                                    </div>
                                    <div class="col-lg-2 offset-6">
                                        <button type="submit"
                                            class="btn btn-danger">{{ __('translation.website.crud.Cancel') }}</button>
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
            $(".selClient").select2();
        });

    </script>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $(".selItem").select2();
        });

    </script>
    <script>
        $(document).ready(function() {
            // Initialize select2
            $(".selSupplier").select2();
        });

    </script>
@endpush
