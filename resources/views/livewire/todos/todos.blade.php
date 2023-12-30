<div class="todos">
    <div class="row justify-content-center">
        <div class="col-6">
            <h1>Todo App</h1>
            <livewire:todos.todo-filter />
            <livewire:todos.todo-list :todoList="$todoList" :search="$search" key="{{rand()}}" />
            <livewire:todos.todo-form />
            @if ($msg)
            <p>{{$msg}}</p>
            @endif
        </div>
    </div>
</div>