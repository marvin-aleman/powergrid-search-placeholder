@if(count($filters))
    @if(\Illuminate\Support\Arr::exists($column->inputs, 'date_picker')
        || \Illuminate\Support\Arr::exists($column->inputs, 'select')
        || \Illuminate\Support\Arr::exists($column->inputs, 'number')
        )
        <span
            title="{{ trans('livewire-powergrid::datatable.labels.clear_filter') }}"
            wire:click.prevent="clearFilter()"
            class="float-right text-red-800 cursor-pointer pr-2 pt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                 fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path
                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </span>
    @endif
@endif