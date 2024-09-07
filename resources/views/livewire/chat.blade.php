<div>
<div class="container">
    <div class="row">
    <div class="col-4">
            <div class="card">
                <div class="card-header">members</div>

                <div class="card-body">
                    @foreach ($memberdenganunread as $member)
                    <button wire:click="pilihTujuan({{ $member['user']->id }})"
                     class="position-relative mb-2 btn btn-sm w-100 {{ $tujuan_id == $member['user']->id ? 'btn-primary' : 'btn-secondary' }}">
                        {{ $member['user']->name }}

                    @if ($member['unread'])
                        <span 
                            class="position-absolute top-8 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ $member['unread'] }}
                            <span class="visually-hidden">unread message</span>
                        </span>
                    @endif
                    </button>

                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">obrolan</div>

                <div class="card-body">
                    @if ($tujuan_id)
                        <div style="height: 300px; overflow: auto; display: flex; flex-direction: column-reverse; background-color:#fad7a0;" 
                        wire:poll>
                            @foreach ($obrolan as $o)
                            @if ($o->user_id == auth()->id())
                            <div class="alert alert-success text-end w-75 ms-auto">
                                <b>{{ $o->user->name }}</b>:
                                <br>
                                {{ $o->pesan }}
                            </div>
                            @else
                            <div class="alert text-start w-75" style="background-color:#fdfefe ;">
                                <b>{{ $o->user->name }}</b>:
                                <br>
                                {{ $o->pesan }}
                            </div>
                            @endif

                            @endforeach
                        </div>
                        <br>
                        <div class="input-group">
                        <input type="text" class="form-control" wire:model='pesan'>
                        <button wire:click="kirimPesan" class="btn btn-primary">kirim</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
