<?php

namespace App\Http\Livewire;

use App\Models\Agenda;
use App\Models\Model;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class AppointmentsCalendar extends LivewireCalendar
{
    public function events(): Collection
    {

        $eventos = Agenda::all();

        return Agenda::query()
            ->whereDate('data_inicio', '>=', $this->gridStartsAt)
            ->whereDate('data_inicio', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Agenda $model) {
                $data = new Carbon($model->data_inicio);
                return [
                    'id' => $model->id,
                    'title' => $model->titulo,
                    'description' => $model->descricao,
                    'date' => $data,
                ];
            });
    }
}