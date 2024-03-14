<div class="mx-auto w-50">
    <h1>Users</h1>
    <form action="" wire:submit.prevent="handleSubmit">
        <div class="input-group">
            <select class="form-select" wire:model.live.debounce.500ms="status">
                <option value="all">Tất cả trạng thái</option>
                <option value="active">Kích hoạt</option>
                <option value="inactive">Chưa kích hoạt</option>
            </select>
            <input type="search" class="form-control" name="keyword" placeholder="Từ khóa tìm kiếm..."
                wire:model.live.debounce.500ms="keyword" />
            <button class="btn btn-primary">Tìm kiếm</button>
        </div>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->status == 1 ? 'Kích hoạt' : 'Chưa kích hoạt' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>
