@extends('layouts.admin.app')
@section('css')
    <style>
        .cke_contents {
            max-height: 300px;
        }
    </style>
@stop
@section('content')
    <div class="page-content" style="min-height:878px">

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

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="user-note"></i>
                        Create User Note
                    </div>
                </div>
                <div class="portlet-body form">

                    <form class="form-horizontal" role="form" id="product-category-form"
                          action="{{ route('admin.users.notes.update',[$data['user']->id,$data['note']->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-body">

                            <h3>Add note for user #{{ $data['user']->id }} {{ $data['user']->username }}</h3>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="col-md-3 control-label required" for="UserNote_note">Note <span
                                            class="required">*</span></label>
                                    <div class="col-md-12" style="margin-top:10px; max-height: 1000px">
                                        <textarea name="note" class="ckeditor" >{!! $data['note']->note !!}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <input class="btn btn-success" type="submit" name="yt0" value="Update"> <a
                                            href="https://www.opiumpulses.com/adminUser/index" class="btn default">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}" async></script>
@stop
