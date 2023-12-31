<div class="container">
    <h2 class="mb-3 text-center">Chuyển đổi tiền tệ</h2>
    <div class="row">
        <div class="col-6">
            <livewire:money-converter.vnd />
        </div>
        <div class="col-6">
            <livewire:money-converter.usd :usd="$usd" key="{{$usd}}" />
        </div>
    </div>
</div>