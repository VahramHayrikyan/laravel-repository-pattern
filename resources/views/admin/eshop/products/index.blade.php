@extends('layouts.admin.app')
@section('content')
    <div class="page-content" style="min-height:878px">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="ajax" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="padding:20px;">
                    <div class="modal-body">
                        <img src="{{ asset('/images/loading-spinner-grey.gif') }}" alt="" class="loading">
                        <span>
								&nbsp;&nbsp;Loading... </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="page-content-body">

            <h3 class="page-title">
                Users <small>Management</small>
            </h3>

            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-users font-green-sharp"></i>
                        <span
                            class="caption-subject font-green-sharp bold uppercase">{{ $data['userCount'] }} Users</span>
                    </div>
                    <div class="actions">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-circle green-haze">
                            <i class="fa fa-plus"></i>
                            <span class="hidden-480">
            New User </span>
                        </a>
                        <a title="" data-original-title="" class="btn btn-circle btn-icon-only btn-default fullscreen"
                           href="javascript:;">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="yw0" class="grid-view">
                        <div class="summary">Displaying 1-100 of results.</div>
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th id="yw0_c0"><a class="sort-link" href="">ID</a></th>
                                <th id="yw0_c1"><a class="sort-link" href="">Title</a></th>
                                <th id="yw0_c2"><a class="sort-link" href="">Prices</a></th>
                                <th id="yw0_c3"><a class="sort-link" href="">Source</a></th>
                                <th id="yw0_c4"><a class="sort-link" href="">Category</a></th>
                                <th id="yw0_c5"><a class="sort-link" href="">Stock</a></th>
                                <th id="yw0_c6">Options</th>
                                <th id="yw0_c7"><a class="sort-link" href="">Release Date</a></th>
                                <th class="button-column" id="yw0_c8">&nbsp;</th>
                            </tr>
                            <tr class="filters">
                                <td><input name="Product[id]" type="text"></td>
                                <td><input name="Product[title]" type="text" maxlength="128"></td>
                                <td><input name="Product[price]" type="text"></td>
                                <td>
                                    <select name="Product[type]" id="Product_type">
                                        <option value="" selected="selected">Select</option>
                                        <option value="local">OP</option>
                                        <option value="codeswholesale">CW</option>
                                        <option value="steamgameswap">sGs</option>
                                        <option value="kinguingames">KG</option>
                                        <option value="dlcsoftgames">DS</option>
                                        <option value="nexwaygames">NW</option>
                                    </select>
                                </td>
                                <td><select name="Product[product_category_id]" id="Product_product_category_id">
                                        <option value="">Select</option>
                                        <option value="1">Steam</option>
                                        <option value="2">OP Gift Codes</option>
                                        <option value="3">uPlay</option>
                                        <option value="4">Origin</option>
                                        <option value="5">Desura</option>
                                        <option value="10">Battle.net</option>
                                        <option value="11">Xbox</option>
                                        <option value="12">Playstation</option>
                                        <option value="13">GOG.com</option>
                                        <option value="15">Software</option>
                                        <option value="16">itch.io</option>
                                        <option value="17">Windows Store</option>
                                        <option value="18">Nintendo</option>
                                        <option value="21">EPIC</option>
                                        <option value="22">Rockstar</option>
                                        <option value="23">Bethesda</option>
                                        <option value="24">Humble</option>
                                        <option value="25">Oculus</option>
                                    </select>
                                </td>
                                <td><input name="Product[stock]" type="text"></td>
                                <td><select name="options" id="options">
                                        <option value="" selected="selected">Select</option>
                                        <option value="hide_stock">Hide Stock</option>
                                        <option value="always_visible">Always Visible</option>
                                        <option value="preorder">Preorder</option>
                                    </select>
                                </td>
                                <td><input id="Product_release_date" type="text" name="Product[release_date]" value="">
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd">
                                <td>6006</td>
                                <td><p class="text-center">Half-Life Complete</p>
                                    <div class="text-center"><a href="/uploads/product/6006/header_ratio_optimized.jpg"
                                                                class="fancybox-button" data-rel="fancybox-button">
                                            <img style="max-height:70px;max-width:70px;"
                                                 src="/uploads/product/6006/header_ratio_optimized.jpg" alt="thumbnail">
                                        </a></div>
                                </td>
                                <td><label style="display:block;font-size: 16px;" class="label label-primary tooltips"
                                           data-container="body" data-placement="top"
                                           data-original-title="Price">$2.82</label><label style="display:block;"
                                                                                           class="label label-default tooltips"
                                                                                           data-container="body"
                                                                                           data-placement="top"
                                                                                           data-original-title="Points">2820</label>
                                </td>
                                <td>&nbsp;</td>
                                <td>Steam</td>
                                <td>0</td>
                                <td></td>
                                <td>16-11-2004</td>
                                <td width="50">
                                    <div class="btn-group" style="width:132px;"><a
                                            class="fa fa-key btn green-haze tooltips" style="font-weight:normal;"
                                            data-container="body" data-placement="top" title=""
                                            href="https://www.opiumpulses.com/adminKey/index/6006"
                                            data-original-title="Manage Keys"> </a><a
                                            class="fa fa-edit btn purple tooltips" style="font-weight:normal;"
                                            data-container="body" data-placement="top" title=""
                                            href="https://www.opiumpulses.com/adminProduct/update/6006"
                                            data-original-title="Update"> </a><a class="btn red fa fa-trash-o tooltips"
                                                                                 style="font-weight:normal;margin-right:0;"
                                                                                 data-container="body"
                                                                                 data-placement="top" title=""
                                                                                 href="/adminProduct/delete/6006"
                                                                                 data-original-title="Delete"> </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </td>
                            </tr>
                            {{--                            @foreach($data['users'] as $user)--}}
                            {{--                            @endforeach--}}
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_simple_numbers text-right">
                            {{--                            {{ $data['users']->links("pagination::bootstrap-4") }}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
