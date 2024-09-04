<x-bar> </x-bar>
@push('script')
<script>
const container = document.getElementById('calendar');
const options = {
    useFormPopup: true,
    useDetailPopup: true,
  defaultView: 'week',
  calendars: [
    {
      id: 'Salud',
      name: 'Salud',
      backgroundColor: '#fcba03',
    },
    {
      id: 'Otros',
      name: 'Otros',
      backgroundColor: '#00a9ff',
    },
    {
      id: 'Viajes',
      name: 'Viajes',
      backgroundColor: '#2dba40',
    },
    {
      id: 'Restaurante',
      name: 'Restaurante',
      backgroundColor: '#a853b5',
    },
  ],
};

const calendar = new Calendar(container, options);
calendar.createEvents([
    @foreach ($promotions as $promotion)
    {
        id: 'event1',
        calendarId: '{{ $promotion->category }}',
        title: '{{ $promotion->title }}',
        body: `{{ str_replace("\`", "\\\`", $promotion->benefit) }}`,
        start: '{{ $promotion->start }}',
        end: '{{ $promotion->end }}',
        isReadOnly: true,
    },
    @endforeach
]);
</script>
@endpush

<x-layout>
    <div id="calendar" style="height: 600px;"></div>
</x-layout>
