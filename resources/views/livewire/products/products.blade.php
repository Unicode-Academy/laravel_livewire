<div>
    <h2>Products</h2>
    <livewire:products.product-list />
    <livewire:products.product-count @product-created="$set('message', 'Unicode Academy')" />
    <h3>
        {{$message}}
    </h3>
</div>
@script
<script>
$wire.on('product-created', (id) => {
    console.log('Thêm thành công', id);
});
</script>
@endscript