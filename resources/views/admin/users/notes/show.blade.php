@extends('layouts.admin.app')
@section('content')
    <div class="page-content">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="ajax" role="basic" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="padding:20px;">
                    <div class="modal-body">
                        <img src="/images/loading-spinner-grey.gif" alt="" class="loading">
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
                User Notes <small>Management</small>
            </h3>

            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-note font-green-sharp"></i> User notes
                    </div>
                    <div class="actions">
                        <a title="" data-original-title="" class="btn btn-circle btn-icon-only btn-default fullscreen"
                           href="javascript:;">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="yw0" class="grid-view">
                        <div class="summary">Displaying 1-1 of 1 result.</div>
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                            <tr>
                                <th id="yw0_c0"><a class="sort-link"
                                                   href="/adminUserNote/index?UserNote%5Buser_id%5D=1800&amp;UserNote_sort=id">ID</a>
                                </th>
                                <th id="yw0_c1"><a class="sort-link"
                                                   href="/adminUserNote/index?UserNote%5Buser_id%5D=1800&amp;UserNote_sort=user_id">User</a>
                                </th>
                                <th id="yw0_c2"><a class="sort-link"
                                                   href="/adminUserNote/index?UserNote%5Buser_id%5D=1800&amp;UserNote_sort=creator_id">Creator</a>
                                </th>
                                <th id="yw0_c3"><a class="sort-link"
                                                   href="/adminUserNote/index?UserNote%5Buser_id%5D=1800&amp;UserNote_sort=note">Note</a>
                                </th>
                                <th id="yw0_c4"><a class="sort-link"
                                                   href="/adminUserNote/index?UserNote%5Buser_id%5D=1800&amp;UserNote_sort=timestamp">Timestamp</a>
                                </th>
                                <th class="button-column" id="yw0_c5">&nbsp;</th>
                            </tr>
                            <tr class="filters">
                                <td><input class="form-control" name="UserNote[id]" type="text"></td>
                                <td><input class="form-control" name="UserNote[user_id]" type="text" value=""></td>
                                <td><input class="form-control" name="UserNote[creator_id]" type="text"></td>
                                <td><input class="form-control" name="UserNote[note]" type="text"></td>
                                <td><input class="form-control" name="UserNote[timestamp]" type="text"></td>
                                <td>&nbsp;</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['notes'] as $note)
                                <tr class="odd">
                                    <td>{{ $note->id }}</td>
                                    <td><a style="word-break:break-all;" href=""
                                           target="_blank">
                                            <p># {{ $note->user->id }}<br> {{ $note->user->username }}</p>
                                            <p style="font-size:10px;color:#8e5fa2;">{{ $note->user->email }}</p>
                                        </a></td>
                                    <td><a style="word-break:break-all;" href=""
                                           target="_blank">
                                            <p>#{{ $note->creator->id }}<br>{{ $note->creator->username }}</p>
                                            <p style="font-size:10px;color:#8e5fa2;">{{ $note->creator->email }}</p>
                                        </a></td>
                                    <td>
                                        <div class="fr-view">{!! $note->note !!}</div>
                                    </td>
                                    <td>{{ $note->getTimeStampAttribute()->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-group" style="width:122px;">
                                            <a
                                                class="fa fa-edit btn purple tooltips" style="font-weight:normal;"
                                                data-container="body" data-placement="top" title=""
                                                href="{{ route('admin.users.notes.edit',[$note->user->id,$note->id]) }}" data-original-title="Update"> </a>
                                            <button
                                                class="btn red fa fa-trash-o tooltips"
                                                style="font-weight:normal;margin-right:0;" data-container="body"
                                                title="" data-original-title="Delete" onclick="$(this).next('form').submit()"></button>
                                            <form action="{{ route('admin.users.notes.destroy',[$note->user->id,$note->id]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $data['notes']->links('pagination::bootstrap-4') }}
                        <div class="keys" style="display:none" title="/adminUserNote/index?UserNote%5Buser_id%5D=1800">
                            <span>6</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
