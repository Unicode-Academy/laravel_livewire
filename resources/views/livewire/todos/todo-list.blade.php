<ul class="todo-list">
    @foreach ($todoList as $item)
    <li wrie:key="{{$item['id']}}">
        <input type="checkbox">
        <span>{{$item['name']}}</span>
        <button>&times;</button>
    </li>
    @endforeach
</ul>