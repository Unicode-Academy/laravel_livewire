<div class="container p-3" x-data="{ isShow: @js($isShow), name: '', message: '' }"
    @toggle-clicked="message=event.detail[0]">
    <p x-show="isShow">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod officiis sapiente, non, asperiores ipsa eum
        laborum praesentium suscipit esse odio facere laboriosam iusto ullam deleniti, autem eaque rerum voluptates?
        Architecto.
    </p>
    <div>
        <input type="text" x-on:keyup="$wire.handleSearch(event.target.value)" />
        <h3 x-text="name"></h3>
    </div>
    <div>
        <button x-on:click="isShow = !isShow">Toggle</button>
        <button x-on:click="$wire.$dispatch('toggle-clicked', ['Unicode Academy', 10])">Click me</button>
        <button x-on:click="$wire.$refresh">Refresh</button>
        <button x-on:click="$wire.$set('text', 'Hello Unicode')">Set Text</button>
    </div>
    <div>{{$text}}</div>
    <h3 x-text="message"></h3>
    <h2 x-clipboard>Hello Hoàng An Unicode</h2>
</div>
<!-- Khi dùng $wire:
- $dispatch
- $parent
- $toggle
- $set
- $refresh-->