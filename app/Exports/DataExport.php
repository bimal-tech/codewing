<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class DataExport implements FromCollection, WithHeadings, WithTitle
{
    /**
     * @return \Illuminate\Support\Collection
     */
    private $path = '';
    private $data = [];
    private $heading = [];
    public function __construct($path)
    {
        $this->path = $path;
        $json = File::get($this->path);
        $this->data = json_decode($json);
        $this->heading = array_keys((array)$this->data[0]);

    }

    public function collection()
    {
        return new Collection($this->data);
    }
    public function headings(): array
    {
        return $this->heading;
    }
    public function title(): string
    {
        return 'Data List';
    }
}
