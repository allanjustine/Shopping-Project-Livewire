<div>
    <div class="container">
        {{-- deleting shopping --}}
        <div wire:ignore.self class="modal fade" id="update-modal-shopping" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title title3" id="exampleModalLabel">Are you sure you want to update this data?
                        </h5>
                        <button type="button" class="btn btn-outline-secondary rounded-circle" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-black ">This will be change permanently.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn--outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" wire:click="editFromList()">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end deleting shopping --}}
        <div class="row">
            <div class="col-sm-4">

                <div class="card border border-light">
                    <div class="card-header">
                        <h3 class="text-center mt-2">Update Shopping</h3>
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
                            <input type="number" class="form-control" id="recipient-name"
                                wire:model.defer="mobile_number" required="">
                            <label for="mobile_number">Mobile Number</label>
                            @error('mobile_number')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="recipient-name"
                                wire:model.defer="product_name" required="">
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
                            <input type="number" class="form-control" id="recipient-name" wire:model.defer="quantity"
                                required="">
                            <label for="quantity">Quantity</label>
                            @error('quantity')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="recipient-name"
                                wire:model.defer="product_stock" required="">
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
                            <button class="btn btn-primary" title="Update" data-toggle="modal"
                                data-target="#update-modal-shopping">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <h3>To Update</h3>
                @foreach ($shoppings as $shopping)
                    <div class="card shadow-sm" style="width: 400px; border: none;">
                        <div class="card-body">
                            <ul style="list-style: none;">
                                <li>Customer Name: {{ $shopping->customer_name }}</li>
                                <li>Address: {{ $shopping->address }}</li>
                                <li>Mobile Number: {{ $shopping->mobile_number }}</li>
                                <li>Product Name: {{ $shopping->product_name }}</li>
                                <li>Price: {{ $shopping->price }}</li>
                                <li>Quantity: {{ $shopping->quantity }}</li>
                                <li>Product Stock: {{ $shopping->product_stock }}</li>
                                <li>Status: {{ $shopping->status }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
                <a href="/shopping">Back to shoppings list</a>
            </div>
        </div>
    </div>
</div>
