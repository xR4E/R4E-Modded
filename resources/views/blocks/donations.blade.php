<div class="col-md-10 col-sm-10 col-md-offset-1">
    <div class="clearfix visible-sm-block"></div>
        <div class="panel panel-chat shoutbox">
            <div class="panel-heading">
                <h4>{{ config("r4e.donation-title", 'Donations') }}</h4>
            </div>
            <div class="panel-body">
                <h3 style="margin-top: 10px;">Goal: {{ config("r4e.donation-goal", '0') }} {{ config("r4e.donation-unit", 'Unit') }}</h3>
                <div class="progress"><div role="progressbar" aria-valuenow="$data" aria-valuemin="0" aria-valuemax="{{ config("r4e.donation-goal", '0') }}" class="progress-bar progress-bar-striped active" style="width:{{ config("r4e.donation-amount", '0') }}%;">
                    {{ config("r4e.donation-amount", '0') }}{{ config("r4e.donation-unit", 'Units') }}
                </div>
            </div>
        </div>
    </div>
</div>
