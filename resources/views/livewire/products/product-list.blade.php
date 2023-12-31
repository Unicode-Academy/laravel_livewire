<div>
    <ul>
        @if ($products)
        @foreach ($products as $product)
        <li>{{$product}}</li>
        @endforeach
        @endif
    </ul>
    <p>Id: {{$id}}</p>
</div>
@script
<script>
    $wire.on('product-clear', () => {
        Toastify({
            text: "Xóa thành công",
            duration: 3000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
            onClick: function() {} // Callback after click
        }).showToast();
    });
</script>
@endscript