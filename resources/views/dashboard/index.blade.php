@extends("layout.page")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-blue">
                <span class="offset_anchor" id="widget_real_time"></span>
                <div class="widget-title">
                    <div class="widget-controls">
                        <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.fullscreen") }}"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="{{ Lang::get("widget.exit-fullscreen") }}"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.refresh") }}"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.minimize") }}"><i class="fa fa-minus-circle"></i></a>
                        <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.close") }}"><i class="fa fa-times-circle"></i></a>
                    </div>
                    <h3><i class="fa fa-signal"></i> Gerçek Zamanlı</h3>
                </div>
                <div class="widget-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="big-legend-w shadow-right">
                                <div class="legend-label">Load Avg</div>
                                <div class="legend-value" id="plot-chart-value">15</div>
                                <div class="legend-sub-label">total load avg</div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="placeholder" style="height: 250px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="widget widget-red">
                <div class="widget-title">
                    <div class="widget-controls">
                        <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.fullscreen") }}"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="{{ Lang::get("widget.exit-fullscreen") }}"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.refresh") }}"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.minimize") }}"><i class="fa fa-minus-circle"></i></a>
                        <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.close") }}"><i class="fa fa-times-circle"></i></a>
                    </div>
                    <h3><i class="fa fa-dashboard"></i> System Information</h3>
                </div>
                <div class="widget-content">
                    <div class="row">
                        <div class="col-sm-4"><div id="gauge-loadavg" style="height:90px"></div></div>
                        <div class="col-sm-4"><div id="gauge-disk" style="height:90px"></div></div>
                        <div class="col-sm-4"><div id="gauge-blue" style="height:90px"></div></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="widget widget-green">
                <span class="offset_anchor" id="widget_last_activites"></span>
                <div class="widget-title">
                    <div class="widget-controls">
                        <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.fullscreen") }}"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="{{ Lang::get("widget.exit-fullscreen") }}"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.refresh") }}"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.minimize") }}"><i class="fa fa-minus-circle"></i></a>
                        <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ Lang::get("widget.close") }}"><i class="fa fa-times-circle"></i></a>
                    </div>
                    <h3><i class="fa fa-warning"></i> Son Aktiviteler</h3>
                </div>
                <div class="widget-content">
                    <ul class="activity-list">
                        <li>
                            <div class="row">
                                <div class="col-xs-9"><p><i class="fa fa-bell activity-image"></i> 5 bekleyen site hatası</p></div>
                                <div class="col-xs-3 text-right"><span class="activity-time">5 dk.</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-9"><p><i class="fa fa-fire activity-image"></i> Sunucu kapandı <span class="label label-danger">dikkat</span></p></div>
                                <div class="col-xs-3 text-right"><span class="activity-time">8 dk.</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-9"><p><i class="fa fa-flag-o activity-image"></i> 5 bekleyen site hatası</p></div>
                                <div class="col-xs-3 text-right"><span class="activity-time">12 dk.</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-9"><p><i class="fa fa-smile-o activity-image"></i> Yeni kullanıcı <span class="label label-success">yay!</span></p></div>
                                <div class="col-xs-3 text-right"><span class="activity-time">15 dk.</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-9"><p><i class="fa fa-bell activity-image"></i> 5 bekleyen sunucu hatası</p></div>
                                <div class="col-xs-3 text-right"><span class="activity-time">25 dk.</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop

@section("page.js")
    <?php $disk = CpanelWhm::getdiskusage(["api.version" => 1]); ?>
    <script>
        var loadavg = "{{ CpanelWhm::loadavg()["one"] }}";
        var diskused = {{ $disk["data"]["partition"][1]["used"] }}/(1024*1024);
        var maxdisk = {{ $disk["data"]["partition"][1]["total"] }}/(1024*1024);
        diskused = diskused.toFixed(2);
        maxdisk = maxdisk.toFixed(2);

        currentmail = {{ count(CpanelWhm::fetch_mail_queue(["api.version" => 1])["data"]["records"]) }};
        maxmail = 100;
    </script>
    <script src='{{ asset("assets/js/scripts/pano.js") }}'></script>
@stop