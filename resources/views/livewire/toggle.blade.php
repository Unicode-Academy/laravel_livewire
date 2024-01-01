<div class="container p-3" x-data="{ isShow: @js($isShow), name: '' }">
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
    </div>
</div>