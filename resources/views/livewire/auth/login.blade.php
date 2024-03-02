<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-6">
            <h1 class="text-center">Đăng nhập</h1>
            <form action="" wire:submit="handleSubmit">
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" placeholder="Email..." class="form-control" wire:model="email" />
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password..." class="form-control" wire:model="password" />
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">Đăng nhập</button>
                </div>
                <p class="text-center">
                    <a href="/register" wire:navigate>Đăng ký tài khoản</a>
                </p>
                <p class="text-center">
                    <a href="#" @click.prevent="isShowModal=true">Quên mật khẩu?</a>
                </p>
            </form>
        </div>
    </div>
</div>