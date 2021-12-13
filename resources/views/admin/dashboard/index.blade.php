@extends('layouts.admin.app')

@section('content')
{{--    <div class="page-content" style="min-height:614px">--}}
{{--        <div class="page-content-body d-none">--}}
{{--            <div class="portlet box yellow d-none">--}}
{{--                <div class="portlet-title">--}}
{{--                    <div class="caption">--}}
{{--                        <i class="fa fa-lock"></i>--}}
{{--                        Authentication required!--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="portlet-body form">--}}
{{--                    <form class="form-horizontal" role="form" id="fanart-form" action="" method="post">--}}
{{--                        <div class="form-body">--}}
{{--                            <div class="form-group">--}}
{{--                                <label class="col-md-4 control-label" for="User_phone">Submit your security pin</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input class="form-control" name="pin" id="User_pin" type="text" value="">--}}
{{--                                    <span id="send-sms" class="btn btn-primary" style="margin-top: 10px;">Send me a PIN by sms</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-actions">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-offset-4 col-md-8">--}}
{{--                                        <input class="btn btn-success" type="submit" name="yt0" value="Submit"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-light blue-soft" href="/adminUser/index">
                    <div class="visual">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            185549        		</div>
                        <div class="desc">
                            Users registered        		</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-light green-soft" href="/adminOrder/index">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            99577    			</div>
                        <div class="desc">
                            Products sold
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-light red-soft" href="/stat/earnings">
                    <div class="visual">
                        <i class="glyphicon glyphicon-usd"></i>
                    </div>
                    <div class="details">
                        <div class="number" style="line-height: 1;font-size: 16px;">
                            $344249.99<br>€19774.53<br>£30176.47    			</div>
                        <div class="desc">
                            Revenue
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-light purple-soft" href="/adminArcade/index">
                    <div class="visual">
                        <i class="icon-game-controller"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            2912909			</div>
                        <div class="desc">
                            Games played
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> Maintenance (Full) </a>
                            </h4>
                        </div>
                        <div id="collapse_1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input data-setting="maintenance_mode" type="checkbox" class="make-switch" data-on-color="success" data-off-color="danger"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse_2" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> Maintenance (Store) </a>
                            </h4>
                        </div>
                        <div id="collapse_2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="maintenance_store" class="make-switch" data-on-color="success" data-off-color="danger"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapse_4" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> Affiliate Tracking </a>
                            </h4>
                        </div>
                        <div id="collapse_4" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="affiliate_tracking" class="make-switch" data-on-color="success" data-off-color="danger" checked=""></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> SiftScience </a>
                            </h4>
                        </div>
                        <div id="collapse_3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="siftscience_enabled" class="make-switch" data-on-color="success" data-off-color="danger" checked=""></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse_5" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> TinyPNG </a>
                            </h4>
                        </div>
                        <div id="collapse_5" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>Usage this month: <span class="text-danger" style="font-weight: bold">102</span></p>
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="tinypng_enabled" class="make-switch" data-on-color="success" data-off-color="danger" checked=""></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapse_6" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> DLCSoft </a>
                            </h4>
                        </div>
                        <div id="collapse_6" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>Hide from store</p>
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="hide_dlcsoft" class="make-switch" data-on-color="success" data-off-color="danger" checked=""></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion11">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion11" href="#collapse_11" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> Nexway </a>
                            </h4>
                        </div>
                        <div id="collapse_11" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>Hide from store</p>
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="hide_nexway" class="make-switch" data-on-color="success" data-off-color="danger"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse_7" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> 2-factor Authentication</a>
                            </h4>
                        </div>
                        <div id="collapse_7" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>off 2-factor</p>
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-on"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="2_factor" class="make-switch" data-on-color="success" data-off-color="danger" checked=""></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion12" href="#collapse_12" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> CW</a>
                            </h4>
                        </div>
                        <div id="collapse_12" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>Hide from store</p>
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="hide_cw_list" class="make-switch" data-on-color="success" data-off-color="danger"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel-group accordion" id="accordion13">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion13" href="#collapse_13" aria-expanded="false">
                                    <i class="fa fa-exclamation-triangle"></i> Kinguin</a>
                            </h4>
                        </div>
                        <div id="collapse_13" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <p>Hide from store</p>
                                <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-off"><div class="bootstrap-switch-container"><span class="bootstrap-switch-handle-on bootstrap-switch-success">ON</span><span class="bootstrap-switch-label">&nbsp;</span><span class="bootstrap-switch-handle-off bootstrap-switch-danger">OFF</span><input type="checkbox" data-setting="hide_kinguin_list" class="make-switch" data-on-color="success" data-off-color="danger"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="easy-pie-chart">
            <div class="number transactions" data-percent="2.30">
                <span>2.30</span>% <canvas height="150" width="150" style="height: 75px; width: 75px;"></canvas><canvas height="75" width="75"></canvas></div>
            <span class="title">CPU</span>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

















@endsection
