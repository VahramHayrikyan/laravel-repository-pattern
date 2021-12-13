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
                        <div class="summary">Displaying 1-100 of {{ $data['userCount'] }} results.</div>
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th id="yw0_c0"><a class="sort-link" href="/adminUser/index?User_sort=id">Id</a></th>
                                <th id="yw0_c1"><a class="sort-link" href="/adminUser/index?User_sort=role">Role</a>
                                </th>
                                <th id="yw0_c2"><a class="sort-link"
                                                   href="/adminUser/index?User_sort=username">Username</a></th>
                                <th id="yw0_c3"><a class="sort-link" href="/adminUser/index?User_sort=email">Email</a>
                                </th>
                                <th id="yw0_c4"><a class="sort-link" href="/adminUser/index?User_sort=points">Points</a>
                                </th>
                                <th id="yw0_c5">Notes</th>
                                <th id="yw0_c6"><a class="sort-link" href="/adminUser/index?User_sort=timestamp">Timestamp</a>
                                </th>
                                <th class="button-column" id="yw0_c7">&nbsp;</th>
                            </tr>
                            <tr class="filters">
                                <td><input class="form-control" name="User[id]" type="text"></td>
                                <td><input class="form-control" name="User[role]" type="text" maxlength="32"></td>
                                <td><input class="form-control" name="User[username]" type="text" maxlength="32"></td>
                                <td><input class="form-control" name="User[email]" type="text" maxlength="128"></td>
                                <td><input class="form-control" name="User[points]" type="text" value=""></td>
                                <td>&nbsp;</td>
                                <td><input class="form-control" id="User_timestamp" type="text" name="User[timestamp]"
                                           value=""></td>
                                <td>&nbsp;</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['users'] as $user)
                                <tr class="odd">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        <p style="max-width:200px;word-wrap: break-word">{{ $user->email }}</p>
                                    </td>
                                    <td>{{ $user->points }}</td>
                                    <td>
                                        <a href="{{ route('admin.users.notes.create',$user->id) }}"
                                           class="btn btn-xs green-haze text-center tooltips"
                                           data-original-title="Add Note"
                                           style="display:inline;margin-bottom:3px;">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <a href="{{ route('admin.users.notes.index',$user->id) }}"
                                           class="btn btn-xs btn-default text-center tooltips"
                                           data-original-title="View Notes">
                                            <i class="fa fa-book"></i>
                                        </a>
                                    </td>
                                    <td>{{ $user->timestamp }}</td>
                                    <td>
                                        <div class="btn-group" style="width:222px;">
                                            <a
                                                class="fa fa-info btn blue-hoki tooltips" style="font-weight:normal;"
                                                data-toggle="modal" data-target="#ajax" data-container="body"
                                                data-placement="top" title="" href=""
                                                data-original-title="View"> </a>
                                            <a class="fa fa-edit btn purple tooltips"
                                               style="font-weight:normal;"
                                               data-container="body"
                                               data-placement="top" title=""
                                               href="{{ route('admin.users.edit',$user->id) }}"
                                               data-original-title="Update"> </a>
                                            <button
                                                class="btn red fa fa-trash-o tooltips"
                                                style="font-weight:normal;margin-right:0;"
                                                title="Delete" onclick="$(this).next('form').submit()">  </button>
                                            <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <a
                                                class="fa fa-shopping-cart btn blue tooltips"
                                                style="font-weight:normal; margin-left:2px" data-container="body"
                                                data-placement="top" title="" href=""
                                                data-original-title="Empty Cart"> </a>

                                            <button
                                                class="btn {{ $user->role == 'banned' ? 'fa fa-check text-success' : 'fa fa-ban text-danger' }} tooltips"
                                                style="font-weight:normal;margin-left: 5px"  title=""
                                                data-original-title="Ban user" onclick="$(this).next('form').submit()"></button>
                                            <form action="{{ route('admin.users.ban',$user->id) }}" method="POST">
                                                @method('PUT')
                                                @csrf
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_simple_numbers text-right">
                            {{ $data['users']->links("pagination::bootstrap-4") }}
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
