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
                Point Activity</small>
            </h3>

            <div class="portlet light">
                <div class="portlet-title">
                    <div class="actions">

                        <a title="" data-original-title="" class="btn btn-circle btn-icon-only btn-default fullscreen"
                           href="javascript:;">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="yw0" class="grid-view">
                        <div class="summary">Displaying 1-50 of {{ $points->count() }} results.</div>
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th id="yw0_c0"><a class="sort-link" href="/adminUser/index?User_sort=id">Id</a></th>
                                <th id="yw0_c1"><a class="sort-link" href="/adminUser/index?User_sort=role">User</a></th>
                                <th id="yw0_c2"><a class="sort-link" href="/adminUser/index?User_sort=username">Type</a></th>
                                <th id="yw0_c3"><a class="sort-link" href="/adminUser/index?User_sort=email">Description</a></th>
                                <th id="yw0_c4"><a class="sort-link" href="/adminUser/index?User_sort=points">Change</a></th>
                                <th id="yw0_c5">Point Before</th>
                                <th id="yw0_c6"><a class="sort-link" href="/adminUser/index?User_sort=timestamp">Point After</a>
                                <th id="yw0_c6"><a class="sort-link" href="/adminUser/index?User_sort=timestamp">Timestamp</a>
                                </th>
                                <th class="button-column" id="yw0_c7"></th>
                            </tr>
                            <tr class="filters">
                                <td><input class="form-control" name="" type="text"></td>
                                <td><input class="form-control" name="" type="text" maxlength="32"></td>
                                <td><input class="form-control" name="" type="text" maxlength="32"></td>
                                <td><input class="form-control" name="" type="text" maxlength="128"></td>
                                <td><input class="form-control" name="" type="text" value=""></td>
                                <td></td>
                                <td><input class="form-control" id="" type="text" name="" value=""></td>
                                <td></td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($points as $point)
                                <tr class="odd">
                                    <td>{{ $point->id }}</td>
                                    <td><a style="word-break:break-all;" href="" target="_blank">
                                            <p>#{{ $point->user->id }}<br>{{ $point->user->email }}</p>
                                            <p style="font-size:10px;color:#8e5fa2;">{{ $point->user->email }}</p>
                                        </a></td>
                                    <td>{{ $point->type }}</td>
                                    <td>{{ $point->description }}</td>
                                    <td class="{{ $point->change >0 ? 'text-success':'text-danger' }}">{{ $point->change }}</td>
                                    <td>{{ $point->points_before }}</td>
                                    <td>{{ $point->points_after }}</td>
                                    <td>{{ $point->timestamp }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_simple_numbers text-right">
                            {{ $points->links("pagination::bootstrap-4") }}
                        </div>
                        <div class="keys" style="display:none" title="/adminUser/index">
                            <span>197819</span><span>197818</span><span>197817</span><span>197816</span><span>197815</span><span>197814</span><span>197813</span><span>197812</span><span>197811</span><span>197810</span><span>197809</span><span>197808</span><span>197807</span><span>197806</span><span>197805</span><span>197804</span><span>197803</span><span>197802</span><span>197801</span><span>197800</span><span>197799</span><span>197798</span><span>197797</span><span>197796</span><span>197795</span><span>197794</span><span>197793</span><span>197792</span><span>197791</span><span>197790</span><span>197789</span><span>197788</span><span>197787</span><span>197786</span><span>197785</span><span>197784</span><span>197783</span><span>197782</span><span>197781</span><span>197780</span><span>197779</span><span>197778</span><span>197777</span><span>197776</span><span>197775</span><span>197774</span><span>197773</span><span>197772</span><span>197771</span><span>197770</span><span>197769</span><span>197768</span><span>197767</span><span>197766</span><span>197765</span><span>197764</span><span>197763</span><span>197762</span><span>197761</span><span>197760</span><span>197759</span><span>197758</span><span>197757</span><span>197756</span><span>197755</span><span>197754</span><span>197753</span><span>197752</span><span>197751</span><span>197750</span><span>197749</span><span>197748</span><span>197747</span><span>197746</span><span>197745</span><span>197744</span><span>197743</span><span>197742</span><span>197741</span><span>197740</span><span>197739</span><span>197738</span><span>197737</span><span>197736</span><span>197735</span><span>197734</span><span>197733</span><span>197732</span><span>197731</span><span>197730</span><span>197729</span><span>197728</span><span>197727</span><span>197726</span><span>197725</span><span>197724</span><span>197723</span><span>197722</span><span>197721</span><span>197720</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
