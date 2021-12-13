@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
@stop
@section('content')
    <main class="main" style="margin-top: 81px;">
        <div class="quests-wrapper" style="padding-top: 50px;">
            <div class="container">
                <div class="quests-inner-wrapper">
                    <div class="quests-sidebar">
                        <div class="quests-sidebar-items">
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/account" class="quests-sidebar-item quests-sidebar-item--active">
                                account                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/billingDetails" class="quests-sidebar-item ">
                                billing details                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/profileEdit" class="quests-sidebar-item ">
                                profile                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/achievements" class="quests-sidebar-item ">
                                achievements                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/message/index" class="quests-sidebar-item ">
                                messages                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/order/index" class="quests-sidebar-item ">
                                orders                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/giveawaykeys" class="quests-sidebar-item ">
                                won giveaways                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/history" class="quests-sidebar-item ">
                                notification history                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/wishlist" class="quests-sidebar-item ">
                                wishlist                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/friendslist" class="quests-sidebar-item ">
                                friendlist                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/inviteFriends" class="quests-sidebar-item ">
                                invite friends                        </a>
                            <a style="text-align: center;height: 90px;font-size: 17px;" href="https://www.opiumpulses.com/user/giftcode" class="quests-sidebar-item ">
                                redeem a gift code                        </a>
                        </div><!-- .quests-sidebar-items -->
                    </div><!-- .quests-sidebar -->

                    <div class="quests account-page">




                        <div class="hidden">
                        </div>


                        <div class="account-edit-profile">
                            <form class="form-horizontal" role="form" enctype="multipart/form-data" id="user-form" action="/user/account" method="post">
                                <div class="account-page-title">account details</div>

                                <div class="form-group">
                                    <div class="account-social-network-label">
                                        <label class="col-lg-2 control-label" for="User_email">Email</label>            </div>
                                    <div class="col-lg-8 col-sm-11 col xs-11 account-social-network-site-input-group">
                                        <div class="input-group" style="width: 100%">
                                            <input class="form-control account-social-network-site-input" name="User[email]" id="User_email" type="text" maxlength="128" value="avetisyanedm@gmail.com">                </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="account-social-network-label">
                                        <label class="col-lg-2 control-label" for="User_username">Username</label>            </div>
                                    <div class="col-lg-8 col-sm-11 col xs-11 account-social-network-site-input-group">
                                        <div class="input-group" style="width: 100%">
                                            <input class="form-control account-social-network-site-input" name="User[username]" id="User_username" type="text" maxlength="32" value="foobar">                </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="account-social-network-label">
                                        <label class="col-lg-2 control-label" for="User_image">Image</label>            </div>
                                    <div class="col-lg-8 col-sm-11 col xs-11 account-social-network-site-input-group">
                                        <div class="input-group" style="width: 100%">
                                            <img class="img-thumbnail" src="https://www.gravatar.com/avatar/c4abc562eecfe8a331c4c596c79e0016?s=100&amp;d=https%3A%2F%2Fwww.opiumpulses.com%2Fimages%2Fdefault_avatar_355.png" style="max-width: 100px;">
                                            <label for="User_imageFile" class="uploadButton">UPLOAD IMG</label>
                                            <input id="ytUser_imageFile" type="hidden" value="" name="User[imageFile]"><input style="display:none!important" name="User[imageFile]" id="User_imageFile" type="file">
                                            <div class="account-gravatar-button btn btn-default" data-toggle="modal" data-target="#myModal">
                                                Use Gravatar <span style="font: 100 15px/1 'Automatticons';">G</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="account-edit-profile-buttons">
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 account-edit-profile-button-submit">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>


                        <div class="account-edit-profile" style="margin-top: 20px;">
                            <form class="form-horizontal" role="form" id="new-password-form" action="/user/account?changePassword=1" method="post">


                                <div class="account-page-title">change your password</div>
                                <div class="form-group">
                                    <div class="account-social-network-label">
                                        <label class="col-lg-3 control-label" for="User_current_password">Current Password</label>            </div>
                                    <div class="col-lg-8 col-sm-11 col xs-11 account-social-network-site-input-group">
                                        <div class="input-group" style="width: 100%">
                                            <input class="form-control account-social-network-site-input" placeholder="Current password" value="" name="User[current_password]" id="User_current_password" type="password">                    <div class="errorMessage" id="User_current_password_em_" style="display:none"></div>                </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="account-social-network-label">
                                        <label class="col-lg-3 control-label" for="User_new_password">New Password</label>            </div>
                                    <div class="col-lg-8 col-sm-11 col xs-11 account-social-network-site-input-group">
                                        <div class="input-group" style="width: 100%">
                                            <input class="form-control account-social-network-site-input" placeholder="New password" value="" name="User[password]" id="User_password" type="password" maxlength="128">                    <div class="errorMessage" id="User_password_em_" style="display:none"></div>                </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="account-social-network-label">
                                        <label class="col-lg-3 control-label" for="User_repeat_password">Repeat Password</label>            </div>
                                    <div class="col-lg-8 col-sm-11 col xs-11 account-social-network-site-input-group">
                                        <div class="input-group" style="width: 100%">
                                            <input class="form-control account-social-network-site-input" placeholder="Repeat password" value="" name="User[repeat_password]" id="User_repeat_password" type="password">                    <div class="errorMessage" id="User_repeat_password_em_" style="display:none"></div>                </div>
                                    </div>
                                </div>

                                <div class="account-edit-profile-buttons">
                                    <div class="form-group">
                                        <div class="col-lg-2 col-sm-2 account-edit-profile-button-submit">
                                            <button type="submit" class="btn btn-primary">Update password</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>




                    </div><!-- .quests -->
                </div><!-- .quests-inner-wrapper -->
            </div><!-- .container -->
        </div><!-- .quests-wrapper -->
        <div></div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="font-size:18px;font-weight: 500;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color:#c8c8c8;text-transform: none;">Using Gravatar</h4>
                    </div>
                    <div class="modal-body" style="color:black !important; font-weight:bolder; font-size:14px;">
                        <p>We also allow the use of Gravatar.com to display your avatar on Opium Pulses. A Gravatar is a globally recognized avatar.</p>

                        <p>You create a single Gravatar account, upload your favourite avatar, then whenever you participate in any Gravatar-enabled site, your image will automatically follow you there.</p>
                    </div>
                    <div class="modal-footer">
                        <button style="color:black !important; font-weight:bolder; font-size:14px;" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a style="color:black !important; font-weight:bolder; font-size:14px;" target="_blank" href="http://gravatar.com/" type="button" class="btn btn-info">Continue to Gravatar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="font-size:18px;font-weight: 500;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;color:#c8c8c8;text-transform: none;">Edit your email address</h4>
                    </div>
                    <form class="form-horizontal" role="form" id="email-form" action="/user/emailChange" method="post">            <div class="modal-body" style="color:#c8c8c8 !important;font-size:14px;">

                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="User_email">New Email</label>
                                <div class="col-lg-10">
                                    <input size="32" maxlength="128" class="form-control" name="User[email]" id="User_email" type="text">                                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="User_password">Current Password</label>
                                <div class="col-lg-10">
                                    <input size="32" maxlength="128" class="form-control" name="User[password]" id="User_password" type="password">                                            </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button style="color: black" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button style="color: black" type="submit" class="btn btn-info">Confirm</button>
                        </div>
                    </form>        </div>
            </div>
        </div></main>
@endsection
