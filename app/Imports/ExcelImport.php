<?php

namespace App\Imports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Categories;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ExcelImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading, WithValidation
{
    private $categories;

    public function __construct()
    {
        $this->categories = Categories::pluck('id', 'name');
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row['producto'],
            'description' => $row['descripcion'],
            'price' => $row['precio'],
            'quantity_left' => $row['en_inventario'],
            'category_id' => 1,
            // 'category_id' => $this->categories[$row['categoria']]
        ]);
    }
    public function batchSize(): int
    {
        return 4000;
    }

    public function chunkSize(): int
    {
        return 4000;
    }

    public function rules(): array
    {
        return [
            '*.en_inventario' => [
                'integer',
                'required'
            ],
            '*.precio' => [
                'numeric',
                'required'
            ]
        ];
    }
}
