<tbody id="propertyTable">
@forelse ($properties as $property)
<tr class="border-b border-gray-200 hover:bg-gray-50">
    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->property_code }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->property_title }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->category->category_name ?? 'N/A' }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->locality->locality_name ?? 'N/A' }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ Str::limit(strip_tags($property->property_description), 50) }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->user->fullname ?? 'N/A' }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->post_date }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">₹{{ number_format($property->price, 2) }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->is_approved ? 'Active' : 'Inactive' }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">{{ ucfirst($property->priority) }}</td>
    <td class="px-4 py-3 text-sm text-gray-900">
        <!-- action buttons -->
    </td>
</tr>
@empty
<tr>
 <td colspan="11" class="text-center py-6 text-gray-600 text-lg">
     No Properties Found
 </td>
</tr>
@endforelse
</tbody>

<div id="paginationWrapper">
    {!! $properties->links() !!}
</div>

<script>
document.getElementById("propertySearch").addEventListener("keyup", function () {
    let search = this.value;

    fetch("{{ route('propertySearch') }}?search=" + search, {
        headers: { "X-Requested-With": "XMLHttpRequest" }
    })
    .then(res => res.text())
    .then(data => {
        // Parse HTML & update only table + pagination
        let parser = new DOMParser();
        let html = parser.parseFromString(data, "text/html");

        document.querySelector("#propertyTable").innerHTML = html.querySelector("#propertyTable").innerHTML;
        document.querySelector("#paginationWrapper").innerHTML = html.querySelector("#paginationWrapper").innerHTML;
    });
});
</script>

