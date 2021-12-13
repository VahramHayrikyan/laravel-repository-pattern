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

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-edit"></i>
                        Edit User
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="well">
                        <p>
                            User public link:
                            <a class="text-primary" href="" target="_blank">
                                /user/profile/197819 </a>
                        </p>
                    </div>
                </div>
                <div class="portlet-body form">

                    <form class="form-horizontal" role="form" id="user-form" action="{{ route('admin.users.update',$user->id) }}"
                          method="post">
                        <div class="form-body">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_username">Username <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input size="32" maxlength="32" class="form-control" name="username"
                                           id="User_username" type="text" value="{{ $user->username }}">
                                    @error('username')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_email">Email <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input size="60" maxlength="128" class="form-control" name="email" id="User_email"
                                           type="text" value="{{ $user->email }}">
                                    @error('email')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_points">Points <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" disabled="disabled" name="points" id="User_points"
                                           type="text" value="{{ $user->points }}">
                                    @error('points')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                    <a href=""
                                                                      class="btn btn-xs purple">Adjust Points</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_credit">Credit <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" disabled="disabled" name="credit" id="User_credit"
                                           type="text" value="{{ $user->credit }}">
                                    @error('credit')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                    <a href=""
                                                                        class="btn btn-xs purple">Adjust Credit</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="User_phone">Phone</label>
                                <div class="col-md-9">
                                    <input size="32" maxlength="32" class="form-control" name="phone" id="User_phone"
                                           type="text" value="{{ $user->phone }}">
                                    @error('phone')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_role">Role <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <select class="form-control" name="role" id="User_role">
                                        <option value="user" @if( $user->role == 'user' ) selected @endif>User</option>
                                        <option value="admin" @if( $user->role == 'admin' ) selected @endif>
                                            Administrator
                                        </option>
                                        <option value="content_creator"
                                                @if( $user->role == 'content_creator' ) selected @endif>Content Creator
                                        </option>
                                        <option value="banned" @if( $user->role == 'banned' ) selected @endif>Banned
                                        </option>
                                        <option value="game_publisher"
                                                @if( $user->role == 'game_publisher' ) selected @endif>Game Publisher
                                        </option>
                                    </select></div>
                                @error('role')
                                <div class="errorMessage">{{ $message }}</div>
                                @enderror
                                </div>


                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="customer">Trusted Customer <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input id="ytUser_trusted_customer" type="hidden" value="0"
                                           name="trusted_customer">
                                    <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                            class="icheck" name="trusted_customer" id="User_trusted_customer"
                                            value="{{ $user->trusted_customer }}" type="checkbox" style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                </div>
                            </div>

                            <div id="publisher_options" class="well" style="display: none">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="User_publisher_name">Publisher
                                        Name</label>
                                    <div class="col-md-9">
                                        <input size="32" maxlength="32" class="form-control" name="User[publisher_name]"
                                               id="User_publisher_name" type="text" value=""></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="User_publisher_payment_currency">Publisher
                                        Payment Currency</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="User[publisher_payment_currency]"
                                                id="User_publisher_payment_currency">
                                            <option value="" selected="selected">Choose Currency</option>
                                            <option value="USD">US Dollars ($)</option>
                                            <option value="EUR">Euros (€)</option>
                                            <option value="GBP">British Pounds (£)</option>
                                        </select></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="User_publisher_payment_method">Publisher
                                        Payment Method</label>
                                    <div class="col-md-9">
                                        <input class="form-control ui-autocomplete-input"
                                               id="User_publisher_payment_method" name="User[publisher_payment_method]"
                                               type="text" maxlength="32" value="" autocomplete="off"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <input class="btn btn-success" type="submit" name="yt0" value="Update"> <a
                                        href="{{ route('admin.users.index') }}" class="btn default">Cancel</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="portlet box green" style="min-height: 184px;">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-plus"></i>
                        Permissions (only applicable to content creators)
                    </div>
                </div>
                <div class="portlet-body form">

                    <form class="form-horizontal" role="form" id="permission-form" action="/adminUser/update/197819"
                          method="post">
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="UserPermission_arcade">Arcade</label>
                                <div class="col-md-9">
                                    <div class="icheck-inline">
                                        <label>
                                            <input id="ytUserPermission_arcade" type="hidden" value="0"
                                                   name="UserPermission[arcade]">
                                            <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                                    class="icheck" name="UserPermission[arcade]"
                                                    id="UserPermission_arcade" value="1" type="checkbox"
                                                    style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="UserPermission_media">Media</label>
                                <div class="col-md-9">
                                    <div class="icheck-inline">
                                        <label>
                                            <input id="ytUserPermission_media" type="hidden" value="0"
                                                   name="UserPermission[media]">
                                            <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                                    class="icheck" name="UserPermission[media]"
                                                    id="UserPermission_media" value="1" type="checkbox"
                                                    style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="UserPermission_article_creator">Article
                                    Creator</label>
                                <div class="col-md-9">
                                    <div class="icheck-inline">
                                        <label>
                                            <input id="ytUserPermission_article_creator" type="hidden" value="0"
                                                   name="UserPermission[article_creator]">
                                            <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                                    class="icheck" name="UserPermission[article_creator]"
                                                    id="UserPermission_article_creator" value="1" type="checkbox"
                                                    style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="UserPermission_article_editor">Article
                                    Editor</label>
                                <div class="col-md-9">
                                    <div class="icheck-inline">
                                        <label>
                                            <input id="ytUserPermission_article_editor" type="hidden" value="0"
                                                   name="UserPermission[article_editor]">
                                            <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                                    class="icheck" name="UserPermission[article_editor]"
                                                    id="UserPermission_article_editor" value="1" type="checkbox"
                                                    style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="UserPermission_giveaway_creator">Giveaway
                                    Creator</label>
                                <div class="col-md-9">
                                    <div class="icheck-inline">
                                        <label>
                                            <input id="ytUserPermission_giveaway_creator" type="hidden" value="0"
                                                   name="UserPermission[giveaway_creator]">
                                            <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                                    class="icheck" name="UserPermission[giveaway_creator]"
                                                    id="UserPermission_giveaway_creator" value="1" type="checkbox"
                                                    style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="UserPermission_giveaway_editor">Giveaway
                                    Editor</label>
                                <div class="col-md-9">
                                    <div class="icheck-inline">
                                        <label>
                                            <input id="ytUserPermission_giveaway_editor" type="hidden" value="0"
                                                   name="UserPermission[giveaway_editor]">
                                            <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                                    class="icheck" name="UserPermission[giveaway_editor]"
                                                    id="UserPermission_giveaway_editor" value="1" type="checkbox"
                                                    style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="UserPermission_product_creator">Product
                                    Creator</label>
                                <div class="col-md-9">
                                    <div class="icheck-inline">
                                        <label>
                                            <input id="ytUserPermission_product_creator" type="hidden" value="0"
                                                   name="UserPermission[product_creator]">
                                            <div class="icheckbox_minimal-grey" style="position: relative;"><input
                                                    class="icheck" name="UserPermission[product_creator]"
                                                    id="UserPermission_product_creator" value="1" type="checkbox"
                                                    style="position: absolute; opacity: 0;">
                                                <ins class="iCheck-helper"
                                                     style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <input class="btn btn-success" type="submit" name="yt1" value="Update"> <a
                                        href="{{ route('admin.users.index') }}" class="btn default">Cancel</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div style="background-color: black;width: 400px;height: 400px;">47</div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection
