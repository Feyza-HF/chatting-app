<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Pribadi;

class Chat extends Component
{
    public $tujuan_id, $tujuan_nama, $pesan;
    public function pilihTujuan($id)
    {
        $tujuan = User::find($id);
        $this->tujuan_id = $tujuan->id;
        $this->tujuan_nama = $tujuan->name;
        $this->pesan = '';
        Pribadi::where('user_id', $this->tujuan_id)
                ->where('tujuan_id', auth()->user()->id)
                ->update(['status' => 1]);
    }
    public function kirimPesan()
    {
        $this->validate([
            'pesan' => 'required'
        ]);
        Pribadi::create([
            'user_id' => auth()->user()->id,
            'tujuan_id' => $this->tujuan_id,
            'pesan' => $this->pesan,
            'status' => 0
        ]);
        $this->pesan = '';
    }
    public function render()
    {
        $member = User::all()->except(auth()->user()->id);
        $memberdenganunread=[];
        foreach ($member as $m){
            $belumbaca = Pribadi::where('user_id', $m->id)
                ->where('tujuan_id', auth()->user()->id)
                ->where('status', '0')
                ->count();
            $memberdenganunread[$m->id]['unread'] = $belumbaca;
            $memberdenganunread[$m->id]['user'] = $m;
        }
        $obrolan = Pribadi::where('user_id', auth()->user()->id)
            ->where('tujuan_id', $this->tujuan_id)
            ->orWhere('user_id', $this->tujuan_id)
            ->where('tujuan_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.chat')->with([
            'memberdenganunread' => $memberdenganunread,
            'obrolan' => $obrolan ?? null
        ]);
    }


}
