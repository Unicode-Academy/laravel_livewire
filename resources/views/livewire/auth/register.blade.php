<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-6">
            <h1 class="text-center">Đăng ký</h1>
            <form action="" wire:submit="handleSubmit">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" placeholder="Name..." class="form-control" wire:model="form.name" />
                    @error('form.name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email..." class="form-control" wire:model="form.email" />
                    @error('form.email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password..." class="form-control" wire:model="form.password" />
                    @error('form.password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">Đăng ký</button>
                </div>

            </form>
        </div>
    </div>
</div>