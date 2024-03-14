<div class="mx-auto w-50">
    <h1>Users</h1>
    <form action="" wire:submit.prevent="handleSubmit">
        <div class="input-group">
            <select class="form-select" wire:model="status">
                <option value="all">Tất cả trạng thái</option>
                <option value="active">Kích hoạt</option>
                <option value="inactive">Chưa kích hoạt</option>
            </select>
            <input type="search" class="form-control" name="keyword" placeholder="Từ khóa tìm kiếm..."
                wire:model="keyword" />
            <button class="btn btn-primary">Tìm kiếm</button>
        </div>
        <h3>Keyword: {{$keyword}}</h3>
        <h3>Status: {{$status}}</h3>
    </form>
</div>