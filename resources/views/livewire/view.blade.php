<div>
    <div class="container">
        @foreach ($shoppings as $shopping)
        <div class="card offset-5 shadow-sm" style="width: 400px; border: none;">
            <div class="card-header">
                <h4>Product Name: {{ $shopping->product_name }}</h4>
            </div>
            <div class="card-body">
                <ul style="list-style: none;">
                    <li>Order by: {{ $shopping->customer_name }}</li>
                    <li>Mobile Number: {{ $shopping->mobile_number }}</li>
                    <li>Quantity: {{ $shopping->quantity }}</li>
                    <li>Price: {{ $shopping->price }}</li>
                </ul>
                <a href="/shopping">Back to shoppings</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
