@extends('seller.shared.layout')
@section('title', 'Products | Seller')
@section('content')
<div class="p-6">
  <div class="bg-white rounded-lg shadow" id="products">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
      <h3 class="text-lg font-semibold text-gray-800">Your Products</h3>
      <a href="{{ route('seller.product.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Add Product</a>
    </div>
    @if($products->isEmpty())
      <div class="p-12 text-center">
        <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
          <i class="fas fa-box-open text-gray-400 text-3xl"></i>
        </div>
        <h3 class="text-lg font-medium text-gray-900 mb-2">No products yet</h3>
        <a href="{{ route('seller.product.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-medium transition-colors">Upload Your First Product</a>
      </div>
    @else
      <div class="overflow-x-auto">
        <table class="min-w-full">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach($products as $product)
              <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <img class="h-16 w-16 rounded-lg object-cover mr-4" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <div>
                      <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                      <div class="text-sm text-gray-500">{{ Str::limit($product->description, 60) }}</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold">৳{{ number_format($product->price, 2) }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $product->stock }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                  @if($product->stock > 0)
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                  @else
                    <span class="inline-flex px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Out of Stock</span>
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                  <button onclick="openUpdateStockModal({{ $product->id }}, '{{ $product->name }}', {{ $product->stock }})" class="text-blue-600 hover:text-blue-900 mr-3">
                    <i class="fas fa-edit"></i> Update Stock
                  </button>
                  <form action="{{ route('seller.product.destroy', $product->id) }}" method="POST" class="inline" onsubmit="return confirm('Delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
  </div>
</div>
@include('seller.shared.stock-modal')
@endsection
