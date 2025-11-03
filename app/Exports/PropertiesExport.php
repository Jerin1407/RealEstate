<?php

namespace App\Exports;

use App\Models\MyProperties;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PropertiesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return MyProperties::with(['category', 'locality', 'user'])
            ->orderBy('post_date', 'DESC') // Sort by post_date in descending order
            ->get()
            ->map(function ($property) {
                return [
                    'Property Code' => $property->property_code,
                    'Property Title' => $property->property_title,
                    'Category' => $property->category->category_name ?? 'N/A',
                    'Location' => $property->locality->locality_name ?? 'N/A',
                    'Property Description' => strip_tags($property->property_description),
                    'Added By' => $property->user->fullname ?? 'N/A',
                    'Added On' => $property->post_date,
                    'Price' => $property->price,
                    'Status' => $property->is_approved ? 'Active' : 'Inactive',
                    'Priority' => ucfirst($property->priority),
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Property Code',
            'Property Title',
            'Category',
            'Location',
            'Property Description',
            'Added By',
            'Added On',
            'Price',
            'Status',
            'Priority',
        ];
    }
}
