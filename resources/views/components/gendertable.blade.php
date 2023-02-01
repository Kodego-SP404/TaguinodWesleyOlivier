
    <section>
        <div class="overflow-x-auto relative">
            <table class="w-96 mx-auto text-sm text-center text-gray-500" id="StudentReports">
                <thead class="text-xs text gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Gender</th>
                        <th scope="col" class="py-3 px-6">Number of Students</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students->groupBy('gender') as $gender => $genderGroup)
                        <tr class="bg-gray-800 border-b text-white">
                            <td class="py-4 px-6">{{ $gender }}</td>
                            <td class="py-4 px-6">{{ $genderGroup->count() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>
