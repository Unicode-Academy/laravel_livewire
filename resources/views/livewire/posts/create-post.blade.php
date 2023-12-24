<div>
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
