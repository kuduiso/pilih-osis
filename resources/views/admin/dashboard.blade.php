@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Dashboard</h3>
<hr class="border border-opacity-60 rounded-md mt-4 border-blue-400 ">

<div class="mt-4">
    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 my-2">
        <div class="bg-white border-l-4 border-blue-700 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-blue-700 text-xs font-bold">TOTAL KANDIDAT</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">2</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-10" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white border-l-4 border-green-500 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-green-500 text-xs font-bold">TOTAL PEMILIH</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">25</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-10" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white border-l-4 border-blue-400 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-blue-400 text-xs font-bold">SUDAH MEMILIH</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">1</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-12" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white border-l-4 border-yellow-500 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-yellow-500 text-xs font-bold">BELUM MEMILIH</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">24</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-12" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-8">

</div>

<div class="flex flex-col mt-8">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div
            class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Name</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Title</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Role</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                        alt="">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">John Doe
                                    </div>
                                    <div class="text-sm leading-5 text-gray-500">john@example.com</div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">Software Engineer</div>
                            <div class="text-sm leading-5 text-gray-500">Web dev</div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                            Owner</td>

                        <td
                            class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
