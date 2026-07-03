@props(['title', 'description', 'href', 'badge' => 'View'])

<a href="{{ $href }}" class="group block rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">
    <div class="mb-4 flex items-center justify-between">
        <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-sky-700">
            {{ $badge }}
        </span>
        <span class="text-sm font-medium text-slate-400 transition group-hover:text-sky-600">Lihat →</span>
    </div>
    <h3 class="mb-2 text-xl font-semibold text-slate-800">{{ $title }}</h3>
    <p class="text-sm leading-6 text-slate-600">{{ $description }}</p>
</a>
