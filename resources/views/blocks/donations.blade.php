<div class="col-md-10 col-sm-10 col-md-offset-1" id="Donations">
    <div class="clearfix visible-sm-block"></div>
        <div class="panel panel-chat">
            <div class="panel-heading">
                <h4><a href="{{ route('pages.show', ['id' => 35]) }}">@lang('blocks.donation-title')</a></h4>
            </div>
            <div class="panel-body">
            @php
            $donation_progress = (config("custom.donation-amount", '0') / config("custom.donation-goal", '1') ) * 100;
            $donation_progress = min(round($donation_progress, 2), 100);
            @endphp
                <h3 style="margin-top: 5px;">Goal: {{ config("custom.donation-goal", '0') }} {{ config("custom.donation-unit", 'Unit') }}</h3>
                <div class="progress" style="white-space: nowrap;">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                aria-valuenow="{{ $donation_progress }}" aria-valuemin="0"
                aria-valuemax="100" style="width: {{ $donation_progress }}%;">
                @if (config('custom.donation-goal') > config('custom.donation-amount'))
                    {{ round(config("custom.donation-amount", '0'), 2) }} {{ config("custom.donation-unit", 'Units') }}
                @else
                    @lang('blocks.donation-reached')
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
