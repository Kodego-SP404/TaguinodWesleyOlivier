<section>
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500" id="StudentReports">
            <thead class="text-xs text gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">Age</th>
                    <th scope="col" class="py-3 px-6">Number of Students</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students->groupBy('age') as $age => $ageGroup)
                    <tr class="bg-gray-800 border-b text-white">
                        <td class="py-4 px-6">{{ $age }}</td>
                        <td class="py-4 px-6">{{ $ageGroup->count() }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>  