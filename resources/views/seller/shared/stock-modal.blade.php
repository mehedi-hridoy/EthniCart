<div id="updateStockModal" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
      <div class="flex justify-between items-center pb-3">
        <p class="text-2xl font-bold text-gray-800">Update Product Stock</p>
        <div class="modal-close cursor-pointer z-50" onclick="closeUpdateStockModal()">
          <i class="fas fa-times text-gray-500 hover:text-gray-800"></i>
        </div>
      </div>
      <form id="updateStockForm" action="{{ route('seller.product.updateStock') }}" method="POST">
        @csrf
        <input type="hidden" id="productId" name="product_id" value="">
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2">Product</label>
          <input type="text" id="productName" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 text-sm font-bold mb-2">Stock Quantity</label>
          <input type="number" id="stockQuantity" name="stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" min="0" required>
        </div>
        <div class="flex justify-end pt-2">
          <button type="button" onclick="closeUpdateStockModal()" class="px-4 bg-gray-500 p-3 rounded-lg text-white hover:bg-gray-600 mr-2">Cancel</button>
          <button type="submit" class="px-4 bg-orange-600 p-3 rounded-lg text-white hover:bg-orange-700">Update Stock</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  function openUpdateStockModal(id, name, qty){
    document.getElementById('productId').value = id;
    document.getElementById('productName').value = name;
    document.getElementById('stockQuantity').value = qty;
    document.getElementById('updateStockModal').classList.remove('opacity-0','pointer-events-none');
  }
  function closeUpdateStockModal(){
    document.getElementById('updateStockModal').classList.add('opacity-0','pointer-events-none');
  }
</script>
<style>.modal{transition:opacity .25s ease}</style>
