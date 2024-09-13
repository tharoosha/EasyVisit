@if($timeSlots->isEmpty())
    <p>No time slots available for the selected doctor on this date.</p>
@else
    <div class="list-group">
        @foreach($timeSlots as $timeSlot)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $timeSlot->start_time }} - {{ $timeSlot->end_time }}</strong><br>
                    Available Tokens: 
                    <span class="{{ $timeSlot->no_of_tokens <= 0 ? 'text-danger' : 'text-success' }}">
                        {{ $timeSlot->no_of_tokens }}
                    </span>
                </div>
                <button 
                    class="btn btn-primary book-appointment" 
                    data-timeslot-id="{{ $timeSlot->id }}"
                    {{ $timeSlot->no_of_tokens <= 0 ? 'disabled' : '' }}
                >
                    Book Appointment
                </button>
            </div>
        @endforeach
    </div>
@endif
