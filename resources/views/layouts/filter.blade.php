<tbody class="bg-white">
    @foreach ($query as $property)
        <tr class="border-b border-gray-200 hover:bg-gray-50">
            <td class="px-4 py-3">
                <input type="checkbox" name="selected_properties[]" value="{{ $property->property_id }}" class="property-checkbox rounded">
            </td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ $property->property_code }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ $property->property_title }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ $property->category->category_name ?? 'N/A' }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ $property->locality->locality_name ?? 'N/A' }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ Str::limit(strip_tags($property->property_description), 50) }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ $property->posted_by }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ $property->post_date }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">₹{{ number_format($property->price, 2) }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ $property->is_approved ? 'Active' : 'Inactive' }}</td>
            <td class="px-4 py-3 text-sm text-gray-900">{{ ucfirst($property->priority) }}</td>
        </tr>
    @endforeach
</tbody>

<div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
    {{ $query->links() }}
</div>
