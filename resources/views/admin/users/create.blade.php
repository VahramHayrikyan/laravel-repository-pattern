@extends('layouts.admin.app')
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
        <div class="page-content-body">

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-user"></i>
                        New User
                    </div>
                </div>
                <div class="portlet-body form">

                    <form class="form-horizontal" role="form" id="user-form" action="{{ route('admin.users.store') }}"
                          method="post">
                        @csrf
                        <div class="form-body">

                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_username">Username <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input size="32" maxlength="32" class="form-control" name="username"
                                           id="User_username" type="text" value="{{ old('username') }}">
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
                                           type="text" value="{{ old('email') }}">
                                    @error('email')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_password">Password <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input size="60" maxlength="128" class="form-control" name="password"
                                           id="User_password" type="password">
                                    @error('password')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_points">Points <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" disabled="disabled" name="points" id="User_points"
                                           type="text" value="0">
                                    @error('points')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label required" for="User_credit">Credit <span
                                        class="required">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" disabled="disabled" name="credit" id="User_credit"
                                           type="text" value="0.00">
                                    @error('credit')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="User_phone">Phone</label>
                                <div class="col-md-9">
                                    <input size="32" maxlength="32" class="form-control" name="phone" id="User_phone"
                                           type="text" value="{{ old('phone') }}">
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
                                        <option value="user" @if( old('role') == 'user' ) selected @endif>User</option>
                                        <option value="admin" @if( old('role') == 'admin' ) selected @endif>
                                            Administrator
                                        </option>
                                        <option value="content_creator"
                                                @if( old('role') == 'content_creator' ) selected @endif>Content Creator
                                        </option>
                                        <option value="banned" @if( old('role') == 'banned' ) selected @endif>Banned
                                        </option>
                                        <option value="game_publisher"
                                                @if( old('role') == 'game_publisher' ) selected @endif>Game Publisher
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
                                            class="icheck"
                                            name="trusted_customer"
                                            id="User_trusted_customer"
                                            value="1"
                                            type="checkbox"
                                            style="position: absolute; opacity: 0;">
                                        <ins class="iCheck-helper"
                                             style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                    </div>
                                    @error('trusted_customer')
                                    <div class="errorMessage">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div id="publisher_options" class="well" style="display: none">
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="User_publisher_name">Publisher
                                        Name</label>
                                    <div class="col-md-9">
                                        <input size="32" maxlength="32" class="form-control" name="User[publisher_name]"
                                               id="User_publisher_name" type="text"></div>
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
                                               id="User_publisher_payment_method"
                                               name="User[publisher_payment_method]" type="text" maxlength="32"
                                               autocomplete="off"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <input class="btn btn-success" type="submit" name="yt0" value="Save"> <a
                                        href="{{ route('admin.users.index') }}" class="btn default">Cancel</a>
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
