
<div>
    <h1>Danh sách bài viết</h1>
    <button wire:click="navigateCreate">Thêm mới</button>
    @foreach ($posts as $item)
            <h3 wire:key="{{$item['id']}}">{{$item['name']}}</h3>
    @endforeach
</div>
