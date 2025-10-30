@extends('seller.shared.layout')
@section('title', 'Orders | Seller')
@section('content')
<div class="p-6">
  <div class="bg-white rounded-lg shadow mb-6">
    <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
      <h3 class="text-lg font-semibold text-gray-800">Orders</h3>
      <div class="space-x-2 text-sm">
        <a href="{{ route('seller.orders.index') }}" class="px-3 py-1 rounded {{ !$status ? 'bg-gray-900 text-white' : 'bg-gray-100' }}">All</a>
        @foreach(['pending','processing','delivered','cancelled'] as $st)
          <a href="{{ route('seller.orders.index', ['status'=>$st]) }}" class="px-3 py-1 rounded {{ ($status===$st) ? 'bg-gray-900 text-white' : 'bg-gray-100' }}">{{ ucfirst($st) }}</a>
        @endforeach
      </div>
    </div>
    <div class="px-6 py-4 text-sm text-gray-600">
      <span class="mr-4">Total: <strong>{{ $stats['total'] }}</strong></span>
      <span class="mr-4">Pending: <strong>{{ $stats['pending'] }}</strong></span>
      <span class="mr-4">Processing: <strong>{{ $stats['processing'] }}</strong></span>
      <span class="mr-4">Delivered: <strong>{{ $stats['delivered'] }}</strong></span>
      <span>Cancelled: <strong>{{ $stats['cancelled'] }}</strong></span>
    </div>
    <div class="overflow-x-auto">
      <table class="min-w-full">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order ID</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qty</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Payment</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3"></th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 text-sm">
          @foreach($orders as $order)
            <tr>
              <td class="px-6 py-4">#{{ $order->id }}</td>
              <td class="px-6 py-4">{{ $order->product_name }}</td>
              <td class="px-6 py-4">{{ $order->quantity }}</td>
              <td class="px-6 py-4">৳{{ number_format($order->subtotal, 2) }}</td>
              <td class="px-6 py-4">{{ $order->payment_method }}</td>
              <td class="px-6 py-4">
                <span class="inline-flex px-2 py-1 rounded text-xs {{ $order->status==='delivered' ? 'bg-green-100 text-green-700' : ($order->status==='cancelled' ? 'bg-red-100 text-red-700' : 'bg-yellow-100 text-yellow-800') }}">{{ ucfirst($order->status) }}</span>
              </td>
              <td class="px-6 py-4">
                <form action="{{ route('seller.orders.updateStatus', $order) }}" method="POST" class="flex items-center space-x-2">
                  @csrf
                  @method('PATCH')
                  <select name="status" class="border rounded px-2 py-1">
                    @foreach(['pending','processing','delivered','cancelled'] as $st)
                      <option value="{{ $st }}" {{ $order->status===$st ? 'selected' : '' }}>{{ ucfirst($st) }}</option>
                    @endforeach
                  </select>
                  <button type="submit" class="px-3 py-1 bg-blue-600 text-white rounded">Save</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="px-6 py-4">{{ $orders->withQueryString()->links() }}</div>
  </div>
</div>
@endsection
