<div class="container p-3" x-data="{ isShow: @js($isShow) }">
    {{--
    @if ($isShow)
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quod id at. Voluptas repellat, est architecto
        numquam fuga laborum vitae distinctio molestias dolores praesentium! Cumque odio eum commodi nihil nam!</p>
    @endif
   
        <button class="btn btn-primary" wire:click="$toggle('isShow')">{{$isShow ? 'Ẩn':'Hiện'}}</button>
    --}}
    <p x-show="isShow">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod officiis sapiente, non, asperiores ipsa eum
        laborum praesentium suscipit esse odio facere laboriosam iusto ullam deleniti, autem eaque rerum voluptates?
        Architecto.
    </p>
    <button x-on:click="isShow = !isShow">Toggle</button>
    <livewire:content />
</div>