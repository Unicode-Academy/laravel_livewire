<div class="container p-3">
    @if ($isShow)
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quod id at. Voluptas repellat, est architecto
        numquam fuga laborum vitae distinctio molestias dolores praesentium! Cumque odio eum commodi nihil nam!</p>
    @endif
    <button class="btn btn-primary" wire:click="$toggle('isShow')">{{$isShow ? 'Ẩn':'Hiện'}}</button>
    <livewire:content />
</div>