<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthniCart - Seller Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
</head>
<body class="bg-slate-50 text-slate-800">
  <div class="flex h-screen">
    <!-- Sidebar (dark) -->
  <aside class="bg-neutral-900 text-white w-72 flex-shrink-0 border-r border-black/10 relative">
      <div class="p-6 border-b border-white/10 flex items-center gap-3">
        <div class="w-9 h-9 rounded-lg bg-white/10 text-white flex items-center justify-center"><i class="fas fa-store"></i></div>
        <div>
          <h1 class="text-xl font-bold tracking-wide">EthniCart</h1>
          <p class="text-xs text-white/60">Seller Panel</p>
        </div>
      </div>
      <nav class="mt-3 text-sm">
  <a class="flex items-center gap-3 px-6 py-3 bg-white/10 rounded-r-full mr-4" href="#"><i class="fa-solid fa-gauge-high text-white"></i><span class="font-medium">Dashboard</span></a>
  <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.product.create') }}"><i class="fa-solid fa-plus"></i><span>Add Product</span></a>
  <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.products.index') }}"><i class="fa-solid fa-box"></i><span>Products</span></a>
  <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.orders.index') }}"><i class="fa-solid fa-receipt"></i><span>Orders</span></a>
  <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.analytics.index') }}"><i class="fa-solid fa-chart-line"></i><span>Analytics</span></a>
  <a class="flex items-center gap-3 px-6 py-3 hover:bg-white/5 transition-colors" href="{{ route('seller.settings.edit') }}"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
      </nav>
      <div class="absolute bottom-0 w-72 p-6 border-t border-white/10">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-10 h-10 rounded-full overflow-hidden bg-white/20 flex items-center justify-center">
            @if(Auth::guard('seller')->user()->seller_image)
              <img src="{{ asset('storage/' . Auth::guard('seller')->user()->seller_image) }}" class="w-10 h-10 object-cover" />
            @else <i class="fas fa-user"></i> @endif
          </div>
          <div class="flex-1 min-w-0">
            <p class="text-sm font-semibold truncate">{{ Auth::guard('seller')->user()->name }}</p>
            <p class="text-xs text-white/60">Seller Account</p>
          </div>
        </div>
        <form method="POST" action="{{ route('seller.logout') }}">@csrf
          <button type="submit" class="group w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-white/5 hover:bg-red-500/90 border border-white/10 hover:border-red-500 text-white/80 hover:text-white transition-all duration-200">
            <i class="fas fa-arrow-right-from-bracket group-hover:translate-x-0.5 transition-transform"></i>
            <span class="font-medium">Logout</span>
          </button>
        </form>
      </div>
    </aside>

    <!-- Main (light) -->
    <main class="flex-1 overflow-auto">
      <!-- Top bar with search -->
      <header class="px-8 py-5 border-b border-slate-200 bg-white sticky top-0 z-10">
        <div class="flex items-center justify-between gap-6">
          <div class="flex items-center gap-3 text-slate-500">
            <h2 class="text-2xl font-semibold text-slate-900">Dashboard</h2>
            <span class="text-xs px-2 py-1 rounded-full bg-slate-100 border border-slate-200">Last 30 days</span>
          </div>
          <div class="flex items-center gap-4">
            <div class="relative w-[420px] hidden md:block">
              <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
              <input id="dashSearch" type="text" placeholder="Search products and more…" class="w-full pl-10 pr-3 py-2 rounded-xl border border-slate-200 bg-slate-50 text-sm focus:ring-2 focus:ring-emerald-200 focus:border-emerald-400 outline-none" />
            </div>
            <div class="w-9 h-9 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center"><i class="fa-solid fa-bell"></i></div>
            <a href="{{ route('seller.settings.edit') }}" class="w-9 h-9 rounded-full overflow-hidden ring-2 ring-slate-200 block">
              @if(Auth::guard('seller')->user()->seller_image)
                <img src="{{ asset('storage/' . Auth::guard('seller')->user()->seller_image) }}" class="w-9 h-9 object-cover" />
              @else
                <div class="w-9 h-9 bg-slate-200"></div>
              @endif
            </a>
          </div>
        </div>
      </header>

      <div class="p-8 space-y-8">
        <!-- KPI cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Sales total -->
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6">
            <div class="flex items-start justify-between">
              <div>
                <p class="text-xs text-slate-500">Sales Total</p>
                <p class="text-3xl font-semibold text-slate-900 mt-1">৳{{ number_format($totalRevenue ?? 0, 2) }}</p>
              </div>
              <div class="w-10 h-10 rounded-xl bg-neutral-900 text-white flex items-center justify-center"><i class="fa-solid fa-coins"></i></div>
            </div>
            <div class="mt-3 text-emerald-600 text-xs inline-flex items-center gap-1 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full"><i class="fa-solid fa-arrow-trend-up"></i><span>+10%</span><span class="text-slate-500">vs last month</span></div>
          </div>
          <!-- Average order value -->
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6">
            <div class="flex items-start justify-between">
              <div>
                <p class="text-xs text-slate-500">Average Order Value</p>
                @php $aov = ($totalOrders ?? 0) > 0 ? ($totalRevenue ?? 0)/($totalOrders ?? 1) : 0; @endphp
                <p class="text-3xl font-semibold text-slate-900 mt-1">৳{{ number_format($aov, 2) }}</p>
              </div>
              <div class="w-10 h-10 rounded-xl bg-neutral-900 text-white flex items-center justify-center"><i class="fa-solid fa-bag-shopping"></i></div>
            </div>
            <div class="mt-3 text-rose-600 text-xs inline-flex items-center gap-1 bg-rose-50 border border-rose-200 px-2 py-0.5 rounded-full"><i class="fa-solid fa-arrow-trend-down"></i><span>-2.3%</span><span class="text-slate-500">vs last month</span></div>
          </div>
          <!-- Total orders -->
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6">
            <div class="flex items-start justify-between">
              <div>
                <p class="text-xs text-slate-500">Total Orders</p>
                <p class="text-3xl font-semibold text-slate-900 mt-1">{{ number_format($totalOrders ?? 0) }}</p>
              </div>
              <div class="w-10 h-10 rounded-xl bg-neutral-900 text-white flex items-center justify-center"><i class="fa-solid fa-clipboard-check"></i></div>
            </div>
            <div class="mt-3 text-emerald-600 text-xs inline-flex items-center gap-1 bg-emerald-50 border border-emerald-200 px-2 py-0.5 rounded-full"><i class="fa-solid fa-arrow-trend-up"></i><span>+10%</span><span class="text-slate-500">vs last month</span></div>
          </div>
        </div>

        <!-- Charts row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <!-- Product vs Stock (bars) -->
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6 lg:col-span-2">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-base font-semibold">Product Stock</h3>
              <span class="text-xs text-slate-500">x: Product • y: Stock</span>
            </div>
            <div style="position:relative; height:300px; width:100%;">
              <canvas id="productStockChart"></canvas>
            </div>
            <!-- Debug: show data -->
            <div class="mt-2 text-xs text-slate-400" id="debugStock"></div>
          </div>
          <!-- Top products -->
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6">
            <div class="flex items-center justify-between mb-4"><h3 class="text-base font-semibold">Top Selling Product</h3><a href="{{ route('seller.products.index') }}" class="text-xs text-slate-500 hover:text-slate-700">See All Product</a></div>
            <div class="space-y-4">
              @forelse(($topProducts ?? []) as $tp)
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3 min-w-0">
                    <div class="w-9 h-9 rounded-full bg-slate-100 flex items-center justify-center ring-1 ring-slate-200 text-slate-700">
                      <i class="fa-solid fa-box"></i>
                    </div>
                    <div class="min-w-0">
                      <p class="font-medium truncate">{{ $tp->product_name }}</p>
                      <p class="text-xs text-slate-500">{{ (int)$tp->units }} sold</p>
                    </div>
                  </div>
                  <div class="text-right text-sm font-semibold">৳{{ number_format($tp->revenue, 2) }}</div>
                </div>
              @empty
                <p class="text-sm text-slate-500">No sales yet.</p>
              @endforelse
            </div>
          </div>
        </div>

        <!-- Quick sales buckets + Quick actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6 lg:col-span-2">
            <div class="flex items-center justify-between mb-4"><h3 class="text-base font-semibold">Quick Sales</h3><div class="text-xs text-slate-500">Today • 3D • 7D</div></div>
            <div style="position:relative; height:300px; width:100%;">
              <canvas id="quickSalesChart"></canvas>
            </div>
            <!-- Debug: show data -->
            <div class="mt-2 text-xs text-slate-400" id="debugSales"></div>
          </div>
          <div class="rounded-2xl bg-white border border-slate-200 shadow-sm p-6">
            <h3 class="text-base font-semibold mb-4">Quick Actions</h3>
            <div class="grid grid-cols-1 gap-3">
              <a href="{{ route('seller.product.create') }}" class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 hover:border-slate-300 hover:shadow-sm transition bg-slate-50">
                <div class="w-9 h-9 rounded-lg bg-neutral-900 text-white flex items-center justify-center"><i class="fa-solid fa-plus"></i></div>
                <div>
                  <p class="font-medium">Add Product</p>
                  <p class="text-xs text-slate-500">Upload new product</p>
                </div>
              </a>
              <a href="{{ route('seller.analytics.index') }}" class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 hover:border-slate-300 hover:shadow-sm transition bg-slate-50">
                <div class="w-9 h-9 rounded-lg bg-neutral-900 text-white flex items-center justify-center"><i class="fa-solid fa-chart-column"></i></div>
                <div>
                  <p class="font-medium">View Analytics</p>
                  <p class="text-xs text-slate-500">Check performance</p>
                </div>
              </a>
              <a href="{{ route('seller.orders.index') }}" class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 hover:border-slate-300 hover:shadow-sm transition bg-slate-50">
                <div class="w-9 h-9 rounded-lg bg-neutral-900 text-white flex items-center justify-center"><i class="fa-solid fa-clipboard-list"></i></div>
                <div>
                  <p class="font-medium">Manage Orders</p>
                  <p class="text-xs text-slate-500">Process orders</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Stock Modal -->
  <div id="updateStockModal" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-50">
    <div class="modal-overlay absolute w-full h-full bg-black/70"></div>
    <div class="modal-container bg-[#0e1426] text-slate-100 w-11/12 md:max-w-md mx-auto rounded-lg shadow-lg z-50 overflow-y-auto border border-white/10">
      <div class="modal-content py-4 text-left px-6">
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Update Product Stock</p>
          <div class="modal-close cursor-pointer z-50" onclick="closeUpdateStockModal()"><i class="fas fa-times text-slate-400 hover:text-white"></i></div>
        </div>
        <form id="updateStockForm" action="{{ route('seller.product.updateStock') }}" method="POST">@csrf
          <input type="hidden" id="productId" name="product_id" value="">
          <div class="mb-4">
            <label class="block text-sm font-bold mb-2">Product</label>
            <input type="text" id="productName" class="bg-white/5 border border-white/10 rounded w-full py-2 px-3 text-slate-100 focus:outline-none" readonly>
          </div>
          <div class="mb-6">
            <label class="block text-sm font-bold mb-2">Stock Quantity</label>
            <input type="number" id="stockQuantity" name="stock" min="0" required class="bg-white/5 border border-white/10 rounded w-full py-2 px-3 text-slate-100 focus:outline-none">
          </div>
          <div class="flex justify-end pt-2">
            <button type="button" onclick="closeUpdateStockModal()" class="px-4 bg-white/10 p-3 rounded-lg text-white hover:bg-white/20 mr-2">Cancel</button>
            <button type="submit" class="px-4 bg-emerald-600 p-3 rounded-lg text-white hover:bg-emerald-500">Update Stock</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    // Data from Laravel controller
    const stockLabels = @json($stockLabels ?? []);
    const stockValues = @json($stockValues ?? []);
    const bucketLabels = @json($salesBucketLabels ?? []);
    const bucketRevenue = @json($salesBucketRevenue ?? []);
    const bucketUnits = @json($salesBucketUnits ?? []);

    // Debug: show data received
    const debugStock = document.getElementById('debugStock');
    const debugSales = document.getElementById('debugSales');
    if (debugStock) debugStock.textContent = `Stock data: ${stockLabels.length} products - Labels: ${JSON.stringify(stockLabels.slice(0,3))}... Values: ${JSON.stringify(stockValues.slice(0,3))}...`;
    if (debugSales) debugSales.textContent = `Sales data: ${bucketLabels.length} buckets - Labels: ${JSON.stringify(bucketLabels)} Units: ${JSON.stringify(bucketUnits)} Revenue: ${JSON.stringify(bucketRevenue)}`;

    // Wait for Chart.js to load, then render
    function initCharts() {
      if (!window.Chart) {
        console.error('Chart.js not loaded yet');
        setTimeout(initCharts, 100);
        return;
      }

      console.log('Chart.js loaded, initializing charts...');

      // Product Stock Chart
      const psCanvas = document.getElementById('productStockChart');
      if (psCanvas) {
        const psCtx = psCanvas.getContext('2d');
        new Chart(psCtx, {
          type: 'bar',
          data: {
            labels: stockLabels.length > 0 ? stockLabels : ['No Products'],
            datasets: [{
              label: 'Stock',
              data: stockValues.length > 0 ? stockValues : [0],
              backgroundColor: '#111827',
              borderRadius: 12,
              maxBarThickness: 32
            }]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: { display: false },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    return 'Stock: ' + context.parsed.y;
                  }
                }
              }
            },
            scales: {
              x: {
                grid: { display: false },
                ticks: { 
                  color: '#475569',
                  maxRotation: 45,
                  minRotation: 0
                }
              },
              y: {
                beginAtZero: true,
                grid: { color: 'rgba(148,163,184,0.2)' },
                ticks: { 
                  color: '#475569',
                  precision: 0
                }
              }
            }
          }
        });
        console.log('✓ Product Stock chart rendered');
      }

      // Quick Sales Chart
      const qsCanvas = document.getElementById('quickSalesChart');
      if (qsCanvas) {
        const qsCtx = qsCanvas.getContext('2d');
        new Chart(qsCtx, {
          type: 'bar',
          data: {
            labels: bucketLabels.length > 0 ? bucketLabels : ['Today', 'Last 3D', 'Last 7D'],
            datasets: [
              {
                label: 'Units Sold',
                data: bucketUnits.length > 0 ? bucketUnits : [0, 0, 0],
                backgroundColor: '#111827',
                borderRadius: 10,
                maxBarThickness: 28
              },
              {
                label: 'Revenue (৳)',
                data: bucketRevenue.length > 0 ? bucketRevenue : [0, 0, 0],
                backgroundColor: '#16a34a',
                borderRadius: 10,
                maxBarThickness: 28
              }
            ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
              mode: 'index',
              intersect: false
            },
            plugins: {
              legend: {
                labels: { color: '#0f172a' }
              },
              tooltip: {
                callbacks: {
                  label: function(context) {
                    const label = context.dataset.label || '';
                    const value = context.parsed.y;
                    if (label.includes('Revenue')) {
                      return 'Revenue: ৳' + value.toLocaleString();
                    }
                    return 'Units: ' + value.toLocaleString();
                  }
                }
              }
            },
            scales: {
              x: {
                grid: { display: false },
                ticks: { color: '#475569' }
              },
              y: {
                beginAtZero: true,
                grid: { color: 'rgba(148,163,184,0.2)' },
                ticks: { 
                  color: '#475569',
                  callback: function(value) {
                    return value.toLocaleString();
                  }
                }
              }
            }
          }
        });
        console.log('✓ Quick Sales chart rendered');
      }
    }

    // Initialize when DOM and Chart.js are ready
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', function() {
        initCharts();
      });
    } else {
      initCharts();
    }

    // Search handler
    document.addEventListener('DOMContentLoaded', function(){
      const search = document.getElementById('dashSearch');
      if(search){
        search.addEventListener('keydown', (e)=>{
          if(e.key === 'Enter'){
            e.preventDefault();
            const q = encodeURIComponent(search.value.trim());
            if(q.length){ window.location.href = `{{ route('seller.products.index') }}?q=${q}`; }
          }
        });
      }
    });

    function openUpdateStockModal(id,name,qty){document.getElementById('productId').value=id;document.getElementById('productName').value=name;document.getElementById('stockQuantity').value=qty;document.getElementById('updateStockModal').classList.remove('opacity-0','pointer-events-none');}
    function closeUpdateStockModal(){document.getElementById('updateStockModal').classList.add('opacity-0','pointer-events-none');}
  </script>
  <style>.modal{transition:opacity .25s ease}body.modal-active{overflow-x:hidden;overflow-y:visible!important}</style>
</body>
</html>
