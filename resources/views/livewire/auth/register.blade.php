<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-6">
            <h1 class="text-center">Đăng ký</h1>
            <form action="" wire:submit="handleSubmit">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" placeholder="Name..." class="form-control" wire:model="form.name" />
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email..." class="form-control" wire:model="form.email" />
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password..." class="form-control" wire:model="form.password" />
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">Đăng ký</button>
                </div>
                <p>
                    Email: {{$email}}
                </p>
            </form>
        </div>
    </div>
</div>