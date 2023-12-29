<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-6">
            <h1 class="text-center">Đăng ký</h1>
            <form action="" wire:submit="handleSubmit">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" placeholder="Name..." class="form-control"
                        wire:model.live.throttle.1000ms="form.name" wire:dirty.class="border border-danger" />
                    @error('form.name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email..." class="form-control"
                        wire:model.live.debounce.150ms="form.email" wire:dirty.class="border border-danger" />
                    @error('form.email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password..." class="form-control"
                        wire:model.live.debounce.150ms="form.password" wire:dirty.class="border border-danger" />
                    @error('form.password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">
                        <span wire:loading>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            Loading
                        </span>
                        <span wire:loading.remove>
                            Đăng ký
                        </span>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>