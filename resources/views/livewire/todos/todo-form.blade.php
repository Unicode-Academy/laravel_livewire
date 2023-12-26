<div>
    <form action="" wire:submit="handleAdd">
        <input type="text" placeholder="Tên công việc..." wire:model="name" value="{{$name}}" />
        <button type="submit">Thêm</button>
        @if (session('msg'))
        <p>{{session('msg')}}</p>
        @endif
    </form>
</div>