<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex justify-center pt-48">
    <div class="bg-white overflow-hidden shadow rounded-lg divide-y divide-gray-200 w-8/12 ">
        <div class="px-4 py-5 sm:px-6">
            <h2>Task list</h2>
        </div>
        <div class="px-4 py-5 sm:p-6">
            <div class="bg-white shadow overflow-hidden rounded-md">
                <ul class="divide-y divide-gray-200">
                    <li class="px-6 py-4">
                        foo
                    </li>
                    <li class="px-6 py-4">
                        bar
                    </li><li class="px-6 py-4">
                        baz
                    </li>
                    <li class="px-6 py-4">
                        fizz
                    </li>

                    <!-- More items... -->
                </ul>
            </div>
        </div>
    </div>
</div>


</body>
</html>
