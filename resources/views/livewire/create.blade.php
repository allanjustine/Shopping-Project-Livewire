<div>
    <div class="card border border-light col-lg-4 mt-5 offset-4">
        <div class="card-header">
            <h3 class="text-center mt-2">Create Shopping</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="customer_name">
                <label for="customer_name">Customer Name</label>
                @error('customer_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="address" />
                <label for="address">Address</label>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="recipient-name" wire:model.defer="mobile_number"
                    required="">
                <label for="mobile_number">Mobile Number</label>
                @error('mobile_number')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="recipient-name" wire:model.defer="product_name"
                    required="">
                <label for="product_name">Product Name</label>
                @error('product_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="recipient-name" wire:model.defer="price"
                    required="">
                <label for="price">Price</label>
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="range" min="1" max="100" step="1" class="form-control" id="recipient-name" wire:model.defer="quantity"
                    required="">
                <label for="quantity">Quantity: <span id="quantity-value"></span></label>
                @error('quantity')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="recipient-name" wire:model.defer="product_stock"
                    required="">
                <label for="product_stock">Product Stock</label>
                @error('product_stock')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <select name="status" class="form-select" wire:model.defer="status">
                    <option disabled>Status</option>
                    <option selected hidden="true">Status</option>
                    <option value="Pending">Pending</option>
                    <option value="To Deliver">To Deliver</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Ongoing">Ongoing</option>
                    <option value="To Pay">To Pay</option>
                </select>
                <label for="status">Status</label>
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addToList()">
                    Add Shopping
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const priceInput = document.querySelector('input[type="range"]');
    const priceValue = document.querySelector('#quantity-value');

    priceInput.addEventListener('input', () => {
        priceValue.textContent = `${priceInput.value}`;
    });
</script>
