<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/locales/id.global.min.js"></script>

<section class="space-y-6">
    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-xs font-semibold text-primary uppercase tracking-wider mb-1">Agenda Kegiatan</p>
                <h2 class="text-2xl font-bold text-slate-900">Agenda resmi Rayon FTKD</h2>
            </div>
            <span class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-sm text-slate-600">
                {{ $agendas->count() }} agenda tersedia
            </span>
        </div>
    </div>

    @if ($agendas->isEmpty())
        <div class="rounded-2xl border border-dashed border-slate-200 bg-slate-50 p-10 text-center text-slate-500">
            Belum ada agenda terbaru. Silakan cek kembali nanti.
        </div>
    @else
        <!-- Container Kalender dan Daftar -->
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Kolom Kalender (Kiri - 60%) -->
            <div class="lg:flex-[1.5] min-w-0">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sticky top-4">
                    <h3 class="text-lg font-semibold text-slate-900 mb-4">Kalender Agenda</h3>
                    <div id="calendar" style="--fc-border-color: #e2e8f0; --fc-button-bg-color: #3b82f6; --fc-button-border-color: #3b82f6; --fc-highlight-color: #dbeafe;"></div>
                </div>
            </div>

            <!-- Kolom Daftar Agenda (Kanan - 40%) -->
            <div class="lg:flex-1 min-w-0">
                <h3 class="text-lg font-semibold text-slate-900 mb-4">Daftar Agenda Terbaru</h3>
                <div class="space-y-4 max-h-96 overflow-y-auto pr-2">
                @foreach ($agendas as $agenda)
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm hover:shadow-md transition-all hover:border-primary/30">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <div class="flex-1">
                                <h3 class="text-base font-semibold text-slate-900 line-clamp-2">{{ $agenda->judul }}</h3>
                                <p class="mt-1 text-xs text-slate-500">{{ $agenda->lokasi ?? 'Lokasi belum diisi' }}</p>
                            </div>
                            <span class="inline-flex items-center rounded-full bg-blue-50 px-2.5 py-1 text-xs font-semibold text-primary whitespace-nowrap">{{ $agenda->status }}</span>
                        </div>
                        <div class="text-xs text-slate-600 space-y-2">
                            <div class="flex items-center gap-2">
                                <span class="text-slate-400">📅</span>
                                <span class="font-medium">{{ $agenda->tanggal->translatedFormat('d F Y') }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-slate-400">⏰</span>
                                <span class="font-medium">{{ $agenda->waktu ?: 'Waktu belum ditentukan' }}</span>
                            </div>
                            <div class="rounded-lg border border-slate-200 bg-slate-50 p-2 text-slate-700 line-clamp-2">
                                {{ $agenda->deskripsi ?? 'Tidak ada deskripsi tambahan.' }}
                            </div>
                        </div>
                    </article>
                @endforeach
                </div>
            </div>
        </div>
    @endif
</section>

<style>
    #calendar {
        max-height: 420px;
        border-radius: 12px;
        overflow: hidden;
    }

    .fc {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        font-size: 0.875rem;
        border: none;
        background: white;
    }

    .fc .fc-toolbar {
        padding: 1rem;
        background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        border-bottom: 1px solid #e0e7ff;
        gap: 12px;
        flex-wrap: wrap;
    }

    .fc .fc-toolbar-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1e293b;
    }

    .fc .fc-button-primary {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        border: none;
        border-radius: 8px;
        padding: 6px 12px !important;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        box-shadow: 0 2px 4px rgba(59, 130, 246, 0.2);
        transition: all 0.2s ease;
    }

    .fc .fc-button-primary:hover {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        box-shadow: 0 4px 8px rgba(59, 130, 246, 0.3);
        transform: translateY(-1px);
    }

    .fc .fc-button-primary.fc-button-active {
        background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 100%);
        box-shadow: 0 4px 12px rgba(29, 78, 216, 0.4);
    }

    .fc .fc-col-header {
        padding: 12px 0 !important;
        background: #f8fafc;
        border-bottom: 2px solid #e2e8f0;
    }

    .fc .fc-col-header-cell {
        padding: 8px 4px !important;
        font-size: 0.75rem;
        font-weight: 700;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    .fc .fc-daygrid-day {
        height: 56px !important;
        border-color: #e2e8f0;
        transition: all 0.2s ease;
    }

    .fc .fc-daygrid-day:hover {
        background-color: #f0f9ff;
        box-shadow: inset 0 0 8px rgba(59, 130, 246, 0.1);
    }

    .fc .fc-daygrid-day-number {
        padding: 6px !important;
        font-size: 0.8rem;
        color: #334155;
        font-weight: 600;
    }

    .fc .fc-daygrid-day.fc-day-other {
        background-color: #f8fafc;
    }

    .fc .fc-daygrid-day.fc-day-today {
        background-color: #dbeafe;
        border: 2px solid #3b82f6;
    }

    .fc .fc-daygrid-day.fc-day-today .fc-daygrid-day-number {
        color: #1e40af;
        background: #bfdbfe;
        border-radius: 6px;
        padding: 4px 8px;
        width: fit-content;
        margin: 4px auto;
    }

    .fc .fc-event {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        border: none;
        border-radius: 6px;
        margin: 3px 2px !important;
        padding: 3px 4px !important;
        font-size: 0.7rem;
        line-height: 1.3;
        box-shadow: 0 2px 4px rgba(59, 130, 246, 0.2);
        transition: all 0.2s ease;
    }

    .fc .fc-event:hover {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        box-shadow: 0 4px 8px rgba(59, 130, 246, 0.3);
        transform: scale(1.02);
    }

    .fc-event-title {
        font-weight: 700;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: white;
        padding: 1px 2px;
    }

    .fc .fc-daygrid-day-frame {
        border-radius: 8px;
    }

    .fc .fc-list {
        border: none;
    }

    .fc .fc-list-event:hover {
        background-color: #f0f9ff;
    }

    .fc .fc-list-event-title {
        font-weight: 700;
        color: #1e293b;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar');
        const events = {!! json_encode($agendas->map(function($agenda) {
            return [
                'title' => $agenda->judul,
                'start' => $agenda->tanggal->format('Y-m-d'),
                'extendedProps' => [
                    'lokasi' => $agenda->lokasi ?? '-',
                    'waktu' => $agenda->waktu ?? 'Belum ditentukan',
                    'deskripsi' => $agenda->deskripsi ?? 'Tidak ada deskripsi',
                    'status' => $agenda->status,
                ]
            ];
        })->toArray()) !!};

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,listMonth'
            },
            locale: 'id',
            events: events,
            eventDisplay: 'block',
            eventClick: function(info) {
                const event = info.event;
                const props = event.extendedProps;
                alert(
                    'Agenda: ' + event.title + '\n' +
                    'Tanggal: ' + event.startStr + '\n' +
                    'Waktu: ' + (props.waktu || 'Belum ditentukan') + '\n' +
                    'Lokasi: ' + (props.lokasi || 'Belum ditentukan') + '\n' +
                    'Status: ' + props.status + '\n' +
                    'Deskripsi: ' + (props.deskripsi || 'Tidak ada') 
                );
            }
        });

        calendar.render();
    });
</script>
