<div>
    @foreach($room as $rooms) {{-- mencari room --}}
    
        @foreach($rooms->room->resident as $roomate){{-- mencari pasangan room --}}

            @if($roomate->user->username != $user->username)
                <button wire:click="switchroom({{ $roomate->id }})" class="list-group-item list-group-item-action border-0">
                    {{-- <div class="badge bg-success float-right">5</div> --}}
                    <div class="d-flex align-items-start">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                        <div class="flex-grow-1 ml-3">
                            {{ $roomate->user->username }}
                            <div class="small"><span class="fas fa-circle chat-online"></span> {{$roomate->room->chat->last()->message}}</div>
                        </div>
                    </div>
                </button>
            </form>
            @endif

        @endforeach

    @endforeach
    <hr class="d-block d-lg-none mt-1 mb-0">
</div>