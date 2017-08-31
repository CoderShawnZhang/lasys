@extends('backend.layout.main')
@section('after.css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <style>
        .label-env {
            padding: 2px 6px;
            background-color: #6A1B9A;
            font-size: .85em;
        }

        span.level {
            padding: 2px 6px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
            border-radius: 2px;
            font-size: .9em;
            font-weight: 600;
        }

        .progress {
            margin-bottom: 10px;
        }

        i.info-box-icon,
        .progress-bar,
        span.level,
        span.level i {
            color: #FFF;
        }

        span.level.level-empty {
            background-color: {{ log_styler()->color('empty') }};
            color:#FFF;
        }

        .level-all,
        .progress-bar.level-all,
        span.level.level-all,
        .badge.level-all {
            background-color: {{ log_styler()->color('all') }};
            color:#FFF;
        }

        .level-emergency,
        .progress-bar.level-emergency,
        span.level.level-emergency,
        .badge.level-emergency {
            background-color: {{ log_styler()->color('emergency') }};
            color:#FFF;
        }

        .level-alert,
        .progress-bar.level-alert,
        span.level.level-alert,
        .badge.level-alert {
            background-color: {{ log_styler()->color('alert') }};
            color:#FFF;
        }

        .level-critical,
        .progress-bar.level-critical,
        span.level.level-critical,
        .badge.level-critical {
            background-color: {{ log_styler()->color('critical') }};
            color:#FFF;
        }

        .level-error,
        .progress-bar.level-error,
        span.level.level-error,
        .badge.level-error {
            background-color: {{ log_styler()->color('error') }};
            color:#FFF;
        }

        .level-warning,
        .progress-bar.level-warning,
        span.level.level-warning,
        .badge.level-warning {
            background-color: {{ log_styler()->color('warning') }};
            color:#FFF;
        }

        .level-notice,
        .progress-bar.level-notice,
        span.level.level-notice,
        .badge.level-notice {
            background-color: {{ log_styler()->color('notice') }};
            color:#FFF;
        }

        .level-info,
        .progress-bar.level-info,
        span.level.level-info,
        .badge.level-info {
            background-color: {{ log_styler()->color('info') }};
            color:#FFF;
        }

        .level-debug,
        .progress-bar.level-debug,
        span.level.level-debug,
        .badge.level-debug {
            background-color: {{ log_styler()->color('debug') }};
            color:#FFF;
        }
        .page-header{
            margin-left:10px;
        }
        .info-box{
            margin-left:-13px;
        }
    </style>
@endsection
@section('content')
    <div class="box">
        <h1 class="page-header">图形数据分析</h1>

        <div class="row">
            <div class="col-md-3">
                <canvas id="stats-doughnut-chart" height="300"></canvas>
            </div>
            <div class="col-md-9 box-body table-responsive no-padding">
                <section class="box-body">
                    <div class="row">
                        @foreach($percents as $level => $item)
                            <div class="col-md-4">
                                <div class="info-box level level-{{ $level }} {{ $item['count'] === 0 ? 'level-empty' : '' }}">
                                    <span class="info-box-icon">
                                        {!! log_styler()->icon($level) !!}
                                    </span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">{{ $item['name'] }}</span>
                                        <span class="info-box-number">
                                            {{ $item['count'] }} entries - {!! $item['percent'] !!} %
                                        </span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: {{ $item['percent'] }}%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        Chart.defaults.global.responsive      = true;
        Chart.defaults.global.scaleFontFamily = "'Source Sans Pro'";
        Chart.defaults.global.animationEasing = "easeOutQuart";
    </script>
    <script>
        $(function() {
            new Chart($('canvas#stats-doughnut-chart'), {
                type: 'doughnut',
                data: {!! $chartData !!},
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            });
        });
    </script>
@endsection
