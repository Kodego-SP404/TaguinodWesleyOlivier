<section>
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500" id="StudentReports">
            <thead class="text-xs text gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6"> </th>
                    <th scope="col" class="py-3 px-6">Summary</th>
                </tr>
            </thead>

            <tbody>
                <tr class="bg-gray-800 border-b text-white">
                    <td class="py-4 px-6">Number of Students</td>
                    <td class="py-4 px-6">{{ $students->count() }}</td>
                </tr>
                <tr class="bg-gray-800 border-b text-white">
                    <td class="py-4 px-6">Average Age</td>
                    <td class="py-4 px-6">{{ $students->avg('age') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>    