<div class="todos">
    <h1>Todo App</h1>
    <livewire:todos.todo-list :todoList="$todoList" key="{{count($todoList)}}" />
    <livewire:todos.todo-form />
    @if ($msg)
    <p>{{$msg}}</p>
    @endif
</div>