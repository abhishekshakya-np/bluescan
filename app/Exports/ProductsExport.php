<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Product::query();
    }

    public function map($product): array
    {
        return [
            $product->product_name,
            $product->product_description,
            $product->quantity,
            $product->code,
            $product->codeType,
            $product->region,
            $product->item_form,
            $product->liquid_volume,
            $product->scent,
            $product->category,
            $product->category_path,
            $product->upc,
            $product->ean,
            $product->barcode_url,
            $product->added_date,
            $product->created_at,
            $product->updated_at,
        ];
    }

    public function headings(): array
    {
        return [
            'Product Name',
            'Description',
            'Quantity',
            'Code',
            'Code Type',
            'Region',
            'Item Form',
            'Liquid Volume',
            'Scent',
            'Category',
            'Category Path',
            'UPC',
            'EAN',
            'Barcode URL',
            'Added Date',
            'Created At',
            'Updated At',
        ];
    }
}
