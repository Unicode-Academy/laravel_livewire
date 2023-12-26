<ul class="todo-list">
    @foreach ($todoList as $item)
    <li wrie:key="{{$item['id']}}">
        <input type="checkbox">
        <span>{{$item['name']}}</span>
        <button wire:confirm="Are you sure you want to delete this todo?" wire:click="handleDelete('{{$item['id']}}')">&times;</button>
    </li>
    @endforeach
</ul>