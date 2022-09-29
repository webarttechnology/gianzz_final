<x-header-component/>

<div class="userDashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
            <x-sidebar  activeid="1" />
			</div>
			<div class="col-md-9">
				<div class="dashboardBg">
					<h2>My Order</h2>
					@if(count($order) != 0)
						<table class="table">
							<thead class="thead-dark">
								<tr>
								<th scope="col">#</th>
								<th scope="col">Invoice No</th>
								<th scope="col">Order No</th>
								<th scope="col">Name</th>
								<th scope="col">Price</th>
								<th scope="col">Image</th>
								<th scope="col">Payment status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($order as $item)
								<tr>
								<th scope="row">{{ $loop->index +1 }}</th>
								<td>{{ $item->invoice->invoice_no }}</td>
								<td>{{ $item->invoice->order_no }}</td>
								<td>{{ $item->blog->name }}</td>
								<td>${{ number_format($item->final_price,2) }}</td>
								<td style="color: black;"><div class="img">
                                        <img src="{{ asset($item->blog -> image) }}" alt="" height="60px" weidth="40px">
                                    </div></span>
								</td>
								<td> <span
                                            class="btn btn-primary w-100">{{  $item ->invoice -> payment_status == 1?'Paid':'Unpaid' }}</span>

											
                                    </td>
								</tr>
								@endforeach
								
							</tbody>
						</table>
					@else

						<div class="rghtpanel">
							<div class="crtemptysec py-7 text-center">
								<div class="images mb-4">
									<img src="https://gianzz.com/frontend/images/download.png" alt="">
								</div>
								<h5 class="fw-bold  fs-3 mb-5">No Purchase History.</h5>
								<a href="{{ url('shop') }}" class="customButton">Go To Shop</a>
							</div>
						</div>
					@endif


				</div>
			</div>
		</div>
	</div>
</div>

<x-footer-component/>