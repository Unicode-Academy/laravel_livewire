<div>
    {{-- 
        <h2>{{$title}}</h2>
        <p>
            {{$content}}
        </p>
        <h2>Danh sách bài viết</h2>
        @foreach ($posts as $item)
            <h3 wire:key="{{$item['id']}}">{{$item['name']}}</h3>
        @endforeach
        <livewire:posts.button />
        --}}
    @if (session('msg'))
        {{session('msg')}}
    @endif    
   <form action="" wire:submit="handleSubmit">
    <input type="text" placeholder="Tên..." wire:model="name"/>
    <button>Submit</button>
   </form>
   <div>
    <h3>Kết quả: {{$result}}</h3>
   </div>
</div>
