@extends('seller.shared.layout')
@section('title', 'Analytics | Seller')
@section('page_title', 'Analytics')
@section('content')
<div class="p-6 space-y-6">
  <!-- Controls -->
  <div class="flex items-center justify-between">
    <div class="text-sm text-gray-600">Explore performance over time and by product.</div>
    <div class="flex items-center gap-2">
      @php $active = $range ?? '30d'; @endphp
      <a href="{{ route('seller.analytics.index', ['range' => '7d']) }}" class="px-3 py-1 rounded-full border text-sm {{ $active==='7d' ? 'bg-gray-900 text-white border-gray-900' : 'bg-white border-gray-300 text-gray-700 hover:bg-gray-50' }}">7 days</a>
      <a href="{{ route('seller.analytics.index', ['range' => '30d']) }}" class="px-3 py-1 rounded-full border text-sm {{ $active==='30d' ? 'bg-gray-900 text-white border-gray-900' : 'bg-white border-gray-300 text-gray-700 hover:bg-gray-50' }}">30 days</a>
      <a href="{{ route('seller.analytics.index', ['range' => '90d']) }}" class="px-3 py-1 rounded-full border text-sm {{ $active==='90d' ? 'bg-gray-900 text-white border-gray-900' : 'bg-white border-gray-300 text-gray-700 hover:bg-gray-50' }}">90 days</a>
      <a href="{{ route('seller.analytics.index', ['range' => '12m']) }}" class="px-3 py-1 rounded-full border text-sm {{ $active==='12m' ? 'bg-gray-900 text-white border-gray-900' : 'bg-white border-gray-300 text-gray-700 hover:bg-gray-50' }}">12 months</a>
    </div>
  </div>

  <!-- Row 1: overview + breakdown -->
  <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 lg:col-span-2">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-base font-semibold">Revenue Analytics</h3>
        <span class="text-xs text-slate-500">{{ strtoupper($active) }}</span>
      </div>
      <div class="h-[280px]"><canvas id="revBars"></canvas></div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
      <div class="flex items-center justify-between mb-4"><h3 class="text-base font-semibold">Revenue by Product</h3></div>
      <div id="breakdown" class="space-y-3">
        @forelse($productBreakdown as $row)
          <div class="flex items-center justify-between text-sm">
            <span class="truncate">{{ $row->product_name }}</span>
            <span class="font-semibold">৳{{ number_format($row->revenue, 2) }}</span>
          </div>
        @empty
          <p class="text-sm text-gray-500">No sales yet.</p>
        @endforelse
      </div>
    </div>
  </div>

  <!-- Row 2: sales overtime + product units -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
      <div class="flex items-center justify-between mb-4"><h3 class="text-base font-semibold">Sales Overtime</h3><span class="text-xs text-slate-500">Revenue + Orders</span></div>
      <div class="h-[260px]"><canvas id="salesOvertime"></canvas></div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6">
      <div class="flex items-center justify-between mb-4"><h3 class="text-base font-semibold">Units by Top Products</h3><span class="text-xs text-slate-500">Stacked</span></div>
      <div class="h-[260px]"><canvas id="unitsByProduct"></canvas></div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script>
  const labels = @json($labels);
  const revenue = @json($revenue);
  const units = @json($units);
  const bucketLabels = @json($bucketLabels ?? $labels);
  const productDatasets = @json($productDatasets ?? []);

  // bar colors palette
  const palette = ['#111827','#0ea5e9','#f97316','#22c55e','#6366f1','#e11d48'];

  // Revenue bars
  const rb = document.getElementById('revBars');
  if (rb && window.Chart) {
    new Chart(rb.getContext('2d'), {
      type: 'bar',
      data: { labels, datasets: [{ label: 'Revenue (৳)', data: revenue, backgroundColor: '#111827', borderRadius: 10, maxBarThickness: 28 }]},
      options: { responsive: true, maintainAspectRatio: false,
        scales: { x: { grid: { display: false }, ticks: { color: '#475569' } }, y: { grid: { color: 'rgba(148,163,184,.2)' }, ticks: { color: '#475569', callback: v => '৳' + Number(v).toLocaleString() } } },
        plugins: { legend: { display: false }, tooltip: { callbacks: { label: (c) => `Revenue: ৳${Number(c.parsed.y).toLocaleString()}` } } }
      }
    });
  }

  // Sales overtime
  const so = document.getElementById('salesOvertime');
  if (so && window.Chart) {
    new Chart(so.getContext('2d'), {
      type: 'line', data: { labels, datasets: [
        { label: 'Revenue (৳)', data: revenue, borderColor: '#16a34a', backgroundColor: 'rgba(22,163,74,.1)', tension:.35, pointRadius:2, fill:true, yAxisID:'y' },
        { label: 'Orders', data: units, borderColor: '#6366f1', backgroundColor: 'rgba(99,102,241,.08)', tension:.35, pointRadius:2, fill:true, yAxisID:'y1' }
      ]}, options: { responsive:true, maintainAspectRatio:false, interaction:{mode:'index',intersect:false},
        scales:{ x:{ grid:{display:false}, ticks:{color:'#475569'} }, y:{ position:'left', grid:{color:'rgba(148,163,184,.2)'}, ticks:{color:'#475569', callback:v=>'৳'+Number(v).toLocaleString()} }, y1:{ position:'right', grid:{drawOnChartArea:false}, ticks:{color:'#64748b'} } },
        plugins:{ legend:{ labels:{ color:'#0f172a' } } }
      }
    });
  }

  // Units by top products (stacked bars)
  const up = document.getElementById('unitsByProduct');
  if (up && window.Chart) {
    const datasets = productDatasets.map((ds, i) => ({
      label: ds.label,
      data: ds.data,
      backgroundColor: palette[i % palette.length],
      stack: 'products',
      borderRadius: 8,
      maxBarThickness: 24,
    }));
    new Chart(up.getContext('2d'), {
      type: 'bar',
      data: { labels: bucketLabels, datasets },
      options: { responsive:true, maintainAspectRatio:false, scales:{ x:{ stacked:true, grid:{display:false}, ticks:{color:'#475569'} }, y:{ stacked:true, grid:{color:'rgba(148,163,184,.2)'}, ticks:{color:'#475569'} } }, plugins:{ legend:{ position:'bottom' } } }
    });
  }
</script>
@endsection
