<div>
    <div class="container offset-3">
        {{-- deleting shopping --}}
        <div wire:ignore.self class="modal fade" id="delete-modal-shopping" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title title3" id="exampleModalLabel">Are you sure you want to delete this data?
                        </h5>
                        <button type="button" class="btn btn-outline-secondary rounded-circle" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center text-black ">This will permanently deleted.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" wire:click="deleted()">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- end deleting shopping --}}
        <div class="col-sm-8">
            <div class="grid">
                @foreach ($shoppings as $shopping)
                    <div class="grid-item">

                        <h5 class="text-center">Progress...</h5>
                        <hr>
                        <label for="customer_name"><span style="font-weight: 800;">Customer:</span> <span
                                style="text-decoration: underline;">{{ $shopping->customer_name }}</span></label><br>
                        <label for="product_name"><span style="font-weight: 800;">Product:</span> <span
                                style="text-decoration: underline;">{{ $shopping->product_name }}</span></label><br>
                        <label for="status"><span style="font-weight: 800;">Status:</span> <span
                                style="text-decoration: underline;">{{ $shopping->status }}</span></label><br>
                        <label for="quantity"><span style="font-weight: 800;">Quantity:</span> <span
                                style="text-decoration: underline;">{{ $shopping->quantity }}</span></label><br>
                        <label for="mobile_number"><span style="font-weight: 800;">Mobile Number:</span> <span
                                style="text-decoration: underline;">{{ $shopping->mobile_number }}</span></label>

                    </div>
                @endforeach
                @if (!empty($search) && $shoppings->count() === 0 )
                    <div class="grid-item">
                        <h4 class="text-center mt-5">"{{ $search }}" search not found.</h4>
                    </div>
                @elseif($shoppings->count() === 0)
                    <div class="grid-item">
                        <h4 class="text-center mt-5">No data found.</h4>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-sm-8">
            <h3>Product Ordered
                @if (session('message'))
                    <h5 class="alert alert-success text-success text-center">{{ session('message') }}</h5>
                @endif
            </h3>
            <div class="row">
                <div class="col-sm-4">
                    <select name="status" class="form-control" wire:model="status">
                        <option value="All">All</option>
                        <option value="Pending">Pending</option>
                        <option value="To Deliver">To Deliver</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Ongoing">Ongoing</option>
                        <option value="To Pay">To Pay</option>
                    </select>
                </div>

            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Search" wire:model.lazy="search">

            </div>
            <div class="col-sm-4">
                <a href="/create" class="btn btn-primary d-flex justify-content-end float-end mt-2 mb-1">Add Data</a>
            </div>
            </div>
            <table class="table tbl-striped tbl-hovered">
                <thead class="bg-info">
                    <tr>
                        <th>ID.</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shoppings as $shopping)
                        <tr>
                            <td>{{ $shopping->id }}</td>
                            <td>{{ $shopping->product_name }}</td>
                            <td>{{ $shopping->price }}</td>
                            <td>{{ $shopping->product_stock }}</td>
                            <td>
                                <a href="{{ url('view', ['shopping' => $shopping->id]) }}"
                                    class="btn btn-warning">View</a>
                                <a href="{{ url('edit', ['shopping' => $shopping->id]) }}"
                                    class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger" title="Delete" data-toggle="modal"
                                    data-target="#delete-modal-shopping"
                                    wire:click="delete({{ $shopping->id }})">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    @if (!empty($search) && $shoppings->count() === 0)
                        <td colspan="6" class="text-center">"{{ $search }}" search not found.</td>
                    @elseif($shoppings->count() === 0)
                        <td colspan="6" class="text-center">No data found.</td>
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="text-end"><h5>Total Price & Stock: </h5></td>
                        <td><i><h6>{{ $total }}</h6></i></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
            {{ $shoppings->links() }}
        </div>
    </div>
</div>
